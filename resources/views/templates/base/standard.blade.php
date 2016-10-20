<!doctype html>

<html lang="nl">
<head>
    <meta charset="utf-8">

    <title>Website</title>
    <meta name="description" content="Kyle Website">
    <meta name="author" content="Kyle">

    @include('templates.includes.stylesheets')
</head>

<body>

    @yield('page')

    @include('templates.includes.scripts')
</body>
</html>