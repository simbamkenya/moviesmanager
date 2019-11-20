<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        @yield('content')
    </div>

    <!-- Optional JavaScript -->
    <script src="{{url('js/app.js')}}"></script>
    
  </body>
</html>