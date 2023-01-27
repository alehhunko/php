<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body class="conteiner">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="{{route('main.index')}}">Main <span
                        class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="{{route('post.index')}}">Posts</a>
                <a class="nav-item nav-link" href="{{route('about.index')}}">About</a>
                <a class="nav-item nav-link" href="{{route('contact.index')}}">Contacts</a>
            </div>
        </div>
    </nav>

    @yield('contents')
</body>

</html>