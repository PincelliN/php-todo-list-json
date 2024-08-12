<?php

//prendo il file json e lo trasformo in un array di oggetti
$object= file_get_contents('server.json');


//trasformo la l array in un elemento php

$objectlist=json_decode($object);


//inseriamo logica ,manipolazione e aggiornamento del json



    
    // Debugging: stampa l'arraylist e l'elemento aggiunto
if(isset($_POST['changeStat'])){
    $index=$_POST['changeStat'];

    //accedo alla propietà state attraverso '->' e non più attraverso il '.'
if($objectlist[$index]->state===false){
        $objectlist[$index]->state=true;
    }else{
        $objectlist[$index]->state=false;
    }; 
// Aggiorna il file JSON dopo la modifica
    file_put_contents('server.json', json_encode($objectlist));
};
  





//se entrambi i post esistono aggiorno i file JSON
/* if((isset($_POST['toDoElement']))&&(isset($_POST['toDoDescription']))){

$toDoElement=$_POST['toDoElement'];
$toDoDescription=$_POST['toDoDescription'];



 $todoItems=[false,$toDoElement,$toDoDescription]; */
 //aggiungo il nuovo elemento alla lista
/*  $arraylist[]=$todoItems; */
 //sovrascrivo il json 
/*  file_put_contents('server.json',json_encode($arraylist));

};
 */










//restituisco il json letto da js

//modifico lheader del file in modo da  interpretarlo come json

header('Content-type: application/json');
//stampo l elemento PHP come stringa
echo json_encode($objectlist);