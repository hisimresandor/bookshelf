<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Country;
use App\Models\Language;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        return view('books.index', [
            'books' => Book::orderby('title', 'asc')->filter(request(['writer', 'category', 'publisher', 'year', 'country', 'language', 'search']))->paginate(10)
            // 'books' => Book::latest()->filter(request(['writer', 'category', 'publisher', 'year', 'country', 'language', 'search']))->paginate(10)
        ]);
    }

    public function show(Book $book) {
        return view('books.show', [
            'book' => $book
        ]);
    }

    public function create() {
        return view('books.create', [
            'countries' => Country::all(),
            'categories' => Category::all(),
            'languages' => Language::all(),
        ]);
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'writers' => 'required',
            'publisher' => 'required',
            'country' => 'required',
            'category' => 'required',
            'price' => 'required',
            'language' => 'required',
            'year' => ['required', 'integer'],
            'pages' => ['required', 'integer'],
            'read_pages' => ['required', 'integer'],
            'picture' => ''
        ]);

        if($formFields['picture'] == null) {
            $formFields['picture'] = "/img/no_image.png";
        }

        Book::create($formFields);

        return redirect(route('index'));
    }

    public function edit(Book $book)
    {
        return view('books.edit', [
            'book' => $book,
            'countries' => Country::all(),
            'categories' => Category::all(),
            'languages' => Language::all(),
        ]);
    }

    public function update(Request $request, Book $book)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'writers' => 'required',
            'publisher' => 'required',
            'country' => 'required',
            'category' => 'required',
            'price' => 'required',
            'language' => 'required',
            'year' => ['required', 'integer'],
            'pages' => ['required', 'integer'],
            'read_pages' => ['required', 'integer'],
            'picture' => ''
        ]);

        if($formFields['picture'] == null) {
            $formFields['picture'] = "/img/no_image.png";
        }

        $book->update($formFields);

        return redirect('/books/' . $book->id);
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect(route('index'));
    }
}
