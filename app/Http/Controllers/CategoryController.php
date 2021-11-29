<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Detail;
use Illuminate\Http\Request;

//created and coded by Andriatama Bagaskara
class CategoryController extends Controller
{
    public function index($id)
    {
        foreach (Category::all() as $list) {
            if ($id == $list['id']) $category = $list;
        }

        return view('category', ['category' => $category]);
    }
}
