<?php
    $id = $_GET['id'];
    $url = "http://localhost:8081/artigo/" .$id;

    // Cria o cURL
    $curl = curl_init();
    // Seta algumas opções
    curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url
    ]);
    // Envia a requisição e salva a resposta
    $response = curl_exec($curl);
    // Fecha a requisição e limpa a memória
    curl_close($curl);

    $response = json_decode($response);

?>