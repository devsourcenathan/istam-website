<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('dashboard.pages.books.index', compact('books'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.pages.books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required',
            'description' => 'required',
            'source' => 'required|mimes:pdf|max:2048',
            'category_id' => 'required|exists:categories,id'
        ]);

        $imagePath = $request->file('image')->store('public/images');
        $sourcePath = $request->file('source')->store('public/source');

        $book = new Book();
        $book->image = $imagePath;
        $book->title = $request->title;
        $book->description = $request->description;
        $book->source = $sourcePath;
        $book->category_id = $request->category_id;
        $book->save();

        return redirect()->route('dashboard.pages.books.index');
    }

    public function show(Book $book)
    {
        return view('dashboard.pages.books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $categories = Category::all();
        return view('dashboard.pages.books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required',
            'description' => 'required',
            'source' => 'nullable|mimes:pdf|max:2048',
            'category_id' => 'required|exists:categories,id'
        ]);

        if ($request->hasFile('image')) {
            Storage::delete($book->image);
            $imagePath = $request->file('image')->store('public/images');
            $book->image = $imagePath;
        }

        if ($request->hasFile('source')) {
            Storage::delete($book->source);
            $sourcePath = $request->file('source')->store('public/source');
            $book->source = $sourcePath;
        }

        $book->title = $request->title;
        $book->description = $request->description;
        $book->category_id = $request->category_id;
        $book->save();

        return redirect()->route('dashboard.pages.books.index');
    }

    public function destroy(Book $book)
    {
        Storage::delete($book->image);
        Storage::delete($book->source);
        $book->delete();

        return redirect()->route('dashboard.pages.books.index');
    }
}
