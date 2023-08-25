<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.pages.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.pages.categories.create');
    }

    function find($id)
    {
        $cat = Category::find($id);

        $books = Book::where("category_id", $cat->id)->get();
        $categories = Category::all();
        return view('dashboard.pages.index', compact('categories', 'books', 'cat'));
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('categories.index');
    }

    public function show(Category $category)
    {
        // dd($category);
        return view('dashboard.pages.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('dashboard.pages.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        // dd($category);÷÷
        $category->delete();
        return redirect()->route('categories.index');
    }
}
