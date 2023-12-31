<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $books = DB::table('books')->get();
        $books = Book::select(['id', 'author', 'title', 'genre', 'page_count', 'status', 'created_at', 'updated_at'])->get();

        return view('book.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = Book::create($request->all());

        return redirect()->route('book.index')->with('success', 'Book has been successfully created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::findOrFail($id);

        return view('book.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::findOrFail($id);

        return view('book.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::findOrFail($id);

        $book->title = $request->title;
        $book->author = $request->author;
        $book->genre = $request->genre;
        $book->page_count = $request->page_count;
        $book->status = $request->status;

        $book->save();

        return redirect()->route('book.index')->with('success', 'Book has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
