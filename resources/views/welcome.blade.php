<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rashad</title>
</head>
<body>
    <h1>Welocme to laravel Routing</h1>
    <h3>
        <!-- {{$c}} -->
        {{$newName}}
    </h3>
    <ul>
        <li><a href="{{route('home')}}">Home</a> </li>
        <li><a href="{{route('about')}}"> About Us</a></li>
        <li><a href="{{route('contact')}}">Contact Us</a> </li>
    </ul>
</body>
</html>