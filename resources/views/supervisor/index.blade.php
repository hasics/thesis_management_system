@extends('layout')

@section('title')
  Supervisor | Home
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
           <li><a href="/thesis">Thesis</a></li>
           <li class="active"><a href="/supervisor">Supervisor</a></li>
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
            <legend>List of Supervisor</legend>
            <ul class="list-group">
              @foreach($supervisors as $supervisor)
                <li class="list-group-item"><a href="/supervisor/{{$supervisor->id}}">{{ $supervisor->name }}</a></li>
              @endforeach
            </ul>
            {{ $supervisors->links() }}
            <a href="/supervisor/create" class="btn btn-primary pull-right" role="button">Add Supervisor</a>
          </div>
        </div>
      </div>
    </div>



@endsection
