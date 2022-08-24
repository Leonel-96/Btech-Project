<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $fillabe =  ['cat_id','subcat_id','name','manufacturer','image','details','price'];
}
