<?php 

    $duvidas = array();

    $duvida = fopen('duvida.txt', 'r');

    while(!feof($duvida)) {
        $registro = fgets($duvida);
        $duvidas[] = $registro;
    }

    fclose($duvida);

?>

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
                        Dúvidas frequentes
                    </div>

                    <div class="card-body">

                        <?php foreach ($duvidas as $duvidas_frequentes) { ?>
                                <?php
                                    
                                    $duvidas_dados = explode('#', $duvidas_frequentes);

                                    if(count($duvidas_dados) < 2) {
                                        continue;
                                    }

                                ?>

                            <div class="card mb-3 bg-light">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$duvidas_dados[0]?></h5>
                                    <p class="card-text"><?=$duvidas_dados[1]?></p>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="row mt-5">
                            <div class="col-6">
                                <a class="btn btn-primary btn-block" href="index.php">Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>