<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Detail;
use Illuminate\Http\Request;

//created and coded by Andriatama Bagaskara
class DetailController extends Controller
{
    public function index($id)
    {
        foreach (Book::all() as $list) {
            if ($id == $list['id']) $book = $list;
        }

        return view('detail', ['book' => $book]);
    }
}
