<?php

    $email = str_replace('#', '-', $_POST['email']);
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $tipo = str_replace('#', '-', $_POST['tipo']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $email .'#'. $titulo .'#'. $tipo .'#'. $descricao . PHP_EOL;

    $chamada = fopen('chamada.txt','a');
    
    fwrite($chamada, $texto);
    
    fclose($chamada);

    header('Location: index.php');
?>