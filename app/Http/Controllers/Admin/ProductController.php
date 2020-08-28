<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Category;
use App\Subcategory;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
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

        $products = $this->product->paginate();
        $categories = Category::all();
        $subcategories = Subcategory::all();


        return view('admin.pages.products.index', [
            'products' => $products,
            'categories' => $categories,
            'subcategories' => $subcategories
        ]);
    }

    public function create()
    {

        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('admin.pages.products.create', ['categories' => $categories, 'subcategories' => $subcategories]);
    }

    public function store(Request $request)
    {

        // $request->validate([
        //     'description' => 'required',
        //     'quantidade' => 'required',
        //     'preco' => 'required',
        //     'custo' => 'required',
        //     'unidadeMedida_id' => 'required',
        // ]);

        $data = $request->all();

        if ($request->hasFile('image01') && $request->image01->isValid()) {
            $imagePath = $request->image01->store('/products');
        
            $data['image01'] = $imagePath;
        }

        if ($request->hasFile('image02') && $request->image02->isValid()) {
            $imagePath = $request->image02->store('/products');
        
            $data['image02'] = $imagePath;
        }

        if ($request->hasFile('image03') && $request->image03->isValid()) {
            $imagePath = $request->image03->store('/products');
        
            $data['image03'] = $imagePath;
        }

        $this->product->create($data);


        return redirect()->route('products.index');
    }


    public function show($id)
    {
        $product = $this->product->find($id);

        if (!$product) {
            return redirect()->back();
        }

        return view('admin.pages.products.show', ['product' => $product]);
    }


    public function edit($id)

    {
        $product = $this->product->find($id);

        $categories = $this->category::all();
        $subcategories = $this->subcategory::all();

        return view('admin.pages.products.edit', [
            'product' => $product,
            'subcategories' =>  $subcategories,
            'categories' =>  $categories
        ]);
    }


    public function update(Request $request, $id)
    {
        $product = $this->product->find($id);
        // $request->validate([
        //     'descricao' => 'required',
        //     'quantidade' => 'required',
        //     'preco' => 'required',
        //     'custo' => 'required',
        //     'unidadeMedida_id' => 'required',
        // ]);
        $data = $request->all();

        if ($request->hasFile('image01') && $request->image01->isValid()) {
            $imagePath = $request->image01->store('/products');
        
            $data['image01'] = $imagePath;
        }

        if ($request->hasFile('image02') && $request->image02->isValid()) {
            $imagePath = $request->image02->store('/products');
        
            $data['image02'] = $imagePath;
        }

        if ($request->hasFile('image03') && $request->image03->isValid()) {
            $imagePath = $request->image03->store('/products');
        
            $data['image03'] = $imagePath;
        }

        $product->update($data);

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = $this->product->find($id);
        
        if ($product->image01 && Storage::exists($product->image01)){
            Storage::delete($product->image01);
        }

        if ($product->image02 && Storage::exists($product->image02)){
            Storage::delete($product->image02);
        }

        if ($product->image03 && Storage::exists($product->image03)){
            Storage::delete($product->image03);
        }
        
        $product->delete();

        return redirect()->route('products.index');
    }
}
