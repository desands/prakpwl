<?php

namespace App\Http\Controllers;

use App\Models\Bookshelf;
use Illuminate\Http\Request;

class BookshelfController extends Controller
{
   public function index()  {
     $data['bookshelfs'] = Bookshelf::get();
     return view('bookshelf.index')->with($data);
   }
}
