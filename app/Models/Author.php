<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
  protected $fillable = ['name', 'description'];
  protected $primaryKey = 'author_id';
}
