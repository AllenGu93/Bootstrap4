<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>
        <link rel="shortcut icon" href="{{asset('image/badminton.ico')}}" mce_href="{{asset('image/badminton.ico')}}" type="image/x-icon">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    </head>
    <body>
        <h1>弹球</h1>
        <p></p>
        <canvas style="height:654px;width:1440px"></canvas>
        <script src="{{asset('js/bootstrap.js')}}"></script>
        <script src="{{asset('js/ball.js')}}"></script>
    </body>
</html>
