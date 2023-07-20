@props(['writersCsv'])

@php
    $writers = explode(', ', $writersCsv);
@endphp

@if (count($writers) > 1)
    @foreach ($writers as $writer)
        @if ($writer == $writers[count($writers) - 1])
        <a href="{{ route('index') }}?writer={{ $writer }}" class="text-decoration-none text-dark">
            {{ $writer }}
        </a>
            
        @else
        <a href="{{ route('index') }}?writer={{ $writer }}" class="text-decoration-none text-dark">
            {{ $writer }},
        </a>
            
        @endif
    @endforeach
@else
    @foreach ($writers as $writer)
        <a href="{{ route('index') }}?writer={{ $writer }}" class="text-decoration-none text-dark">
            {{ $writer }}
        </a>
    @endforeach
@endif