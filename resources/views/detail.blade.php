@extends('app')

@section('title')
    Book Details
@endsection

@section('content')
<div style="margin-top: 20px; margin-bottom: 20px">
<a class="btn btn-primary" href="/books"> back to Book list </a>

    <p> Here is the book detail </p>
    <table class="table table-bordered">
    <tr> <td> Title </td> <td>{{ $books->title }}</td> </tr>
    <tr> <td> Publication </td> <td>{{ $books->publication }} </td> </tr>
    <tr> <td> Author </td> <td> {{ $books->author }} </td> </tr>
    <tr> <td> Year </td> <td> {{ $books->year }} </td> </tr>
    
    </table>
</div>

@endsection