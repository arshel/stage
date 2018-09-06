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
 <h1>create task</h1>
   
    <div class="form-group">
       
        <form action="/task/store"  accept-charset="UTF-8"  method="post" enctype="multipart/form-data">
        @csrf
  task
  
  <br>

  <input type="text" name="task" >
  <br>
  area
  <br>
  <textarea name="disc" id="" cols="30" rows="10"></textarea>
  <br>
  <input type="file" name="cover_image"/>
    <br>
    <br>
        <input type="submit" class="btn btn-primary btn-lg">
</form> 

    </div>
</div>
@endsection
    </body>
</html>
