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
            <div class="card-abrir-chamado">
                <div class="card">
                    <div class="card-header">
                        Dúvidas frequentes
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">

                                <form method="post" action="registra_duvidas_frequentes.php">
                                    <div class="form-group">
                                        <label>Título</label>
                                        <input name="titulo" type="text" class="form-control" placeholder="Título">
                                    </div>

                                    <div class="form-group">
                                        <label>Resposta</label>
                                        <textarea name="resposta" class="form-control" rows="3" placeholder="Descrição"></textarea>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <a class="btn btn-primary btn-block btn-block" href="home.php">Voltar</a>
                                        </div>

                                        <div class="col-6">
                                            <button class="btn btn-primary btn-block btn-block" type="submit">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>