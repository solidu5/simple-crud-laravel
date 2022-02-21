<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
      $books = Book::paginate(10);
      return view('index', ['books' => $books]);
    }
    public function create()
    {
    return view("add");
    }
    //show_specific_data
    public function show($id)
    {
      $books = Book::find($id);
      return view('detail', ['books' => $books]);
    }
    //add_data
    public function store(Request $request)
    {
      $book = new Book();
      $book->title = $request->title;
      $book->author = $request->author;
      $book->publication = $request->publication;
      $book->year = $request->year;
      $book->save();
    
      return redirect('/books');
    }
    public function edit($id)
    {
      $books = Book::find($id);
      return view('edit', ['books' => $books]);
    }
    //update_data
    public function update(Request $request, $id)
    {
      $book = Book::find($id);
      $book->title = $request->title;
      $book->author = $request->author;
      $book->publication = $request->publication;
      $book->year = $request->year;
      $book->update();
    
      return redirect('/books');
    }
    //delete_data
    public function destroy($id)
    {
      $book = Book::find($id);
      $book->delete();
      return redirect('/books');
    }
}
