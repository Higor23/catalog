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
    protected $product, $category, $subcategory;

    public function __construct(Product $product, Category $category, Subcategory $subcategory)
    {
        $this->product = $product;
        $this->category = $category;
        $this->subcategory = $subcategory;
    }


    public function index()
    {

        $products = $this->product->latest()->paginate(1);
        $categories = $this->category->all();
        $subcategories = $this->subcategory->all();

        return view('frontEnd.pages.index', [
            'products' => $products,
            'categories' => $categories,
            'subcategories' => $subcategories
        ]);
    }

    public function filterCategory()
    {
        $products = $this->product->latest()->paginate(1);
        $categories = $this->category->where('name', 'Personalizados');
        $subcategories = $this->subcategory->all();

        return view('frontEnd.pages.index', [
            'products' => $products,
            'categories' => $categories,
            'subcategories' => $subcategories
        ]);
    }

}
