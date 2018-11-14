<?php
/*$tirage = [];
for ($i = 0; count($tirage) < 6; $i++) {
   $aleatoire = rand(1,49);
   if (!in_array($aleatoire, $tirage)) {
      array_push($tirage,$aleatoire);
   }     
}
sort($tirage);
for ($j = 0; $j < count($tirage); $j++) {
   echo $tirage[$j] . "<br>";
} */

const NUMBER_COUNT = 6;
const MIN_BOUND = 1;
const MAX_BOUND = 49;

function monTirage(){
   $tirage = [];
   for ($i = 0; count($tirage) < NUMBER_COUNT; $i++) {
      $aleatoire = rand(MIN_BOUND,MAX_BOUND);
      if (!in_array($aleatoire, $tirage)) {
         array_push($tirage,$aleatoire);
      }     
   }
   sort($tirage);
   return $tirage;
}
$tirage = monTirage();

include("index.phtml")
?>