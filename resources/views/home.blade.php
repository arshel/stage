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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your Posts</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!!!
                    
                    <br>
                        <ul>
 
             
                 @foreach($tasks as $task)
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
                             {{$tasks->links()}}
                  
                            @else
                    <p> you have no posts</p>
                            @endif
                    <br>
                  
                </div>
            <a href="/task" class="btn btn-primary btn-lg ">go to the homepage</a>
        </div>
    </div>
</div>

@endsection
<body>
    
</html