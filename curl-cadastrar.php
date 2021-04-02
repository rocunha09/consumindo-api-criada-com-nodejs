<?php

    if (isset($_POST['titulo']) && $_POST['titulo'] !=''){
        $titulo = $_POST['titulo'];
    };

    if (isset($_POST['conteudo']) && $_POST['conteudo'] != ''){
        $conteudo = $_POST['conteudo'];
    };

    $artigo = array(
         "titulo"=> $titulo,
        "conteudo"=> $conteudo
    );
    
    $artigo = json_encode($artigo);

    // Cria o cURL
    $curl = curl_init();
    $url = "http://localhost:8081/artigo";

    //define header da req POST
    $header_curl = array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($artigo)
    );

    // Seta algumas opções
    curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $artigo,
        CURLOPT_HTTPHEADER=> $header_curl
    ]);
    // Envia a requisição e salva a resposta
    $response = json_decode(curl_exec($curl));
    // Fecha a requisição e limpa a memória
    curl_close($curl);

    if ($response->error == 0) {
        header('Location: index.php');
    } else {
        header('Location: index.php?erro=1');
    }
?>