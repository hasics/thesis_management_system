@extends('layout')

@section('title')
  Supervisor | New
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
      <div>
        <legend>Add New Supervisor</legend>
        <form method="post" action="{{route('supervisor.store')}}">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="name" class="control-label">NAME *</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
            <label for="phone_no" class="control-label">PHONE NO. *</label>
            <input type="text" class="form-control" id="phone_no" name="phone_no">
          </div>
          <div class="form-group">
            <label for="email" class="control-label">EMAIL *</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <button type="submit" class="btn btn-primary pull-right">Add</button>
        </form>
      </div>
    </div>
  </div>


@endsection
