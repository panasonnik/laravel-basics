<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body {
            margin:0;
            text-align:center;
            font-family:Arial, Helvetica, sans-serif;
        }
    .navbar {
        background:#bae1ff;
        font-weight: bold;
       
        font-size:24px;
        padding:20px 40px;
        text-align: center;
    }
    .content {
        margin-bottom:100px;
    }
    </style>
</head>
<body>
    <div class="navbar">Welcome!</div>
    <div class="content">@yield('content')
    @if(request()->is('/')) <!-- Check if on the main page -->
            <a href="{{ route('start') }}">Get started</a>
        @endif
    </div>

    <h2>Subscribe to our newsletter: </h2>
    <form action="{{route('submit')}}" method="post">
    <!-- prevents page expired error -->
    @csrf 
        <input type="text" name="name" placeholder="Enter your name..."/>
        <input type="text" name="email" placeholder="Enter your email..."/>
        @error('email')
        <div style="color: red;">{{ $message }}</div>
        @enderror
        <input type="submit" value="Subscribe">
    </form>
</body>
</html>