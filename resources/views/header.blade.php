<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $pageTitle }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <style>
        .centered-header {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
        }
    </style>
</head>
<body>
    <div class="centered-header bg-light">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">Proyecto Admin BD Grupo 03</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Opción 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Opción 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Opción 3</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</body>
</html>

