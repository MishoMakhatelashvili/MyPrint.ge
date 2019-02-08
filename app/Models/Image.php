<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    public function Product(){

    return $this->belongsTo(Printer::class,'product_id','id');


    }

}
