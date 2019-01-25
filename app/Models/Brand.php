<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';

    public function Printer(){

     return $this->hasMany(Printer::class,'id','brand_id');
    }

/*    public function Model(){

     return $this->hasMany(Model::class,'id','brand_id');
    }*/

}
