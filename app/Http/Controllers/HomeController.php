<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Printer;
use App\Models\Brand;
use App\Models\Category;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $printers=Printer::with('Brand','Category','Image')->get();


        return view('index', ['printers' => $printers]);
    }

    public function details($id){
        $printer=Printer::with('Brand','Category','Image')->where('product.id',$id)->get();

        dd($printer[0]->image);
        return view('details',['printer'=>$printer]);


    }
}

/*('wall_posts.post_date',[$first_date,$date])->paginate(10);*/
