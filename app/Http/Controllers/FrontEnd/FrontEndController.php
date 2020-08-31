<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;

use App\Category;
use App\Subcategory;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FrontEndController extends Controller
{
    public function index(){
        return view('frontEnd.pages.index');
    }

}
