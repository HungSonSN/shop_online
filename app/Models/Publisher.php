<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
  protected $fillable = ['name', 'icon', 'description'];
  protected $primaryKey = 'publisher_id';
}
