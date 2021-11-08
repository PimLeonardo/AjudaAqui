<?php require_once "valida_acesso.php" ?> 

<html>

<head>
    <meta charset="utf-8" />
    <title>Ajuda Aqui</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" style="color: black;" href="logoff.php">SAIR</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="card-home">
                <div class="card">
                    <div class="card-header">
                        Menu
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center">
                                <a href="fazer_duvidas_frequentes.php">
                                    <img src="fazer_chamada.png" width="70" height="70">
                                </a>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <a href="consultar_chamadas.php">
                                    <img src="consultar_chamadas.png" width="70" height="70">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>