<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    protected $table = 'tech_details';

    public function Printer(){

     return $this->hasOne(Printer::class,'product_id','id');
    }

}
