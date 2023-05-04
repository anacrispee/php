<?php

//Hello world padrão.
echo "Hello World!";
echo "<br><br>";

//Todas as variáveis em PHP são escritas com símbolo de dólar "$" na frente.
//Não há necessidade de o programador informar o tipo de dado em PHP, igual no JavaScript.
$var = 'texto';
echo "Agora o tipo de dados é: " . gettype($var);
echo "<br>";
$var = 123;
echo "Agora o tipo de dados é: " . gettype($var);
echo "<br><br>";

//Apesar das regras globais sobre variáveis, em PHP, a variável pode ser numérica desde que
//esteja entre chaves. No exemplo abaixo o nome da variável é "789", mas o valor dela é "abc", o que
//significa que esta variável é do tipo string. 
${'789'} = 'abc';
echo ${'789'};
echo "<br><br>";

//Constantes não acompanham símbolo de dólar ($).
//Primeira maneira de declarar constantes.
const saudacao = 'Hello World!';
echo saudacao;
echo "<br>";
//Segunda maneira de declarar constantes.
define ('verdura', 'batata');
echo verdura;
echo "<br><br>";

//Função var_dump, mostrando todas as características de uma array contendo uma array.
$matriz = array (3, 5, array ("aaa", "bbb", "ccc"));
var_dump($matriz);

//Função para mostrar informações sobpre o estado atual do PHP.
phpinfo();
//Tem parâmetros adicionais como info_general, info_configuration, etc...
//imprimindo apenas o solicitado.
phpinfo(INFO_GENERAL);
?>