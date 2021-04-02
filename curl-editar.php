<?php
    if (isset($_GET['id']) && $_GET['id'] !=''){
        $id = $_GET['id'];
    };

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
    $url = "http://localhost:8081/artigo/" . $id;

    //define header da req POST
    $header_curl = array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($artigo)
    );

    // Seta algumas opções
    curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST =>'PUT',
        CURLOPT_POSTFIELDS => $artigo,
        CURLOPT_HTTPHEADER=> $header_curl
    ]);
    // Envia a requisição e salva a resposta
    $response = json_decode(curl_exec($curl));
    // Fecha a requisição e limpa a memória
    curl_close($curl);
    /*    
        echo '<br>';
        echo '<pre>';
        var_dump($response);
        echo '</pre>';
    */
    
    if ($response->error == 0) {
        header('Location: visualizar.php?sucesso=1&id='.$id);
    } else {
        header('Location: editar.php?erro=1&id='.$id);
    }
    
?>