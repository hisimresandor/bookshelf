@props(['book'])

<tr>
    <th>Könyv címe</th>
    <td>
        <a href="{{ route('show', $book) }}" class="text-decoration-none text-dark">
            {{ $book->title }}
        </a>
    </td>
</tr>
<tr>
    <th>Szerző(k)</th>
    <td>
        <x-book-writers :writersCsv="$book->writers" />
    </td>
</tr>
<tr>
    <th>Kategória</th>
    <td>
        <a href="{{ route('index') }}?category={{ $book->category }}" class="text-decoration-none text-dark">
            {{ $book->category }}
        </a></td>
</tr>
<tr>
    <th>Kiadó</th>
    <td>
        <a href="{{ route('index') }}?publisher={{ $book->publisher }}" class="text-decoration-none text-dark">
            {{ $book->publisher }}
        </a>
    </td>
</tr>
<tr>
    <th>Kiadás éve</th>
    <td>
        <a href="{{ route('index') }}?year={{ $book->year }}" class="text-decoration-none text-dark">
            {{ $book->year }}
        </a>
    </td>
</tr>
<tr>
    <th>Kiadás helye</th>
    <td>
        <a href="{{ route('index') }}?country={{ $book->country }}" class="text-decoration-none text-dark">
            {{ $book->country }}
        </a>
    </td>
</tr>
<tr>
    <th>Nyelv</th>
    <td>
        <a href="{{ route('index') }}?language={{ $book->language }}" class="text-decoration-none text-dark">
            {{ $book->language }}
        </a>
    </td>
</tr>
<tr>
    <th>Oldalak száma</th>
    <td>{{ $book->pages }}</td>
</tr>
<tr>
    <th>Olvasott oldalak száma</th>
    <td>{{ $book->read_pages }}</td>
</tr>
<tr>
    <td colspan="2">
        <div class="progress">
            @if ($book->pages == 0)
            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
            @else
                <div class="progress-bar" role="progressbar" style="width: {{ ($book->read_pages / $book->pages) * 100 }}%;" aria-valuenow="{{ ($book->read_pages / $book->pages) * 100 }}" aria-valuemin="0" aria-valuemax="100">{{ round(($book->read_pages / $book->pages) * 100) }}%</div>
            @endif
        </div>
    </td>
</tr>
<tr>
    <th>Kiolvasott</th>
    <td>
        @if ($book->read_pages >= $book->pages)
            Igen
        @else
            Nem
        @endif
    </td>
</tr>
<tr>
    <th>Ár</th>
    <td>{{ $book->price }}</td>
</tr>
<tr>
    <th>Kép</th>
    <td>
        <img src="{{ $book->picture }}" alt="{{ $book->writers . ' - ' . $book->title }}" class="img-fluid" title="{{ $book->writers . ' - ' . $book->title }}">
    </td>
</tr>
<tr>
    <td>
        <button class="btn btn-primary" onclick="document.location='{{ route('edit', $book) }}'">Szerkesztés</button>
    </td>
    <td>
        <form action="{{ route('destroy', $book) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger float-end">Törlés</button>
        </form>
    </td>
</tr>