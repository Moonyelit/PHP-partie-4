<?php
// EXERCICE 1
echo "EXERCICE 1";
echo "<br>";

function exo1(): bool {
    return true; 
}
$varexo1 = exo1();  

echo"{$varexo1} <br>";
if ($varexo1) {
    echo "La fonction retourne true";
} else {
    echo "La fonction retourne faux";
}

// EXERCICE 2
echo "<br>";
echo "<br>";
echo "EXERCICE 2";
echo "<br>";

function exo2(): string {
    return "C'est une chaine de charactère"; 
}

$varexo2 = exo2();

echo $varexo2;

// EXERCICE 3
echo "<br>";
echo "<br>";
echo "EXERCICE 3";
echo "<br>";

function exo3 ($exo3var1,$exo3var2) : string{
        return $exo3var1 . " " . $exo3var2; 
}

$resultat = exo3("Hello", "World");

echo $resultat;