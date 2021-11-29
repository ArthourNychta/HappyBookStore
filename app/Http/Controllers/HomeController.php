<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Detail;
use Illuminate\Http\Request;

//created and coded by Andriatama Bagaskara
class HomeController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $book = Book::all();
        $detail = Detail::all();

        return view('home', ['book' => $book, 'category' => $category, 'detail' => $detail]);
    }
}
