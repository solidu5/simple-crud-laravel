@extends('app')

@section('title')
    Book List
@endsection

@section('content')
<div class="table-responsive-sm">
    <table class="table table-striped table-sm">
        <a class="btn btn-primary" href="/books/add"> Add new book</a>
    
        <thead>
            <td> No </td>
            <td> Title </td>
            <td> Author </td>
            <td> Publication </td>
            <td> Year </td>
            <td colspan="2"> Action </td>
        </thead>
        <tbody>
            @foreach ($books as $index => $book)
           
                <tr>
                    <td> {{ $index + $books->firstItem() }}</td>
                    <td> <a href="{{ url("/books", $book->id) }}" > {{ $book->title }} </a> </td>
                    <td> {{ $book->author }} </td>
                    <td> {{ $book->publication }} </td>
                    <td> {{ $book->year }}</td>
                    <td> <a class="btn btn-secondary btn-sm" href="{{ url("/books/edit", $book->id) }}"> Edit </a> </td>
                    <td>
                        <form method="POST" action="/books/{{$book->id}}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                           
                            <input class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure?, this action will delete {{$book->title}}')" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        <tr>
        <td>{{$books->links()}}</td>
        <td>Total Data : {{ $books->total() }}</td>
        </tr>
    </div>
</div>

@endsection