@extends('layout.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @section('title')
        Getting started
        @endsection
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            ul {
                list-style: none;
            }
            li {
                margin:10px;
            }
        </style>
    </head>
    <body>
        @section('content')
        <h2>Choose and option below: </h2>
        <ul>
            <li><a href="{{route('items')}}">Show all items</a></li>
            @for($i=1; $i<=5; $i++)
        <li><a href="{{ route('item', ['id' => $i]) }}">Show item #{{ $i }}</a></li>

        @endfor
        </ul>
        @endsection
        
        
    </body>
</html>
