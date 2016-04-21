<html>
<head>
    <title>Casino app</title>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCH-9q3B8SaGEfOUQnUtu4kl6Tzj2CTOws"></script>
    <script src="/js/gmaps.js"></script>

    @yield('script')

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Casino App</a>
            <a class="navbar-brand" href="/casino/find">Find a casino</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        </div>
    </div>
</nav>

<div class="jumbotron">
    <div class="container">
        <h1>Welcome in super casino application!</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @yield('content')
        </div>
    </div>
        @yield('map')
    <hr>

    <footer>
        <p>&copy; 2016 Php Test; Filip Kulig; Casino Company, Inc.</p>
    </footer>
</div>
</body>
</html>