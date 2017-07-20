<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	
    protected $fillable = ['name','description','quantity','price'];
    protected $guarded = ['id'];
    protected $table = 'products';
}
