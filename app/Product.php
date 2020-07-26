<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Permite Crear Productos ya que no hay valores protegidos
    protected $guarded = [];
}
