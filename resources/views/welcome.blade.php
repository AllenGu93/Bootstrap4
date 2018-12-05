<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bootstrap 4</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    </head>
    <body>
        <div class="container">
            <div class="row" style="border:1px solid black">
                <div class="col-sm">
                  One of three columns
                </div>
                <div class="col-sm">
                  One of three columns
                </div>
                <div class="col-sm">
                  One of three columns
                </div>
            </div>
        </div>
        <script src="{{asset('js/bootstrap.js')}}"></script>
    </body>
</html>
