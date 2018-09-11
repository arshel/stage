<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
          <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    <link rel="stylesheet" href="css/app.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
     <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>

@extends('layouts.app')

@section('content')

<div class="container">
    <h1>A task</h1>
    

<div class="card">
            <div class="row">
               
                <div class="col-md-4 col-sm-4">
                    <h3>{{$task->body}}</h3>
                    <p>{{$task->disc}}</p>
                    <small>written on {{$task->created_at}}  </small>
                  
                </div>
                  
            <!--<img style="width:30%; height:30%" class=" float-right" src="storage/cover_images/test.jpeg" alt="hier moet wat komen !">-->
       <img style="width:50%" class="img-responsive" src="{{ asset('storage/cover_images/$task->cover_image') }}" alt="hier moet wat komen !">

            </div>
        </div>
        
   <br>
    @if(Auth::id() == $task->user_id)
   <a href="/task/{{$task->id}}/edit" class="btn btn-primary btn-lg ">edit</a>

<a href="/task/{{$task->id}}/destroy" class="btn btn-danger btn-lg ">delete</a>


@endif
 <a href="/task" class="btn btn-primary btn-lg ">go back</a>




</div>
</div>
@endsection
</body>

</html>



