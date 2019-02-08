<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Printer extends Model
{

    protected $table = 'product';

    public $timestamps = false;

    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id','id');
    }

    public function Category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function Photos(){

     return $this->hasMany(Image::class,'product_id','id');
    }


    public function Seria(){

      return $this->hasOne(Seria::class,'id','model_id');

    }

    public function Details(){

      return $this->hasOne(details::class,'id','product_id');

    }

}

