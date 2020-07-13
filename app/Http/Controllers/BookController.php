<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class BookController extends Controller
{
    public function index()
    {
        $books = 'All Books';
        return response()->json($books, 200);
    }

    public function auth()
    {
        $data = 'Welcome ' . Auth::user()->name;
        return response()->json($data, 200);
    }
}
