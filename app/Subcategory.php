<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    //
    protected $table = "subcategories";
    protected $fillable = ['cat_id','name','details'];
}
