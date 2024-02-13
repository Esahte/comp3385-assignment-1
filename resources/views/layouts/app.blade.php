<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
    <title>COMP3385 - Lab 1</title>
</head>
<body>
<header>
    <h1>COMP3385 - Lab 1</h1>
</header>
<main>
    <img src="{{ url('/images/cool-cover-pictures-timeline (11).jpg') }}" alt="Cartoon Esah">
    @yield('content')
</main>
<footer>
    <p>Copyright &copy; 2024, COMP3385 Inc.</p>
</footer>
</body>
</html>
