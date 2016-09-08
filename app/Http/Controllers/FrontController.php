<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\Http\Requests;

use App\Http\Requests\ContactFormRequest;

use App\Http\Requests\PhoneNumberRequest;

use App\Article;

use App\Category;

use App\Tag;

use Carbon\Carbon;

use Mail;

class FrontController extends Controller
{

	public function __construct(){
		Carbon::setLocale('es');
	}

	public function callMe(PhoneNumberRequest $request)
	{
		$tphone = request('phone');
		// $tphone = $request->phone;
		$data = array( 'phone' => $tphone);

		Mail::send("front.emails.phone-contact-request", $data, function($message) use ($tphone){
			$message->to('kroneohm@gmail.com')
			->subject("Solicitud de contacto telefónico");
		});

		flash()->overlay('Te llamaremos lo antes posible', 'Gracias por contactar');

		return view('front.index');

	}

	public function contactConfirmMailSend(ContactFormRequest $request)
	{
		$email = Input::get('email');
		$name = request('name');
		$data = array( 'email' => $email, 'name' => $name);

		Mail::send("front.emails.fast-contact-confirm", $data, function($message) use ($email, $name){
			$message->to($email)
			->subject("Tu solicitud de contacto se esta procesando...");
		});

			// flash('Tu mensaje ha sido recibido. Nos pondremos en contacto contigo muy pronto :)');
		flash()->overlay('Nos pondremos en contacto contigo muy pronto :)', 'Hemos recibido tu mensaje');

		return view('front.index');
	}

	public function index() 
	{
		$articles = Article::orderBy('id', 'DESC')->where('status', '1')->paginate(6);
		$articles->each(function($articles){
			$articles->category;
			//$articles->image;
		});

		return view('front.blog.index')->with('articles', $articles);
	}

	public function searchCategory($name){
		$category = Category::SearchCategory($name)->first();
		$articles = $category->articles()->paginate(4);
		$articles->each(function($articles){
			$articles->category;
			//$articles->image;
		});
		return view('front.blog.index')->with('articles', $articles);
	}

	public function searchTag($name){
		$tag = Tag::SearchTag($name)->first();
		$articles = $tag->articles()->paginate(4);
		$articles->each(function($articles){
			$articles->tag;
			//$articles->image;
		});
		return view('front.blog.index')->with('articles', $articles);
	}

	public function viewArticle($slug)
	{
		$article = Article::findBySlugOrFail($slug);
		$article->category;
		$article->user;
		$article->image;
		$article->tags;
		return view('front.blog.article')->with('article', $article);
	}

}
