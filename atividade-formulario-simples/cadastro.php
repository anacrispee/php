<?php

//Tanto os métodos GET como POST criam arrays com as informações inseridas pelo usuário;
//para ler essas informações, usa-se  a estrutura de reptição FOREACH.

    foreach ($_GET as $key => $value) {
        echo "$key: $value <br>";
    }

//para capturar os valores de uma checkbox:

    foreach ($_GET['locomocao'] as $key => $value) {
        echo "$key: $value <br>";
    }

//e para selecionar uma informação específica inserida no formulário, utiliza-se o seguinte código:

    $nome = $_GET['nome'];
    echo $nome;

//Verificar se houve a submissão de dados do formulário:

    if (!isset($_POST) || empty($_POST)) {
        echo "Não houve postagem via formulário!";
    }

//também é possível verificar especificamente a submissão dos dados pelo botão enviar:

    if (!isset ($_GET['enviar']) !== 'Enviar') {
        echo "Não houve postagem pelo botão enviar do formulário";
    }

//Usar a instrução isset com o operador ternário define um valor para determinado campo recebido
//pelo formulário; ideal para casos do tipo checkbox ou radio, que não são enviados quando nenhuma
//opção é selecionada.

    $locomocao = isset($_GET['locomocao']) ? $_GET['locomocao'] : null;

//Para remover tags HTML e PHP de uma informação que o usuário inseriu, utilize o código:

    $nome = strip_tags($_POST['nome']);
    echo $nome;

//e para verificar todos os campos com a função strip_tags, utilize foreach:

    foreach ($_POST as $chave => $valor) {
        $$chave = strip_tags($valor);
    }

//Extrair números de um campo que deveria haver apenas valores inteiros:

    $num = filter_var($_POST['senha'], FILTER_SANITIZE_NUMBER_INT);
    echo "$num";

//Validar um campo de email:

    if (!filter_var($_POST['email'], FILTER_SANITIZE_EMAIL))
        echo "Não é um email válido"
?>