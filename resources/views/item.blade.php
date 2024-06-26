@extends('layout.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @section('title')
        Item title
        @endsection
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            .item-info {
                margin: 40px;
                padding:20px;
                border:1px solid black;
                border-radius: 16px;
                background:#F1DBFF;
            }
        </style>
    </head>
    <body>
        
        @section('content')
        <div class="item-info">
        <h1>{{$item->title}}</h1>
        <p>{{$item->desc}}</p>
        <p>Price: {{$item->price}}</p>
        </div>
        @endsection
        
    </body>
</html>
