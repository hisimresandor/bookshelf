@extends('books.layout')

@section('content')
    <div class="bg-light rounded p-5">
        <h2 class="text-center mb-5">Könyv hozzáadása</h2>
        <form method="POST" action="{{ route('store') }}">
            @csrf
            <div class="mb-3">
                <label for="writers" class="form-label">Szerző(k)</label>
                <input type="text" class="form-control" name="writers" id="writers" value="{{ old('writers') }}">
                @error('writers')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Könyv címe</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Kategória</label>
                <select class="form-select" name="category" id="category">
                    <option selected>{{ old('category') }}</option>
                    @foreach ($categories as $category)
                        @unless ($category->category == old('category'))
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
                <input type="text" class="form-control" name="publisher" id="publisher" value="{{ old('publisher') }}">
                @error('publisher')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Kiadás éve</label>
                <input type="text" class="form-control" name="year" id="year" value="{{ old('year') }}">
                @error('year')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Kiadás helye</label>
                <select class="form-select" name="country" id="country">
                    <option selected>{{ old('country') }}</option>
                    @foreach ($countries as $country)
                        @unless ($country->country == old('country'))
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
                    <option selected>{{ old('language') }}</option>
                    @foreach ($languages as $language)
                        @unless ($language->language == old('language'))
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
                <input type="text" class="form-control" name="pages" id="pages" value="{{ old('pages') }}">
                @error('pages')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="read_pages" class="form-label">Olvasott oldalak száma</label>
                <input type="text" class="form-control" name="read_pages" id="read_pages" value="{{ old('read_pages') }}">
                @error('read_pages')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Ár</label>
                <input type="text" class="form-control" name="price" id="price" value="{{ old('price') }}">
                @error('price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="picture" class="form-label">Kép</label>
                <input type="text" class="form-control" name="picture" id="picture" value="{{ old('picture') }}">
                @error('picture')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Könyv hozzáadása</button>
        </form>
    </div>
@endsection