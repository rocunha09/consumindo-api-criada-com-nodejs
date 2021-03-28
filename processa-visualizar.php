<?php
    $id = $_GET['id'];
    $url = "http://localhost:8081/artigo/" .$id;
    $resultado = json_decode(file_get_contents($url));
?>

