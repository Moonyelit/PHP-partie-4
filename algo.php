<?php
// EXERCICE 1
echo "EXERCICE 1";
echo "<br>";

function exo1(): bool
{
    return true;
}
$varexo1 = exo1();

echo "{$varexo1} <br>";
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

function exo2(): string
{
    return "C'est une chaine de charactère";
}

$varexo2 = exo2();

echo $varexo2;

// EXERCICE 3
echo "<br>";
echo "<br>";
echo "EXERCICE 3";
echo "<br>";

function exo3($exo3var1, $exo3var2): string
{
    return $exo3var1 . " " . $exo3var2;
}

$resultatexo3 = exo3("Hello", "World");

echo $resultatexo3;

// EXERCICE 4
echo "<br>";
echo "<br>";
echo "EXERCICE 4";
echo "<br>";

function exo4($exo4var1, $exo4var2)
{
    if ($exo4var1 > $exo4var2) {
        return "Le premier nombre est plus grand";
    } elseif ($exo4var1 < $exo4var2) {
        return "Le premier nombre est plus petit";
    } elseif ($exo4var1 === $exo4var2) {
        return "Les deux nombres sont identiques";
    }
}

$resultatexo4 = exo4(4 , 34);

echo $resultatexo4;

// EXERCICE 5
echo "<br>";
echo "<br>";
echo "EXERCICE 5";
echo "<br>";

function exo5($exo5var1, string $exo5var2) {
    return $exo5var1 . " " . $exo5var2;
}

$resultatexo5 = exo5(29, "ans");

echo $resultatexo5;