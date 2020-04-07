<?php

/**
 * 
 * Autor do código: Marcos Silva
 * GitHub: https://github.com/marcosviniciusid
 * Fundador da DevPro Community
 * 
 */

// Resolução 1.

echo "<br> ===================================== <br>";
echo "==== Primeira forma de resolver o problema. ==== <br><br>";

$numero = 13;

if ($numero % 10 == 0) {
    echo "Número divisivel por 10";
} else if ($numero % 5 == 0) {
    echo "Número divisivel por 5";
} elseif ($numero % 2 == 0) {
    echo "Número divisivel por 2";
} else {
    echo "Não é divisivel por 10, 5 e nem 2";
}

// Resolução 2 

echo "<br><br> ===================================== <br>";
echo "==== Segunda forma de resolver o problema. ==== <br><br>";

switch ($numero) { 
    case ($numero % 10 == 0):
        echo "Número divisivel por 10";
        break;
    case ($numero % 5 == 0): // CASE tem que ser todo minusculo. Para não ter problema.
        echo "Número divisivel por 5";
        break;
    case ($numero % 2 == 0):
        echo "Número divisivel por 2";
    default:
        echo "Não é divisivel por 10, 5 e nem 2";
        break;
}

/**
 * Crie uma resolução melhor e poste aqui também para contribuir com a comunidade. ;)
 */