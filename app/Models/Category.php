<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = ['title'];
  protected $primaryKey = 'category_id';

  public function subjects()
  {
  	return $this->hasMany('App\Models\Subject', 'category_id', 'category_id');
  }

  public function authors()
  {
    return $this->belongsToMany('App\Models\Author', 'authors_categories');
  }  

  public function publishers()
  {
    return $this->belongsToMany('App\Models\Publisher', 'categories_publishers');
  }    
}
