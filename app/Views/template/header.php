<!DOCTYPE html>
<html>
<head>
    <title>Rota Certa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Alfa+Slab+One&family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="../assets/img/favicon.png"/>
</head>
<body style="height: 100vh;">
<header>
    <nav id="nav-menu" class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="row w-100 m-0">
                <div class="col-6">
                    <a class="navbar-brand m-0" href="<?= base_url('/') ?>">
                        <img class="logo" src="../assets/img/logo branco.png" alt="image">
                    </a>
                </div>
                <div class="col-6 div-mobile justify-content-center align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse col-6 justify-content-center" id="navbarNav">
                    <div class="navbar-nav ml-auto espaco-topo">
                        <a class="nav-item nav-link px-5" href="./aboutUs">
                            <p class="text-nav">Sobre Nós</p>
                        </a>
                        <a class="nav-item nav-link px-5" href="https://vestibular.fho.edu.br/cursos/sistemasinformacao" target="_blank">
                          <p class="text-nav">FHO</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>