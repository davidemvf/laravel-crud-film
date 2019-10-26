<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
  protected $fillable = [
'title',
'film_director',
'description',
'genre',
'rating'
];
}
