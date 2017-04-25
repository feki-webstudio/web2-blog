<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Ez a blogunk</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">

</head>
<body>
    <div class="container">
        <header><h1>Ez a blogunk</h1></header>

        @yield('body')

        <footer>
            &copy; {{ date('Y') }} | fekiWebstudio blog team
        </footer>
    </div>
</body>
</html>
