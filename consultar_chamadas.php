<?php require_once "valida_acesso.php" ?> 

<?php 

    $chamadas = array();

    $chamada = fopen('chamada.txt', 'r');

    while(!feof($chamada)) {
        $registro = fgets($chamada);
        $chamadas[] = $registro;
    }

    fclose($chamada);

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
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" style="color: black;" href="logoff.php">SAIR</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="card-consultar-chamado">
                <div class="card">
                    <div class="card-header">
                        Consultar chamadas
                    </div>
                    <div class="card-body">                      
                        <?php foreach ($chamadas as $chamado_detalhes) { ?>
                            <?php
                                
                                $chamado_dados = explode('#', $chamado_detalhes);

                                if(count($chamado_dados) < 4) {
                                    continue;
                                }

                            ?>
                            <div class="card mb-3 bg-light">
                                <div class="card-body">
                                    <h4 class="card-title"><?=$chamado_dados[1]?></h4>
                                    <h6 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[2]?></h6>
                                    <p class="card-text"><?=$chamado_dados[3]?></p>
                                    <p class="card-text" style="font-weight: bold;"><?=$chamado_dados[0]?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>