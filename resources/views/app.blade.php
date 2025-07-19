<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.2-web/fontawesome-free-6.5.2-web/css/all.min.css')}}">

    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
        }
        .sidebar{
            width: 250px;
            height: 100%;
        }
        body{
            display: flex;
            flex-direction: row;
            font-family: Arial, sans-serif; 
        }
        .main{
            width: 100%;
            margin-left: 250px;
        }
        .head{
            width: 100%;
            /* background-color: red; */
        }
    </style>
</head>
<body>
    <div class="sidebar">
        @include('layout.sidebar')
    </div>
    
    <div class="main">
        @include('layout.header')
        <div class="contents">
            @yield('content')
        </div>
    </div>

</body>
</html>