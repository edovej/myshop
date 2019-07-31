<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fileable = ['name', 'price', 'description', 'image', 'size', 'color', 'quantity',];
}
