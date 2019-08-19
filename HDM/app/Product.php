<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';

    /*
    public function scopeSelectAll()
    {$test = Test::all();
    foreach ($test as $prova) {
            return $prova->product_type;}
    }
    */
}


