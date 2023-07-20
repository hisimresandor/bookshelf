@extends('books.layout')

@section('content')
    <div class="bg-light rounded p-5">
        <h2 class="text-center mb-5">Könyv hozzáadása</h2>
        <form method="POST" action="/books/{{ $book->id }}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="writers" class="form-label">Szerző(k)</label>
                <input type="text" class="form-control" name="writers" id="writers" value="{{ $book->writers }}">
                @error('writers')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Könyv címe</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $book->title }}">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Kategória</label>
                <select class="form-select" name="category" id="category">
                    <option selected>{{ $book->category }}</option>
                    @foreach ($categories as $category)
                        @unless ($category->category == $book->category)
                            <option value="{{ $category->category }}">{{ $category->category }}</option>
                        @endunless
                    @endforeach
                  </select>
                @error('category')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="publisher" class="form-label">Kiadó</label>
                <input type="text" class="form-control" name="publisher" id="publisher" value="{{ $book->publisher }}">
                @error('publisher')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Kiadás éve</label>
                <input type="text" class="form-control" name="year" id="year" value="{{ $book->year }}">
                @error('year')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Kiadás helye</label>
                <select class="form-select" name="country" id="country">
                    <option selected>{{ $book->country }}</option>
                    @foreach ($countries as $country)
                        @unless ($country->country == $book->country)
                            <option value="{{ $country->country }}">{{ $country->country }}</option>
                        @endunless
                    @endforeach
                  </select>
                @error('country')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="language" class="form-label">Nyelv</label>
                <select class="form-select" name="language" id="language">
                    <option selected>{{ $book->language }}</option>
                    @foreach ($languages as $language)
                        @unless ($language->language == $book->language)
                            <option value="{{ $language->language }}">{{ $language->language }}</option>
                        @endunless
                    @endforeach
                  </select>
                @error('language')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pages" class="form-label">Oldalak száma</label>
                <input type="text" class="form-control" name="pages" id="pages" value="{{ $book->pages }}">
                @error('pages')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="read_pages" class="form-label">Olvasott oldalak száma</label>
                <input type="text" class="form-control" name="read_pages" id="read_pages" value="{{ $book->read_pages }}">
                @error('read_pages')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Ár</label>
                <input type="text" class="form-control" name="price" id="price" value="{{ $book->price }}">
                @error('price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="picture" class="form-label">Kép</label>
                <input type="text" class="form-control" name="picture" id="picture" value="{{ $book->picture }}">
                @error('picture')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <img src="{{ $book->picture }}" alt="{{ $book->writers . ' - ' . $book->title }}" title="{{ $book->writers . ' - ' . $book->title }}" class="img-fluid">
            </div>
            <button type="submit" class="btn btn-primary">Mentés</button>
        </form>
    </div>
@endsection