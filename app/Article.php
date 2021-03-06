<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Article extends Model 
{
  use Sluggable;
  use SluggableScopeHelpers;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
      return [
      'slug' => [
      'source' => 'title'
      ]
      ];
    }

    protected $table = "articles";

    protected $fillable = ['title', 'content', 'category_id', 'user_id', 'status', 'image'];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    // public function image()
    // {
    // 	return $this->hasMany('App\Image');
    // }

    public function tags()
    {
      return $this->belongsToMany('App\Tag');
    }

    public function scopeSearch($query, $title) 
    {
      return $query->where('title', 'LIKE', "%$title%");
    }
  }
