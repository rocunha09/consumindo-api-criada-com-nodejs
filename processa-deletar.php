<?php

    $id = $_GET['id'];
    $url = "http://localhost:8081/artigo/" . $id;
    //$resultado = json_decode(file_get_contents($url));
    
    $server = $_SERVER['PATH_INFO'];
    $metodo = $_SERVER['REQUEST_METHOD'];
    $recurso = explode("/", substr(@$_SERVER['PATH_INFO'], 1));
    $conteudo = file_get_contents(php: '//localhost:8081/artigo/'.$id);

    var_dump( $conteudo);
    //header('Location: index.php');

?>