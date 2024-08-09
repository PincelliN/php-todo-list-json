<?php

//prendo il file json e lo trasformo in un array di array
$array= file_get_contents('server.json');


//trasformo la stinga in un elemento php

$arraylist=json_decode($array);

//inseriamo logica ,manipolazione e aggiornamento del json
/* var_dump($arraylist); */


//se entrambi i post esistono aggiorno i file JSON
if((isset($_POST['toDoElement']))&&(isset($_POST['toDoDescription']))){
 $todoItem=[false,$_POST['toDoElement'],$_POST['toDoDescription']];
 //aggiungo il nuovo elemento alla lista
 $arraylist=$todoItem;
 //sovrascrivo il json 
 file_put_contents('server.json',json_encode($arraylist));

};











//restituisco il json letto da js

//modifico lheader del file in modo da  interpretarlo come json

header('Content-type: application/json');
//stampo l elemento PHP come stringa
echo json_encode($arraylist);