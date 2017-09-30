@extends('layout')

@section('title')
  About | Borrower
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
           <li><a href="/supervisor">Supervisor</a></li>
           <li><a href="/thesis/create">New Thesis</a></li>
           <li class="active"><a href="/borrower">Borrow Thesis</a></li>
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
               <legend>About Borrower</legend>
               <div class="col-md-6">
                   <h3>Name</h3>
                   {{ $borrower->name }}
                   <h3>Email Address</h3>
                   {{ $borrower->email }}

               </div>
               <div class="col-md-6">
                 <h3>Phone No.</h3>
                 {{ $borrower->phone_no }}
                   <h3>Date of Borrow</h3>
                   {{ $borrower->date }}
               </div>

           </div>
       </div>
       <hr>
       <form method="post" action="{{route('borrower.store')}}">
          {{ csrf_field() }}
          <div class="form-group">
              <label for="thesis_id">THESIS</label>
              <select class="form-control" id="thesis_id" name="thesis_id">
                  @foreach ($theses as $thesis)
                      <option value="{{ $thesis->id }}">{{ $thesis->title }} by {{ $thesis->name}}</option>
                  @endforeach
              </select>
          </div>
          <button type="submit" class="btn btn-primary pull-right">Add</button>
       </form>
     </div>
   </div>
@endsection
