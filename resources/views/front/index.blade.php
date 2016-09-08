@extends('front.layouts.app')

@section('content')

@section('title', 'Inicio')

<section id="banner">
	<div class="jumbotron">
		<div class="clearfix"></div>
		<div class="container">
			<h1 class="title">
				Aprende inglés con nuestras clases online
			</h1>
			<h2 class="sub_title">
				Tenemos un método sencillo, práctico y cómodo para que aprendas inglés con un profesor particular online.
			</h2>
			<!-- <a href="#" class="btn btn-lg btn-highlight">Cuéntame mas</a> -->

			<div class="godown">
				<a href="#services" class="smoothScroll"><img src="images/home/go-down.png" alt="Ver Mas"></a>
			</div>

		</div>
	</div>	
</section>

<section id="services">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="service">
					<h2>Primera clase ¡GRATIS!</h2>
					<p>En AIL estamos seguros que nuestras clases te van a gustar. Por eso te ofrecemos una clase gratuita para que veas como funciona nuestro método</p>		
				</div>

			</div>

			<div class="col-md-4 ">
				<div class="service middle">
					<h2>Clases personalizadas</h2>
					<p>Realizamos clases adaptadas a las necesidades de cada alumno. Con profesores nativos, aula virtual, recursos online... ¡Y desde la comodidad de tu casa!</p>						
				</div>
			</div>
			<div class="col-md-4 ">
				<div class="service">
					<h2>Soluciones para empresas</h2>
					<p>Ofrecemos toda clase de servicios lingüísticos para mejorar la comunicación de su empresa de un modo práctico y flexible</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>

<div class="hidden-md hidden-lg">
	<img class="img-responsive " src="images/home/separator.png">
	<div class="mobile-separator"></div>
	<img class="img-responsive " src="images/home/separator2.png">
</div>

<section id="banner2">
	<div class="jumbotron">
		<div class="clearfix"></div>
		<div class="container">
			<h1 class="main-title">Trabajamos para ofrecerte el mejor servicio</h1>
			<div class="description col-md-10 col-md-push-1">
				<h2 class="title">
					<span class="fa-stack fa-lg">
						<i class="fa fa-square-o fa-stack-2x"></i>
						<i class="fa fa-comments-o fa-stack-1x"></i>
					</span>
					Clases particulares
				</h2>

				<h3 class="sub_title well">
					<blockquote>
						Con nuestras clases 1 a 1 tendrás un servicio totalmente personalizado y adaptado a tus necesidades. Siempre con profesores cualificados, cuidadosamente seleccionados por su profesionalidad y calidad humana. 
					</blockquote>
				</h3>
			</div>

			<div class="description col-md-10 col-md-push-1">
				<h2 class="title">
					<span class="fa-stack fa-lg">
						<i class="fa fa-square-o fa-stack-2x"></i>
						<i class="fa fa-object-group fa-stack-1x"></i>
					</span>
					Método própio
				</h2>
				<h3 class="sub_title well">
					<blockquote>
						El método de AIL te permite mejorar tu nivel de inglés y preparate para exámenes oficiales como los de Cambridge de un modo cómodo y práctico. Las clases son muy dinámicas y potencian todas las partes del idioma, desde la comunicación hasta la gramática. Dándole especial importancia a la parte comunicativa.
					</blockquote>
				</h3>
			</div>

			<div class="description col-md-10 col-md-push-1">
				<h2 class="title">
					<span class="fa-stack fa-lg">
						<i class="fa fa-square-o fa-stack-2x"></i>
						<i class="fa fa-cloud fa-stack-1x"></i>
					</span>
					Aula virtual
				</h2>
				<h3 class="sub_title well">
					<blockquote>
						Nuestros alumnos cuentan con un espacio en nuestra aula virtual, accesible desde PC, MAC, Android e iPhone, donde pueden consultar los ejercicios, pruebas de examen, fichas y demás material que el profesor ponga a su dispocición. Además, al finalizar la clase, el profesor envía a cada alumno un informe con los fallos cometidos, nuevo vocabulario, y comentarios relacionados.
					</blockquote>
				</h3>
			</div>

			<div class="description col-md-10 col-md-push-1">
				<h2 class="title">
					<span class="fa-stack fa-lg">
						<i class="fa fa-square-o fa-stack-2x"></i>
						<i class="fa fa-bookmark fa-stack-1x"></i>
					</span>
					Recursos
				</h2>
				<h3 class="sub_title well">
					<blockquote>
						Disponemos de una amplia variedad de recursos audiovisuales para ayudarte en tu aprendizaje. Vídeos, charlas, libros y audios... Todo lo que necesites para mejorar tu inglés. 
					</blockquote>
				</h3>
			</div>

			<div class="description col-md-10 col-md-push-1">
				<h2 class="title">
					<span class="fa-stack fa-lg">
						<i class="fa fa-square-o fa-stack-2x"></i>
						<i class="fa fa-pencil fa-stack-1x "></i>
					</span>
					Servicios lingüísticos
				</h2>
				<h3 class="sub_title well">
					<blockquote>
						Ofrecemos servicios de traducción de documentos, presentaciones, emails, páginas web, etc... así como de subtitulación y transcripción. 
					</blockquote>
				</h3>
			</div>

		</div>
	</div>
</section>

<img class="img-responsive" src="images/home/separator.png">

<section id="opinions" class="cf">
	<div id="opiniones" class="container">
		<h1 class="title">
			Que opinan nuestros alumnos
		</h1>
		<h2 class="sub_title">
			Nadie mejor que ellos para valorar nuestra calidad y compromiso
		</h2>
		<div class="main-carousel">

			<div class="carousel-cell">
				<div class="opinion">
					<div class="heading">
						<div class="stars">
							&#9733;&#9733;&#9733;&#9733;&#9733;
						</div>
					</div>
					<div class="triangle"></div>
					<div class="body">
						<p>Las clases son amenas, útiles y variadas. Además de aprender muchisimo en cada clase paso un buen rato. Y el detalle de enviar tanto los errores de gramática además del nuevo vocabulario hacen las clases realmente geniales.</p>
						<div class="author">- Neus -</div>
					</div>
				</div>
			</div>

			<div class="carousel-cell">
				<div class="opinion">
					<div class="heading">
						<div class="stars">
							&#9733;&#9733;&#9733;&#9733;&#9733;
						</div>
					</div>
					<div class="triangle"></div>
					<div class="body">
						<p>Las clases impartidas por este centro al menos las que yo he recibido por skype se adaptan a los objetivos personales de cada uno, además son clases ya preparadas por gente cualificada, respetando el horario estipulado y sin necesidad de tener que moverse o esperar a que el porfesor/a llegue a tu casa, por lo que animo a aquéllos que tengan dudas respecto a las clases por skype.</p>
						<div class="author">- Carmen -</div>
					</div>
				</div>
			</div>

			<div class="carousel-cell">
				<div class="opinion">
					<div class="heading">
						<div class="stars">
							&#9733;&#9733;&#9733;&#9733;&#9733;
						</div>
					</div>
					<div class="triangle"></div>
					<div class="body">
						<p>Mantener un buen nivel de inglés es difícil y más con los caóticos horarios de trabajo. Las clases particulares se adaptan a las necesidades de cada uno y se aprovecha hasta el último minuto de la clase . Son clases preparadas rigurosamente y tras la clase la profesora te manda los errores que has cometido. Y sin duda otra ventaja es que no hay que perder tiempo en desplazarte a la academia y adaptarse a los horarios establecidos.</p>
						<div class="author">- Beatriz -</div>
					</div>
				</div>
			</div>
		</div>

		<a href="http://www.tusclasesparticulares.com/academia/anglo-iberian-languages.aspx#comments" class="btn btn-lg btn-highlight" target="_blank">
			Todas las reseñas
		</a>
	</div>
</section>

<img class="img-responsive" src="images/home/separator2.png">

<section id="mailform">
	<div class="jumbotron">
		<div class="clearfix"></div>
		<div id="contactform" class="container">

			<h1 class="title">
				¿Alguna duda?
			</h1>
			<h2 class="sub_title">Introduce tus datos y te mandaremos mas información</h2>

			<div class="col-md-4 col-md-offset-4">
				<div class="row">

					<ul>
						@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>

					{!! Form::open(['route' => 'front.index.form', 'method' => 'POST', 'class' => 'form']) !!}

					<div class="form-group">
						{!! Form::label('name', 'Nombre', ['class' => 'sr-only'])!!}
						{!! Form::text('name', null, ['required', 'class'=>'form-control', 'placeholder'=>'Dinos tu nombre...']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('email', 'E-mail', ['class' => 'sr-only'])!!}
						{!! Form::text('email', null, ['required', 'class'=>'form-control', 'placeholder'=>'y tu email']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('message', 'Mensaje', ['class' => 'sr-only']) !!}
						{!! Form::textarea('message', null, ['size' => '30x5', 'class' => 'form-control', 'placeholder' => '¿En que podemos ayudarte?']) !!}
					</div>

					<div id="button" class="text-center">
						{!! Form::submit('Enviar',['class'=>'btn btn-lg btn-highlight']) !!}
					</div>

					{!! Form::close() !!}

				</div>
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
</section>

<img class="img-responsive" src="images/home/separator.png">

<footer>
	<small>&copy;2016 Anglo Iberian Languages | <a href="#terms-modal" data-toggle="modal">Términos y condiciones</a> | <a href="#policy-modal" data-toggle="modal">Política de privacidad y cookies</a> | <a class="phone" href="tel:+34620117119">+34 620 117 119</a> |</small>

	<span class="fa-stack fa-lg">
		<a href="http://www.facebook.com/angloiberianlanguages" target="_blank">
			<i class="fa fa-square fa-stack-2x"></i>
			<i class="fa fa-facebook fa-stack-1x "></i>
		</a>
	</span>

</footer>

@endsection
