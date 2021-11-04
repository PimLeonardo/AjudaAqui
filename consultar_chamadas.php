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
    </nav>

    <div class="container">
        <div class="row">
            <div class="card-consultar-chamado">
                <div class="card">
                    <div class="card-header">
                        Consultar chamadas
                    </div>

                    <div class="card-body">

                        <div class="card mb-3 bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Título do chamado...</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                                <p class="card-text">Descrição do chamado...</p>

                            </div>
                        </div>

                        <div class="card mb-3 bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Título do chamado...</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                                <p class="card-text">Descrição do chamado...</p>

                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-6">
                                <a class="btn btn-primary btn-block" href="home.php">Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>