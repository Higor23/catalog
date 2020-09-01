<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Subcategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    protected $category;

    public function __construct(Category $category, Subcategory $subcategory)
    {
        $this->category = $category;
        $this->subcategory = $subcategory;
    }

    
    public function index()
    {
        $categories = $this->category->paginate();

        return view('admin.pages.categories.index', [
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        
        return view('admin.pages.categories.create');
    }


    public function store(Request $request)
    {
        $this->category->create($request->all());

        return redirect()->route('categories.index');
    }


    public function show($id)
    {
        // $subcategories = $this->subcategory->all();
        // if (!$category = $this->category->find($id)){
        //     return redirect()->back();
        // }
        $category = $this->category->find($id);
        $subcategories = $category->subcategories()->get();

        // $subcategories = Subcategory::all();

        return view('admin.pages.categories.show', ['category' => $category, 'subcategories' => $subcategories]);
    }


    public function edit($id)
    {
        if (!$category = $this->category->find($id)){
            return redirect()->back();
        }

        return view('admin.pages.categories.edit', ['category' => $category]);
    }


    public function update(Request $request,  $id)
    {
        if (!$category = $this->category->find($id)){
            return redirect()->back();
        }

        $category->update($request->all());

        return redirect()->route('categories.index');
    }


    public function destroy($id)
    {
        if (!$category = $this->category->find($id)){
            return redirect()->back();
        }

        $category->delete();

        return redirect()->route('categories.index'); 
    }
}
