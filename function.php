<?php

//prendo il file json e lo trasformo in un array di array
$array= file_get_contents('server.json');


//trasformo la stinga in un elemento php

$arraylist=json_decode($array);

//inseriamo logica ,manipolazione e aggiornamento del json
/* var_dump($arraylist); */













//restituisco il json letto da js

//modifico lheader del file in modo da  interpretarlo come json

header('Content-type: application/json');
//stampo l elemento PHP come stringa
echo json_encode($arraylist);