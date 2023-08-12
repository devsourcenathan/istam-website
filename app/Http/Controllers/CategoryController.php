<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('categories.index');
    }

    public function show(Category $category)
    {
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
        $category->delete();
        return redirect()->route('categories.index');
    }
}
