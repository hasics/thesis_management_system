@extends('layout')

@section('title')
  {{$thesis->title}}
@endsection

@section('body')
  <!-- Static navbar -->
   <nav class="navbar navbar-default navbar-static-top">
     <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="/">Thesis Management</a>
       </div>
       <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav">
           <li class="active"><a href="/thesis">Thesis</a></li>
           <li><a href="/supervisor">Supervisor</a></li>
           <li><a href="/thesis/create">New Thesis</a></li>
           <li><a href="/borrower">Borrow Thesis</a></li>

         </ul>
         <form action="{{ route('thesis.index') }}" class="navbar-form" role="search">
          <div class="input-group pull-right">
            <input type="text" class="form-control" placeholder="Search Thesis, Author ..." name="q">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
          </div>
        </form>
       </div><!--/.nav-collapse -->
     </div>
   </nav>

  <div class="container">
    <div class="jumbotron">
      <div class="row">
        <div>
          <legend>About Thesis <a href="/thesis/{{ $thesis->id }}/edit" class="btn btn-primary btn-xs pull-right" role="button">Edit Thesis</a></legend>
          <div class="col-md-5">
            <h3>Title</h3>
            {{ $thesis->title }}
            <h3>Author</h3>
            {{ $thesis->name }}
            <h3>Matric Number</h3>
            {{ $thesis->matric_no }}
            <h3>Supervisor</h3>
            <a href="/supervisor/{{$thesis->supervisor->id}}">{{ $thesis->supervisor->name }}</a>
          </div>
          <div class="col-md-3">
            <h3>Year</h3>
            {{ $thesis->year }}
            <h3>Faculty</h3>
            {{ $thesis->faculty }}
            <h3>Department</h3>
            {{ $thesis->department }}
          </div>
          <div class="col-md-4">
            <h3>Abstract</h3>
            {{ $thesis->abstract }}
          </div>
        </div>
      </div>
      <hr>
      <div>
          <legend>Borrowed By</legend>
          <ul class="list-group">
              @foreach($thesis->borrower as $borrower)
                  <li class="list-group-item"><a href="/borrower/{{$borrower->id}}">{{ $borrower->name }}</a></li>
              @endforeach
          </ul>
      </div>
    </div>
  </div>


@endsection
