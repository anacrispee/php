<?php

//Estrutura:

function multiplica ($arg1, $arg2) {
    $retorno = $arg1 * $arg2;
    return $retorno;
}

$resultado = multiplica(3,2);
echo $resultado;

//É possível especificar o tipo de dado específico a ser retornado:

function soma ($n1, $n2):int { //nesse caso ele só retornará valores inteiros.
    $r = $n1 + $n2;
    return $r;
}

//Funções com valores pré-definidos:

function multiplica2 ($num1, $num2 = 1) {
    $resposta = $num1 * $num2;
    return $resposta;

}

//Função que devolve dois valores por meio de uma array:

function maiorMenor ($x1, $x2, $x3) {
    if ( ($x1 > $x2) and ($x1 > $x3) ) {
        $maior = $x1;
    }
    else if ($x2 > $x3) {
        $maior = $x2;
    }
    else {
        $maior = $x3;
    }
    if ( ($x1 < $x2) and ($x1 < $x3) ) {
        $menor = $x1;
    }
    else if ( ($x2 < $x3) ) {
        $menor = $x2;
    }
    else {
        $menor = $x3;
    }

    return array($maior, $menor);

    }

?>