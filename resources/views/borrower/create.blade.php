@extends('layout')

@section('title')
  Add | Borrower
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
       <div>
         <legend>Add Borrower</legend>
         <form method="post" action="{{route('borrower.store')}}">
           {{ csrf_field() }}
           <div class="form-group">
             <label for="name" class="control-label requiredField">NAME *</label>
             <input type="text" class="form-control" id="name" name="name">
           </div>
           <div class="form-group">
             <label for="matric_no" class="control-label requiredField">MATRIC NO. *</label>
             <input type="text" class="form-control" id="matric_no" name="matric_no">
           </div>
           <div class="form-group">
             <label for="email" class="control-label requiredField">EMAIL *</label>
             <input type="email" class="form-control" id="email" name="email">
           </div>
           <div class="form-group">
             <label for="phone_no" class="control-label requiredField">PHONE NO. *</label>
             <input type="text" class="form-control" id="phone_no" name="phone_no">
           </div>
           <div class="form-group">
               <label for="thesis_id">THESIS</label>
               <select class="form-control" id="thesis_id" name="thesis_id">
                   @foreach ($theses as $thesis)
                       <option value="{{ $thesis->id }}">{{ $thesis->title }} by {{ $thesis->name}}</option>
                   @endforeach
               </select>
           </div>
           <div class="form-group">
             <label for="date" class="control-label" >DATE OF BORROW <span class="asteriskField">*</span></label>
             <input type="text" class="form-control" id="date" name="date" placeholder="YYYY-MM-DD">
           </div>

           <button type="submit" class="btn btn-primary pull-right">Add</button>
         </form>
       </div>
     </div>
   </div>


@endsection

@section('script')
  <!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
@endsection
