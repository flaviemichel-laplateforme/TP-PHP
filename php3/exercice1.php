<?php
// Exercice 1 :
// Dans un fichier, déclare deux variables $a = 5 et $b = 10 puis
// affiche :
// ● la somme (Exemple : La somme de a et b est 15.)
// ● la différence
// ● le produit
// ● le quotient
// ● le reste

$a = 5;
$b = 10;

$somme = $a + $b;
echo "La somme de a et b est : " . $somme . "<br>";

$difference = $b - $a;
echo "La différence de a et b est : " . $difference . "<br>";

$produit = $a * $b;
echo "Le produit de a et b est : " . $produit . "<br>";

$quotient = $a / $b;
echo "Le quotient de a et b est : " . $quotient . "<br>";

$reste = $a % $b;
echo "Le reste de a et b est : " . $reste . "<br>";
