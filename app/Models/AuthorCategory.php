<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuthorCategory extends Model
{
	  protected $table = 'authors_categories';
    protected $fillable = ['category_id', 'author_id'];
}
