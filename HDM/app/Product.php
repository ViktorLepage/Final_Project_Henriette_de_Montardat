<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'hdm_products';
    protected $primaryKey = 'product_id';

    /*
    public function scopeSelectAll()
    {$test = Test::all();
    foreach ($test as $prova) {
            return $prova->product_type;}
    }
    */
}
