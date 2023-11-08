<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    @include('header', ['pageTitle' => 'Proyecto Admin BD Grupo 03'])
    @yield('content')
</body>
</html>
