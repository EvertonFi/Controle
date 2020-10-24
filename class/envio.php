<?php

require 'class.php';


if (isset($_POST, $_POST['chave']) && $_POST['chave'] == 'cadastroitem') {

    $_UP['pasta'] = '../assets/images/itens/';
    $_UP['tamanho'] = 1024 * 1024 * 2;
    $_UP['extensoes'] = array('jpg', 'png', 'gif');
    $_UP['renomeia'] = true;
    $_UP['erros'][0] = 'Não houve erro';
    $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
    $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
    $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
    $_UP['erros'][4] = 'Não foi feito o upload do arquivo';
    if ($_FILES['arquivo']['error'] != 0) {
        die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
        exit;
    }
    $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
    if (array_search($extensao, $_UP['extensoes']) === false) {
        echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
    } else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
        echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
    } else {
        if ($_UP['renomeia'] == true) {
            $nome_final = time() . '.jpg';
        } else {
            $nome_final = $_FILES['arquivo']['name'];
        }
        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
            echo "Upload efetuado com sucesso!";
            echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
            $imagem = $_UP['pasta'] . $nome_final;

            $cadastroItem = Cadastro::Item($_POST['nome'], $_POST['marca'], $_POST['qtd'], $_POST['descricao'], $imagem, $_POST['precocompra'], $_POST['precovenda'], $_POST['cor'], $_POST['material'], $_POST['categoria']);

            if($cadastroItem){
                header('Location: ../pages/listaItens.php');
            }

        } else {
            echo "Não foi possível enviar o arquivo, tente novamente";
        }
    }

}
