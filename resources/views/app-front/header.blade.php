<!doctype html>
<html lang="pt-br" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>SUAP POO</title>

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" type="image/svg+xml" href="{{ asset('icon.svg') }}">

    <meta name="theme-color" content="#712cf9">

    <!-- Custom styles for this template -->
    <link href="navbar-static.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('setores.index') }}">Setores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('situacoes.index') }}">Situação</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('chamados.index') }}">Chamados</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <style>
            .fronte {
    padding-top: 2rem;
    padding-bottom: 2.5rem;
    background-color: #f1f4fa;
}

.wrap {
    display: flex;
    background: white;
    padding: 0.5rem;
    border-radius: 0.3rem;
    box-shadow: 5px 5px 20px -3px rgba(0, 0, 0, 0.1);
    margin-bottom: 1rem;
}

.wrap:hover {
    background: linear-gradient(135deg, #6394ff 0%, #0a193b 100%);
    color: white;
}

.ico-wrap {
    margin: auto;
}

.mbr-iconfont {
    font-size: 3rem !important;
    color: #313131;
    margin: 0.5rem;
    padding-right: 0.5rem;
}

.vcenter {
    margin: auto;
}

.mbr-section-title3 {
    text-align: left;
}

h2 {
    margin-top: 0.3rem;
    margin-bottom: 0.3rem;
}

.display-5 {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 1.2rem;
}

.mbr-bold {
    font-weight: 700;
}

p {
    padding-top: 0.3rem;
    padding-bottom: 0.3rem;
    line-height: 20px;
}

.display-6 {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 0.9rem;
}

.col-lg-6 {
    padding: 0.5rem;
}

.mbr-col-md-10 {
    padding: 0.5rem;
}

.text-center {
    text-align: center;
}

        </style>
