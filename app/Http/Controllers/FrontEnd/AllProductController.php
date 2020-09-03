<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;

use App\Category;
use App\Subcategory;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AllProductCOntroller extends Controller
{
    protected $product, $category, $subcategory;

    public function __construct(Product $product, Category $category, Subcategory $subcategory)
    {
        $this->product = $product;
        $this->category = $category;
        $this->subcategory = $subcategory;
    }


    public function allProducts()
    {

        $products = $this->product->latest()->paginate(16);
        $categories = $this->category->all();
        $subcategories = $this->subcategory->all();

        // return view('template.template_base', [
        //     'products' => $products,
        //     'categories' => $categories,
        //     'subcategories' => $subcategories
        // ]);
        return view('frontEnd.pages..allproducts', [
            'products' => $products,
            'categories' => $categories,
            'subcategories' => $subcategories
        ]);
    }

}