@extends('layout')

@section('title')
  Home | Borrower
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
           <legend>List of Borrowers</legend>
            <ul class="list-group">
             @foreach($borrowers as $borrower)
               <li class="list-group-item"><a href="/borrower/{{$borrower->id}}">{{ $borrower->name }}</a>
                 <form method="post" action="{{ route('borrower.destroy', [$borrower->id])}}">
                   {{ method_field('DELETE') }}
                   {{ csrf_field() }}
                   <button type="submit" class="btn btn-danger btn-xs">Return</button>
                 </form>
             </li>
             @endforeach
          </ul>
           {{ $borrowers->links() }}
           <a href="/borrower/create" class="btn btn-primary pull-right" role="button">Add Borrower</a>
           <a href="/borrower/history" class="btn btn-default" role="button">History</a>
           {{-- <a href="/borrower/register" class="btn btn-primary right" role="button">Register</a> --}}
         </div>
       </div>
     </div>
   </div>
@endsection
