<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class StartController extends Controller
{

    public function index(){

        View::composer(['layouts.navigation'], function ($view){
            $view->with(['navigation' => Navigation::get()]);
        });

        $users = User::with(['books'])->whereHas('books')->get();
        return view('index', ['users' => $users]);
    }

    public function books(){
        View::composer(['layouts.navigation'], function ($view){
            $view->with(['navigation' => Navigation::get()]);
        });
        $books = Book::with('categories')->get();
        return view('books', ['books' => $books]);
    }

//    public function categories(){
//        $category = Category::with('books')->get();
//    }
}
