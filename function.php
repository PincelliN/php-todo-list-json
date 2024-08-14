<?php

//prendo il file json e lo trasformo in un array di oggetti
$object = file_get_contents('server.json');


//trasformo la l array in un elemento php

$objectlist = json_decode($object);


//inseriamo logica ,manipolazione e aggiornamento del json



// cambio del valore della propietà state
if (isset($_POST['changeStat'])) {
    $index = $_POST['changeStat'];

    //accedo alla propietà state attraverso '->' e non più attraverso il '.'
    if ($objectlist[$index]->state === false) {
        $objectlist[$index]->state = true;
    } else {
        $objectlist[$index]->state = false;
    };
    // Aggiorna il file JSON dopo la modifica
    file_put_contents('server.json', json_encode($objectlist));
};

//se entrambi i post esistono aggiorno i file JSON

if ((isset($_POST['toDoTitle']) && isset($_POST['toDoDescription']))) {

    $newItem = (object) [
        "state" => false,
        "title" => $_POST['toDoTitle'],
        "description" => $_POST['toDoDescription']
    ];
    // Aggiungo il nuovo elemento alla lista 
    $objectlist[] = $newItem;
    // Sovrascrivo il vecchio file JSON
    file_put_contents('server.json', json_encode($objectlist));
};

// Se esiste indextoRemove allora vado a rimuovere l'elemento corrispondente
if (isset($_POST['indexRem'])) {
    $index = $_POST['indexRem'];
    unset($objectlist[$index]);
    // Ricostruisci l'array per rimuovere eventuali buchi negli indici
    $objectlist = array_values($objectlist);
    // Sovrascrivo il vecchio file JSON
    file_put_contents('server.json', json_encode($objectlist));
}

//restituisco il json letto da js

//modifico lheader del file in modo da  interpretarlo come json

header('Content-type: application/json');
//stampo l elemento PHP come stringa
echo json_encode($objectlist);