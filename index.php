<?php
// <!-- Traccia 1:
// Installare PHP
// Definisci 4 variabili:
// Integer
// Float
// String
// Boolean
// A schermo, fai comparire il tipo di dato delle varie variabili.
// Trasforma quelle variabili in costanti, utilizzando le best practice viste a lezione.
// Pusha il codice su GitHub con il nome php_01_nome_cognome. Integra anche le altre tracce e poi pusha tutto.

// $int =22;
// $flo = 1.7;
// $name ="Gianni";
// $bool = true ;

// var_dump($int);
// var_dump($flo);
// var_dump($name);
// var_dump($bool);



// <!-- ESERCIZIO 2 -->

// $text1 = "Marco";
// $text2 = "hai";
// $text3 = "sete";
// $text4 = "?";
// $text5 = "Perchè";
// $text6 = '$text2';
// $text7 = 'bevuto';
// $text8 = "tutto";
// echo ("$text1 $text2 $text3 $text4 $text5 $text2 $text7 $text8".",");



// <!-- correggi eventuali errori e stampa correttamente a terminale la stringa: “Marco Hai sete? Perche' hai bevuto tutto.“ -->

// ESERCIZIO 3 -->
// $words1 = [
//     'una',
//     67,
//     'vita',
//     'colle',
//     'mi',
//     'rosso',
//   [
//     'oscura',
//     'era',
//     89,
//     [
//     'mezzo',
//     [
//       'cammin',
//       'Nel',
//       [
//         'selva',
//         'la',
//         [
//           'via',
//           'una',
//           true,
//         ]
//       ],
//     ]
//   ],
//       'ritrovai',
//       'per'
//     ],
//   'diritta'
//   ];
//   $words2 = [
//     'elemento1' => 25.89,
//     'elemento2' => 'nostra',
//     'elemento3' => [
//       'Virgilio',
//       'smarrita',
//       'ché'
//     ]
//   ];
//   print_r($words1);
//   $del = "del";
//   $di = "di";
//   $results = $words1[6][3][1][1] ." " . $words1 [6] [3] [0] . " " . $del . " " .  $words1 [6][3][1][0] . "  " . $di ." " .  $words2["elemento2"] . " " . $words1[2] . " ". $words1[4] . " " . $words1[6][4] . " " . $words1[6][5] . " " . $words1[0] . " " . $words1[6][3][1][2][0] . " " . $words1[6][0] . ", " . $words2["elemento3[3]"] . " " . $words1[6][3][1][2][1] . " " . $words1[7] . " " . $words1[6][3][1][2][2][0] . " " . $words1[6][1] . " " . $words2["elemento3[1]"] ;
//   echo  $results;
  

// TRACCIA 4 --> 
// $users = [
//     ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'Maschio'],
//   ];

//   foreach ($users as $user) {
//     if($user ["gender"] == "Maschio"){
//         echo "buongiorno Sig. " . $user["name"]. " " .$user ["surname"]. "\n";
//     } elseif ($user["gender"] == "femmina"){
//         echo "buongionro sig.ra" . $user["name"] . " " . $user["surname"] . "\n";
//     }else {
//         echo "buongiorno" . $user["name"] . " " . $user["surname"] . "\n";
//     }

//   }

// TRACCIA 5 


// $numeri = [2, 5, 8, 10, 13, 16, 20];

// $somma_pari = 0;
// $contatore_pari = 0;

// foreach ($numeri as $numero) {
//     if ($numero % 2 == 0) {
//         $somma_pari += $numero;
//         $contatore_pari++;
//     }
// }

// if ($contatore_pari > 0) {
//     $media_pari = $somma_pari / $contatore_pari;
//     echo "La media dei numeri pari è: " . $media_pari;
// } else {
//     echo "Non ci sono numeri pari nell'array.";
// }


// TRACCIA 6 




for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY ";
    } elseif ($i % 3 == 0) {
        echo "PHP ";
    } elseif ($i % 5 == 0) {
        echo "JAVASCRIPT ";
    } else {
        echo $i . " ";
    }
}

;
