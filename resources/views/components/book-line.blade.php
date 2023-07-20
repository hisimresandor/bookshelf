@props(['book'])

<tr>
    <td>
        <a href="{{ route('show', $book) }}" class="text-decoration-none text-dark">
            {{ $book->title }}
        </a>
    </td>
    <td>
        <x-book-writers :writersCsv="$book->writers" />
    </td>
    <td>
        <a href="{{ route('index') }}?language={{ $book->language }}" class="text-decoration-none text-dark">
            {{ $book->language }}
        </a>
    </td>
    <td>{{ $book->pages }}</td>
    <td>{{ $book->read_pages }}</td>
    <td class="d-none d-md-table-cell">
        @if ($book->read_pages >= $book->pages)
            Igen
        @else
            Nem
        @endif
    </td>
</tr>