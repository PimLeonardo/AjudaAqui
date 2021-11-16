<?php

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $resposta = str_replace('#', '-', $_POST['resposta']);

    $texto = $titulo .'#'. $resposta . PHP_EOL;

    $chamada = fopen('duvida.txt','a');
    
    fwrite($chamada, $texto);
    
    fclose($chamada);

    header('Location: home.php');
    
?>