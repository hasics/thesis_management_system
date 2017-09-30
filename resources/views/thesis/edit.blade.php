@extends('layout')

@section('title')
  Thesis | Create
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
      <div class="">
        <legend>Edit Thesis</legend>
        <form method="post" action="{{route('thesis.update', [$thesis->id])}}">
          {{ method_field('PUT') }}
          {{ csrf_field() }}
          <div class="form-group">
            <label for="title" class="control-label">TITLE *</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="{{old('title', $thesis->title)}}">
          </div>
          <div class="form-group">
            <label for="name" class="control-label">NAME *</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="{{old('name', $thesis->name)}}">
          </div>
          <div class="form-group">
            <label for="matric_no" class="control-label">MATRIC NO. *</label>
            <input type="text" class="form-control" id="matric_no" name="matric_no" placeholder="{{old('matric_no', $thesis->matric_no)}}">
          </div>
          <div class="form-group">
            <label for="faculty" class="control-label">FACULTY</label>
            <input type="text" class="form-control" id="faculty" name="faculty" placeholder="{{old('faculty', $thesis->faculty)}}">
          </div>
          <div class="form-group">
            <label for="department" class="control-label">DEPARTMENT</label>
            <input type="text" class="form-control" id="department" name="department" placeholder="{{old('department', $thesis->department)}}">
          </div>
          <div class="form-group">
            <label for="year" class="control-label">YEAR *</label>
            <input type="text" class="form-control" id="year" name="year" placeholder="{{old('year', $thesis->year)}}">
          </div>
          <div class="form-group">
            <label for="abstract" class="control-label">ABSTRACT</label>
            <textarea name="abstract" rows="8" cols="80" class="form-control" placeholder="{{old('abstract', $thesis->abstract)}}"></textarea>
          </div>
          <button type="submit" class="btn btn-primary pull-right">Save</button>
        </form>
      </div>
    </div>
  </div>


@endsection
