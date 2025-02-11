<?php
$frutas = ("maça", "Banana", "Laranja", "Abacaxi", "Uva");
foreach ($frutas as $fruta){
    echo $fruta . <br>;

}

 echo "_______________________________________________________<br>";

$frutas[] = "Morango";
 foreach ($frutas as $fruta){
    echo $fruta . "<br>";

 }

 echo "_________________________________________________________<br>";
 array_shift($frutas);
 unset($frutas[1]);

 foreach($frutas as $fruta){
    echo $fruta . "<br>";
 }

