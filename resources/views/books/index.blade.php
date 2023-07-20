@extends('books.layout')

@section('content')
<table class="table table-striped table-hover">
    <thead class="thead-dark">
        <tr>
            <th>Könyv címe</th>
            <th>Szerző(k)</th>
            <th>Nyelv</th>
            <th>Oldalak száma</th>
            <th>Olvasott oldalak száma</th>
            <th class="d-none d-md-table-cell">Kiolvasott</th>
        </tr>
    </thead>
    <tbody>
        @if(count($books) == 0)
            <td colspan="6" class="text-center fw-bold">Nem található könyv!</td>
        @endif
        @foreach ($books as $book)
            <x-book-line :book="$book" />
        @endforeach
    </tbody>
</table>

{{ $books->links() }}
@endsection