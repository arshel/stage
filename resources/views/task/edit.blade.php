<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        
@extends('layouts.app')

@section('content')
  <div class="container">
 <h1>edit task</h1>
  
        <form class="form-group" action="/task/update/{{$task->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <p>task</p>
                <input type="text" name="task" value="{{$task->body}}"/>
          <br>
            <br>
              <p> discription</p>
           <textarea name="disc" id="" cols="30" rows="10">{{$task->disc}}</textarea>
           <br>
           
             <input type="file" name="cover_image"/>
           
           <br>
           <br>
        <input value="edit" type="submit"  class="btn btn-primary btn-lg">

            </form>
    </div>
@endsection

    </body>
</html>
