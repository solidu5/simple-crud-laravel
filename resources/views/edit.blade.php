@extends('app')

@section('title')
    Edit book
@endsection

@section('content')
<div style="margin-top: 20px; margin-bottom: 20px">
    <a class="btn btn-primary" href="/books"> back to Book list </a>

    <h3> Please change the data you want yo update </h3>
    
    
        <form method="post" action="{{ url("/books", $books->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">TITLE</label>
                <div class="col-sm-5">
                    <input class="form-control" id="colFormLabelSm" name="title" value="{{ $books->title }}"/>
                </div>
            </div>

            <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">AUTHOR</label>
                <div class="col-sm-5">
                    <input class="form-control" name="author" value="{{ $books->author }}"/>
                </div>
            </div>

            <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">PUBLICATION</label>
                <div class="col-sm-5">
                    <input class="form-control" name="publication" value="{{ $books->publication }}"/>
                </div>
            </div>

            <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">YEAR</label>
                <div class="col-sm-5">
                    <input class="form-control" name="year" value="{{ $books->year }}"/>
                </div>
            </div>
           
           
           
           <!--
             <div>
            <label for="inputPassword6" class="col-form-label">Title</label>
                    <input class="form-control" name="title" value="{{ $books->title }}"/>
                
            </div>

            <div>
                <label>
                    Publication
                    <input name="publication" value="{{ $books->publication }}"/>
                </label>
            </div>

            <div>
                <label>
                    Author
                    <input name="author" value="{{ $books->author }}"/>
                </label>
            </div>

            <div>
                <label>
                    Year
                    <input name="year" type="number" value="{{ $books->year }}"/>
                </label>
            </div>--> 

            <button class="btn btn-primary btn-sm" type="submit"> Update </button>
        </form>
    </div>
</div>
@endsection