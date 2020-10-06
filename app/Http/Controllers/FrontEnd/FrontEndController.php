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

        $products = $this->product->latest()->paginate(16);
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
        $products = $this->product->latest()->paginate(16);
        $categories = $this->category->all();
        $subcategories = $this->subcategory->all();
        $categoryId = $this->category->where('category_id', $category_id);
        $categoryFilter = $products->where('category_id', $category_id);
        

        return view('frontEnd.pages.filtercategory', [
            'products' => $products,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'categoryFilter' => $categoryFilter,
            'categoryId' => $categoryId,
        ]);
    }

    public function filterSubcategory($category_id)
    {
        $products = $this->product->latest()->paginate(16);
        $categories = $this->category->all();
        $subcategories = $categories->category()->get();
        // $subcategories = $this->subcategory->all();
        $categoryFilter = $products->where('category_id', $category_id);
        // $subcategoryFilter = $products->where('subcategory_id', $subcategory_id);
        // $subcategoryFilter = $categoryFilter->where('subcategory_id', $subcategory_id);

        return view('frontEnd.pages.filtersubcategory', [
            'products' => $products,
            'categories' => $categories,
            'subcategories' => $subcategories,
            // 'subcategoryFilter' => $subcategoryFilter,
            'categoryFilter' => $categoryFilter,
        ]);
    }

}


