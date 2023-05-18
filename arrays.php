<?php

//Duas formas de declarar arrays:

$cor = ["Amarelo", "Azul", "Vermelho",];
$forma = array("Redondo", "Quadrado", "Triangular",);

//Imprimir o valor de um item da array:

echo ($cor[0]);
echo ($forma[0]);

//Definir os índices da array manualmente:

$fruta = [1=>"Maçã", 2=>"Laranja", 3=>"Uva",];
echo ($fruta[1]);

//Definir os índices apenas para ALGUNS elementos:

$brinquedo = [1=>"Bola", "Carrinho",];

//Criar uma array e definir os valores posteriormente:

$comida = array();

$comida[0] = "Arroz";
$comida[1] = "Feijão";
$comida[2] = "Bife";

//Usar STRING como índice da array:

$endereco = array();

$endereco["Rua"] = "Rod. Antonio Heil";
$endereco["Número"] = "7";
$endereco["Cidade"] = "Florianópolis";

echo ($endereco["Rua"]);

//Usar STRING como índice da array e atribuir valores na declaração:

$endereço = ["Bairro" => "Canasvieiras"];
echo ($endereco["Bairro"]);

//Arrays MULTIDIMENSIONAIS:

$curso = ["PHP" => $dados = ["Disciplina" => "Programação em PHP",
                            "Carga Horária" => "60 horas",
                            "Horário" => "19hr - 21h",],
          "C" => $dados = ["Disciplina" => "Programação em C",
                            "Carga Horária" => "60 horas",
                            "Horário" => "21h - 23h",],];

echo ($curso["PHP"]["Disciplina"]);
echo ($curso["PHP"]["Carga Horária"]);
echo ($curso["PHP"]["Horário"]);

echo ($curso["C"]["Disciplina"]);
echo ($curso["C"]["Carga Horária"]);
echo ($curso["C"]["Horário"]);

//FOREACH - interações com arrays:

foreach ($cor as $valor) { //"as" é uma palavra- chave que atribui o VALOR da variável $cor para a variável $valor.
    echo ($valor . "<br");
}

//...para capturar o índice além do valor do elemento da array:

foreach ($cor as $indice => $valor) {
    echo ("Índice: $indice, Cor: $valor <br>");
}

$veiculo = [["Ford", array("Ford Ranger", "XLS Sport", "2009")],
            ["BMW", array("BMW GS", "1250", "2023")],
            ["Mitsubishi", array("Mitsubishi Eclipse", "Verde", "1995")],];

foreach ($veiculo as list($nome, list($modelo, $caracteristica, $ano))) {
    echo "$nome: $modelo, $caracteristica, $ano. <br>";
    echo "Droga, é o Braia!";
}

/*FUNÇÃO LIST:
"Usada para atribuir valores a uma lista de variáveis em uma única operação.
Ela permite extrair os elementos de um array e atribuí-los a variáveis separadas." */

?>