@extends('app')

@section('title')
    Add book
@endsection

@section('content')

<div style="margin-top: 20px; margin-bottom: 20px">
<a class="btn btn-primary" href="/books"> back to Book list </a>
    <h3> Please fill the book detail </h3>
    <div>
        <form method="post" action="{{ url("/books") }}">
            {{ csrf_field() }}
            <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">TITLE</label>
                <div class="col-sm-5">
                    <input class="form-control" id="colFormLabelSm" name="title" />
                </div>
            </div>

            <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">AUTHOR</label>
                <div class="col-sm-5">
                    <input class="form-control" name="author"/>
                </div>
            </div>

            <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">PUBLICATION</label>
                <div class="col-sm-5">
                    <input class="form-control" name="publication"/>
                </div>
            </div>

            <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">YEAR</label>
                <div class="col-sm-5">
                    <input class="form-control" type="number" name="year"/>
                </div>
            </div>
           
            
            
            
            
            
            
            <!-- 
            <div>
                <label>
                    Title
                    <input name="title"/>
                </label>
            </div>

            <div>
                <label>
                    Publication
                    <input name="publication"/>
                </label>
            </div>

            <div>
                <label>
                    Author
                    <input name="author"/>
                </label>
            </div>

            <div>
                <label>
                    Year
                    <input name="year" type="number"/>
                </label>
            </div>--> 

            <button class="btn btn-primary" type="submit"> Add </button>
        </form>
    </div>
</div>
@endsection