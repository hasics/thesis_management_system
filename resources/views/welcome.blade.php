@extends('layout2')

@section('title')
  Homepage | Thesis Management
@endsection
@section('style')
  body{
    margin: 110px auto;
  }
@endsection
@section('body')
  <div class="container">
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome to Thesis Management System</h1>
        <small>by Computer and Communication System Engineers</small>
      </div>
      <hr>
      <div class="col-md-4">
        <p><a class="btn btn-primary btn-lg center-block" href="/thesis" role="button">List Thesis &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <p><a class="btn btn-primary btn-lg center-block" href="/supervisor" role="button">List Supervisor &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <p><a class="btn btn-primary btn-lg center-block" href="/borrower" role="button">Borrow Thesis &raquo;</a></p>
      </div>
      <hr>
      <div class="container">
        <hr>
        <footer>
            &copy; 2016 <small> Hasics</small><a class="btn btn-default btn-sm pull-right" href="/about" role="button">About</a>
        </footer>
      </div>

    </div>
  </div>


@endsection
