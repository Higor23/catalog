<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;

use App\Category;
use App\Subcategory;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DetailProductController extends Controller
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

    public function filterCategory($category_id)
    {
        $products = $this->product->latest()->paginate(1);
        $categories = $this->category->all();
        $subcategories = $this->subcategory->all();

        $category01 = $products->where('category_id', $category_id);

        return view('frontEnd.pages.filtercategory', [
            'products' => $products,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'category01' => $category01,
        ]);
    }

    public function show($url, $category_id)
    {
        $product = $this->product->where('url', $url)->first();
       
        $products = $this->product->latest()->paginate(1);
        $categories = $this->category->all();
        $subcategories = $this->subcategory->all();
        $category01 = $products->where('category_id', $category_id);

        if (!$product) {
            return redirect()->back();
        }

        return view('frontEnd.pages.detailproduct', [
            'product' => $product,
            'products' => $products,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'category01' => $category01,
        ]);
    }
}
