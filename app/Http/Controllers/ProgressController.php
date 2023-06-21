<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Progress;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $book = Book::findOrFail($id);

        $progress = $book->progress;
        // $progress = Progress::select(['id', 'reading_progress', 'start_date', 'completion_date', 'book_id', 'created_at', 'updated_at'])->get();

        return view('book.progress-index', [
            'progress' => $progress,
            'book_id' => $id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        return view('book.progress-add', [
            'book_id' => $id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = Book::findOrFail($request->book_id);

        $progress = new Progress;
        $progress->reading_progress = $request->reading_progress;
        $progress->start_date = $request->start_date;
        $progress->completion_date = $request->completion_date;

        $book = $book->progress()->save($progress);

        return redirect()->route('book.progress-index', $request->book_id)->with('sucsess', 'Progress has been added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
