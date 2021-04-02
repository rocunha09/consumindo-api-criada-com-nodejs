<?php

    if (isset($_GET['id']) && $_GET['id'] != ''){
        $id = $_GET['id'];
    };

    if(isset($_GET['tela']) && $_GET['tela'] != ''){
        $tela = $_GET['tela'];
    }
    
    // Cria o cURL
    $curl = curl_init();
    //url
    $url = "http://localhost:8081/artigo/" .$id;
    // Seta algumas opções
    curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST =>'DELETE'
    ]);
    // Envia a requisição e salva a resposta
    $response = json_decode(curl_exec($curl));
    // Fecha a requisição e limpa a memória
    curl_close($curl);

    /*
        echo '<br>';
        echo '<pre>';
        var_dump($response);
        var_dump($_GET);
        echo '</pre>';
    */
    
    

    if ($response->error == 0) {
        header("Location: index.php?sucesso=2");
    } else {
        header("Location: ".$tela.".php?erro=2");
    }

?>