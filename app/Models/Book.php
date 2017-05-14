<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  protected $fillable = ['name', 'author_id', 'subject_id', 'publisher_id', 'description',
    'front_photo', 'back_photo', 'orig_price', 'discount_value', 'total_page', 'width_size',
    'length_size', 'language', 'code_product', 'weight', 'format', 'published_date'];
}
