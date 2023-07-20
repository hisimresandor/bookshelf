@extends('books.layout')

@section('content')
<table class="table table-striped table-hover">
    <tbody>
        <x-book-table :book="$book" />
    </tbody>
</table>
@endsection