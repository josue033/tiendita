<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
 public $timestamps = false;


    protected $table ="aulas";

    protected $fillable=['nombre','capacidad'];




}
