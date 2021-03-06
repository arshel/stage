<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/app.css">
        <!-- Styles -->
       
    </head>
    <body>
@extends('layouts.app')

@section('content')
<!--/blog/resources/views/task/index.blade.php-->
<!--/blog/storage/app/public/cover_images/pexels-photo-371633_1536233051.jpeg-->
<div class="container">
    
  <!--<img style="width:50%" class="img-responsive" src="asset('/task/test.jpeg');" alt="hier moet wat komen ">-->
       <img style="width:50%" class="img-responsive rounded" src="{{ asset('storage/cover_images/laravel.png') }}" alt="hier moet wat komen !">
       
       
    <h1>alle post</h1>
  <ul>
            
  @if(count($tasks) > 0)
  @foreach ($tasks as $task)

  
        <div class="col-sm-7">
            
            <div class="card">
          <div class="card-header bg-dark" style="color:white">
       laravel
              </div>
             <div class="card-body">
             <h4>{{$task->body}}</h4>
            <p>...</p>
            <a href="/task/{{$task->id}}" class="btn btn-primary">Go to the task</a>
                <br>
          <small>written on {{$task->created_at}} </small>
          </div>
            </div>
              </div>
   <hr class="my-4">
  
   @endforeach
   
   @else 
   <p>there are no tasks</p>
   @endif
         {{$tasks->links()}}
    </ul>
    <div class="col-md-8 col-sm-4">
    <button class="btn btn-primary btn-lg" type="button" onclick="window.location='{{ url("task/insert") }}'">Create</button>
   </div>  
</div>

    @endsection
                
    </body> 
 
 
</html>
