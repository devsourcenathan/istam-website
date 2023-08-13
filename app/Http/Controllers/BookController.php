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

    function display_book($id)
    {
        $book = Book::where('title', $id)->get()->first();
        return view('dashboard.pages.books.display', compact('book'));
    }

    public function store(Request $request)
    {
        $book = new Book();
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $book->image = str_replace('storage/', 'public/', $imagePath);
        } else {
            $book->image = null;
        }

        if ($request->hasFile('source')) {
            $sourcePath = $request->file('source')->store('public/source');
            $book->url = str_replace('storage/', 'public/', $sourcePath);
        } else {
            $book->url = null;
        }

        $book->title = $request->title;
        $book->description = $request->description;

        $book->category_id = $request->category_id;
        $book->save();

        return redirect()->route('books.index');
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

        if ($request->hasFile('image')) {
            Storage::delete($book->image);
            $imagePath = $request->file('image')->store('public/images');
            $book->image = str_replace('storage/', 'public/', $imagePath);
        }

        if ($request->hasFile('source')) {
            Storage::delete($book->source);
            $sourcePath = $request->file('source')->store('public/source');
            $book->url = str_replace('storage/', 'public/', $sourcePath);
        }

        $book->title = $request->title;
        $book->description = $request->description;
        $book->category_id = $request->category_id;
        $book->save();

        return redirect()->route('books.index');
    }

    public function destroy(Book $book)
    {
        Storage::delete($book->image);
        Storage::delete($book->source);
        $book->delete();

        return redirect()->route('dashboard.pages.books.index');
    }
}
