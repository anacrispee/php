<?php

//ESTRUTURAS CONDICIONAIS

//Instrução if:
$x = 1;
$y = 1;

if ($x==$y)
    echo "$x e $y são iguais.";

//Instrução if para avaliação de mais de uma expressão:
$media = 8.2;

if ( ($media >= 8) and ($media < 9) )
    $conceito = "B";
echo "Seu conceito é $conceito";

//Instrução else:
$x = 1;
$y = 2;

if ($x == $y)
    echo "$x e $y são iguais";
else
    echo "$x e $y são diferentes";

//Instrução elseif:
$x= 1;
$y = 2;

if ($x == $y)
    echo "$x e $y são iguais";
elseif ($x > $y)
    echo "$x é maior que $y";
elseif ($x < $y)
    echo "$x é menor que $y";

//Instrução switch:
$conceito = "B";

switch ($conceito) {
    case "A":
        echo "Aprovado com distinção";
        break;
    case "B":
        echo "Plenamente aprovado";
        break;
    case "C":
        echo "Aprovado";
        break;
    default:
        echo "Reprovado";
        break;
}

//Operador ternário (abreviação de elseif):
$media = 7.2;

$situacao = ($media >= 7) ? "Aprovado!" : "Reprovado!";
echo "Situação do aluno: $situacao";

//ESTRUTURAS DE REPETIÇÃO

//Estrutura while:
$i = 1;
while ($i <= 10) {
    echo $i;
    $i++;
}

//Estrutura do...while:
$i = 1;
do {
    echo $i;
    $i++;
}
while ($i <= 10);

//Estrutura for:
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

//Estrutura for/endfor:
    for ($i = 1; $i <= 10; $i++):
        echo $i;
    endfor;

//Comando continue: força a realização de uma interação, sem executar os comandos restantes
//que estão dentro da estrutura.
$i = 0;

while ($i <= 9) {
    $i++;
    if ( ($i >= 3) and ($i <= 6) )
        continue;
    echo $i;
}

//Comando break: irá executar os comandos até o break, sem executar o restante dos
//comandos implícitos na estrutura.
$i = 1;

while ($i <= 10) {
    if (($i == 6))
        break;
    echo $i;
    $i++;
}

?>