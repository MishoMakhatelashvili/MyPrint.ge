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
        $printers=Printer::with('Brand','Category','Photos')->get();



        return view('index', ['printers' => $printers]);


    }

    public function details($id){
        $printer=Printer::with('Brand','Category','Photos')->where('product.id',$id)->get();

        return view('details', ['printer' => $printer]);

    }
}

