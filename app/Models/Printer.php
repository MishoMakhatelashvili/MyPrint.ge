<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    protected $table = 'product';

    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id','id');
    }

    public function Category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function Image(){

     return $this->hasMany(Image::class,'product_id','id');
    }


    public function Seria(){

      return $this->hasOne(Seria::class,'id','model_id');

    }

}

