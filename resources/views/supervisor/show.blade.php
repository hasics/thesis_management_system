@extends('layout')

@section('title')
    View SV | Supervisor
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
                <legend>About SV <a href="/supervisor/{{ $supervisor->id }}/edit" class="btn btn-primary btn-xs pull-right" role="button">Edit SV</a></legend>
                <div class="col-md-6">
                    <h3>Name</h3>
                    {{ $supervisor->name }}
                </div>
                <div class="col-md-6">
                    <h3>Email Address</h3>
                    {{ $supervisor->email }}
                    <h3>Phone No.</h3>
                    {{ $supervisor->phone_no }}
                </div>
                  <legend>Thesis Supervised</legend>
                  <ul class="list-group">
                      @foreach($supervisor->thesis as $thesis)
                          <li class="list-group-item"><a href="/thesis/{{$thesis->id}}">{{ $thesis->title }}</a></li>
                      @endforeach
                  </ul>

            </div>
        </div>
      </div>
    </div>


@endsection
