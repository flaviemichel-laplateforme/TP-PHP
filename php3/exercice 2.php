<!-- Exercice 2 :
Dans un autre fichier, déclare deux variables $a = 5 et $b = 10
puis affiche :
● le résultat de chaque comparaison (cf. les opérateurs de
comparaison)
(Exemple : "a == b donne false")

Attention : En PHP, lorsqu'on fait un echo d’un booléen :
● true est converti en 1
● false est converti en la chaîne vide ""

Vous pouvez exécuter ceci pour essayer par vous même :

_6 -->
<?php
$a = 5;
$b = 10;


echo "a = 5 et b = 10" . "<br>";
echo "<br>";
echo "a == b donne " . (($a == $b) ? 'true' : 'false') . "<br>";
echo "a === b donne " . (($a === $b) ? 'true' : 'false') . "<br>";
echo "a != b donne " . (($a != $b) ? 'true' : 'false') . "<br>";

echo "a <> b donne " . (($a <> $b) ? 'true' : 'false') . "<br>";
echo "a !== b donne " . (($a !== $b) ? 'true' : 'false') . "<br>";
echo "a > b donne " . (($a != $b) ? 'true' : 'false') . "<br>";

echo "a < b donne " . (($a < $b) ? 'true' : 'false') . "<br>";
echo "a >= b donne " . (($a >= $b) ? 'true' : 'false') . "<br>";
echo "a <= b donne " . (($a <= $b) ? 'true' : 'false') . "<br>";

echo "a <=> b donne un combiné " . (($a <=> $b) ? 'true' : 'false') . "<br>";



echo "Si on echo le booléen TRUE, voici le résultat que nous obtenons : " . true . " !";
echo "<br>================================<br>";
echo "Si on echo le booléen FALSE, voici le résultat que nous obtenons : " . false . " !";
?>