<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
@if(isset($title))
    <title>{{$title}}</title>
@else
        <title>Articles</title>
    @endif
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ elixir('css/all.css') }}">


</head>
<body>
    <div class="container">
        @if (Session::get('flash_msg'))
            <div class="alert alert-success alert-dismissible" role="alert">

                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{Session::get('flash_msg')}}
            </div>

        @endif


        @yield('content')

    </div>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Latest compiled and minified JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@yield('footer')
</body>
</html>