<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use function PHPUnit\Framework\stringContains;

class BookController extends Controller
{
    public function index()
    {
        $users = User::get();
        $books = Book::get();
        return view('books.index', ['books' => $books, 'users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::get();
        $book = Book::create(['name'=> $request->input('name'), 'user_id'=> $request->input('id')]);
        return response()->redirectTo('/admin/books');


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
        $book = Book::findOrFail($id);
        return view('books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Book::where('id', $id)->update(['name'=> $request->input('name')]);
        return response()->redirectTo('admin/books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Book::destroy($id);
        return response()->redirectTo('admin/books');
    }

}
