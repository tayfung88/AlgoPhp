<?php 

/*

// Algo Demander à l'utilisateur de saisir un nombre entre 1 et 100 

$N = -50;

if ($N >= 1 && $N <= 100) {
    echo("bien !"); // afficher un truc
} else { 
    echo("..."); // afficher un autre truc
}

*/




// Algorithme Factorielle de 5 

/* $N = 5;
$F = fact($N);

function fact($N) {
    $F = 1;
    for ($i = 1; $i <= $N; $i++){
        $F = $F * $i;
    }
    echo("la factorielle de $N est $F"); 
}

*/




// Jeu du + et du - 

/*

$N = 8; 

while($N < 8 || $N > 8 ) {
    if ($N < 8) {
        echo("trop petit"); 
        break;
    }
    if ($N > 8) {
        echo("trop grand");
        break;
    } 
    else {
        echo("yes!"); 
        break;
    }
}

*/


/* Algo : Demander à l'utilisateur de saisir un nombre entre 1 et 100 

$NbAtrouver = rand(1,100);
$NbSaisi =  75;

while ($NbSaisi != $NbAtrouver) {
    if ($NbSaisi < $NbAtrouver) {
        echo ("trop petit");
        break;
    }
        if ($NbSaisi < $NbAtrouver) { 
            echo("trop grand");
            break;
        }
            else {
                echo("YEAH!");
                break;
            }
} 


*/ 






// Algo : RenduMonnaie  

/*

$Monnaie = [50, 20, 10];

$ARendre = 200;

for($i=0; $i <=2 ; $i++) {                                          // Pour i allant de 0 à 3 par pas de 1 
    $MonnaieExistant = ($ARendre / $Monnaie[$i]);                   // trouver le nombre de billet à rendre (monnaieExistant) avec ARendre / Monnaie -> 200 / 50 = 4
    $ARendre = ($ARendre - $Monnaie[$i] * $MonnaieExistant);        // Le nombre de billet à rendre -> 200 - 50 * 4 
    echo $MonnaieExistant;                                          // Afficher nombre de billet de 50 à rendre -> 4 
    break;
}

*/

/*

$Monnaie = [50, 20, 10];

$ARendre = 200;

for($i=0; $i<count($Monnaie)-1 ; $i++) {                                            // Pour i allant de 0 à 3 par pas de 1 
    $MonnaieExistant = ($ARendre / $Monnaie[$i]);                                   // trouver le nombre de billet à rendre (monnaieExistant) avec ARendre / Monnaie -> 200 / 50 = 4
    $ARendre = ($ARendre - $Monnaie[$i] * $MonnaieExistant);                        // Le nombre de billet à rendre -> 200 - 50 * 4 
    echo $MonnaieExistant;                                                          // Afficher nombre de billet de 50 à rendre -> 4 
    break;
}

*/




// Algo : RenduMonnaie limité 

/* ?????????????????????????????????????????????????????????????

$Monnaie = [50, 20, 10];
$NombreMonnaie[0] = [2, 10, 50];
$ARendre = 200; 

for($i=0; $i<count($Monnaie)-1 ; $i++) {
    $MonnaieExistant = ($ARendre / $Monnaie[$i]);  
    $ARendre = ($ARendre - $Monnaie[$i] * $MonnaieExistant); 
                            
    if($MonnaieExistant < 1) { 
        $MonnaieExistant = ($ARendre / $Monnaie[$i++]);
        $ARendre = ($ARendre - $Monnaie[$i] * $MonnaieExistant); 
        echo $MonnaieExistant;                                                      // Reste à Rendre ?? 
        break; 
    }
}

????????????????????????????????????????????????????????????? */









// Ecrire un algo qui retire un espace vide en fin de châine de caractère si il y en a un 

/* 

$tableau = array("Taeaeaay", "Fuaeae   ", "aeaeN    ");
$index = 0;

while ($index < count($tableau)) { 
    $tableau[$index] = rtrim($tableau[$index]);
    $index++;
}

echo($tableau);
var_dump($tableau);

*/ 









// Ecrire un algo qui retourne l'emplacement d'une lettre dans l'alphabet, lettre fournie par l'utilisateur 

/* ???????????????????????????????????????????????????????

$N = 15;
$alphabet = range('a', 'z');


if ($N < 1 || $N > 26) {
    echo("nombre invalide");
} else {
    $lettre <= $alphabet[$i]; 
    echo($lettre);
}

???????????????????????????????????????????????????????? */




// Ecrire un algo qui vérifie l'égalité de deux tableaux fournis en paramètres (FOR)

/* 

$tableau1 = [1, 2, 3]; 
$tableau2 = [3, 2, 3];

if (count($tableau1) != count($tableau2)) {
    echo "false";
} else {
    echo "true";
}

for($i=0; $i<count($tableau1)-1 ; $i++) { 
    if ($tableau1[$i] == $tableau2[$i]) {
        echo "les tableaux sont égaux"; 
        break;
    } else { 
        echo "les tableaux ne sont pas égaux";
        break;
    }
}

var_dump($tableau1);
var_dump($tableau2);
    
*/ 



// Ecrire un algo qui vérifie l'égalité de deux tableaux fournis en paramètres (WHILE)

/*

$tableau1 = [1, 2, 3, 4, 5];
$tableau2 = [8, 5, 4, 3, 1];
$tableauVerif = true; 
$i = 0; 

if (count($tableau1) == count($tableau2)) { 
    while ($tableauVerif == true && $i<count($tableau1))  {
        if (($tableau1[$i]) != ($tableau2[$i])) {
            $tableauVerif = false;
        }
        ($i++);
    }   
} 
    else {
    $tableauVerif = false;  
}   if ($tableauVerif == true) { 
    echo ("OK!"); } 
    else { 
    echo ("NotOK!");
}

*/




// fonction array_diff 

/* 

$tableau1 = [1, 2, 3, 4, 5]; 
$tableau2 = [1, 2, 3, 5, 9];
$result = array_diff($tableau1, $tableau2);

print_r($result);

var_dump($tableau1);
var_dump($tableau2);

*/






// Ecrire un algo de tri à bulle 

/*

$tableau = [4, 10, 5, 1, 2, 8, 9, 3, 7, 6];

function bubbleSort($tableau) { 
for($i=0; $i<9; $i++) { 
    for ($j=0; $j>(9-$i); $j++) { 
        if ($tableau[$j] > $tableau[$j++]) {
            $temp = $tableau[$j++];
            $tableau[$j++] = $tableau[$j];
            $tableau[$j] = $temp;
        }
    } 
}

}

*/





// Algo tri à bulle 2 


$tableau = [4, 10, 5, 1, 2, 8, 9, 3, 7, 6];

$i = 0;
$j = 0; 

$temp = 0; 


function bubbleSort($tableau) { 
    $longueurT = count($tableau);
    for ($i = 0; $i < $longueurT -1; $i++) {                // la boucle s'éxecutera tant que '$i' est inférieur à la longueur du tableau (chaque éléments du tableau) 

        for ($j = 0; $j < $longueurT - $i -1; $j++) {       // boucle interne, signifie que la boucle s'éffectue pour chaque élément du tableau jusqu'à l'élement précédent du dernier élément trié 
                                                            // à chaque itération de la boucle externe, le plus grand élément non trié remonte progressivement
                                                            // vers la fin du tableau, "$longueurT - $i -1" limite la boucle interne à cette partie du tableau
            if ($tableau[$j] > $tableau[$j++]) {
                $temp = $tableau[$j];                       // $temp est une variable temporaire utilisée pour stocker temporairement la valeur d'un élement lors d'un échange
                $tableau[$j] = $tableau[$j++];
                $tableau[$j++] = $temp;
            }
        }
    }
    return $tableau;
}











?>