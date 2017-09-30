@extends('layout2')

@section('title')
  About | Thesis Management
@endsection

@section('style')
  body{
    margin: 26px auto;
  }
@endsection
@section('body')
  <div class="container">
    <div class="jumbotron">
      <div class="container">
        <h1>About Thesis Management System</h1>
        <small>by Computer and Communication System Engineers</small>
      </div>
      <hr>
      <div align="center">
        Thesis management system ease the management of students’ theses. With this, the staff who responsible for thesis management can save a lot work as well as time to handle the huge amount of files.
        At the same time, the rate of error when manage the theses can be reduced and most important thing is, it is user friendly and easy to use.<br>
      </div>
      <hr>
      <div align="center">
        <p>These is one of the mini project for ECC4203 Database Management System subject</p>
        Faculty of Engineering, Computer and Communication System <br>
        Universiti Putra Malaysia <br>
      </div>
      <hr>
      <div align="center">
        <p>Group Members</p>
        Muhammad Haziq Bin Haris (172495)<br>
        Tan Peng Cher (172199)<br>
        Seif Allah El Kari (175740) <br>
        Ting Tiew Hoe (174652)<br>

      </div>
      {{-- <hr> --}}
      <div class="container">
        <hr>
        <footer>
            &copy; 2016 <small> Hasics</small><a class="btn btn-primary btn-sm pull-right" href="/" role="button">Home</a>
        </footer>
      </div>

    </div>
  </div>


@endsection
