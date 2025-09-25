<?php
// 1. Crée un fichier prix.php.
// 2. Déclare une constante TVA (valeur 0.2)
// 3. Déclare une variable $prixHT (valeur au choix)
// 4. Dans une variable $prixTTC calcule le prix ((prix HT *
// TVA) + prix HT)
// 5. Affiche le prix TTC calculé.


const TAUX_TVA = 0.2;
$prixHT = 10;
$prixTTC = (($prixHT * TAUX_TVA) + $prixHT);
echo $prixTTC;
