<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index(){
        $users = User::with('books')->get();
        return view('index', ['users' => $users]);
    }

    public function books(){
        $books = Book::with('categories')->get();
        dd($books);
    }

    public function categories(){
        $category = Category::with('books')->get();
        dd($category);
    }
}
