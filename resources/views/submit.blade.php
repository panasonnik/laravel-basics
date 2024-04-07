@extends('layout.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @section('title')
        Newsletter
        @endsection
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
           h1 {
            margin-top:50px;
           }
           h2 span {
            color:gray;
           }
        </style>
    </head>
    <body>
        
        @section('content')
        <h1>Thank you, {{$name}}</h1>
        <h2><span>We'll contact you on</span> {{$email}}</h2>
        @endsection
        
    </body>
</html>
