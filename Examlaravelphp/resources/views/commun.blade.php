<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container-md col-6 mt-5">
 @yield('content')
    </div>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
