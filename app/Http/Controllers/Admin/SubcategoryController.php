<?php

namespace App\Http\Controllers\Admin;

use App\Subcategory;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{

    protected $subcategory;

    public function __construct(Subcategory $subcategory, Category $category)
    {
        $this->subcategory = $subcategory;
        $this->category = $category;
    }

    
    public function index()
    {
        $subcategories = $this->subcategory->paginate();
        $categories = $this->category->all();

        return view('admin.pages.subcategories.index', [
            'subcategories' => $subcategories, 'categories' => $categories
        ]);
    }


    public function create()
    {
        $categories = $this->category->all();
        return view('admin.pages.subcategories.create', ['categories' => $categories]);
    }


    public function store(Request $request)
    {
        $this->subcategory->create($request->all());

        return redirect()->route('subcategories.index');
    }


    public function show($id)
    {
        $categories = $this->category->all();
        if (!$subcategory = $this->subcategory->find($id)){
            return redirect()->back();
        }

        return view('admin.pages.subcategories.show', ['subcategory' => $subcategory, 'categories' => $categories]);
    }


    public function edit($id)
    {
        $categories = $this->category->all();
        if (!$subcategory = $this->subcategory->find($id)){
            return redirect()->back();
        }

        return view('admin.pages.subcategories.edit', [
            'subcategory' => $subcategory, 'categories' => $categories]);
    }


    public function update(Request $request,  $id)
    {
        if (!$subcategory = $this->subcategory->find($id)){
            return redirect()->back();
        }

        $subcategory->update($request->all());

        return redirect()->route('subcategories.index');
    }


    public function destroy($id)
    {
        if (!$subcategory = $this->subcategory->find($id)){
            return redirect()->back();
        }

        $subcategory->delete();

        return redirect()->route('subcategories.index'); 
    }
}
