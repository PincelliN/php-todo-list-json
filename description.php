<?php
// Recupera l'ID dall'URL
if(isset($_GET['id']) ){
  $id = (int)$_GET['id'];  

// Leggi il file JSON e trasformalo in un array di oggetti
$object = file_get_contents('server.json');
$objectlist = json_decode($object);

// Ottieni l'elemento corrispondente
$item = $objectlist[$id]->description;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>DescriptionElement</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class='col-12 text-center'>
                <h2 class="text-dark ">la password generata é</h2>
                <div class="alert alert-info"><?php echo $item ?></div>

            </div>
            <div class='col-12'>
                <a href="index.php" class='btn btn-info'>Torna alla homepage</a>
            </div>
        </div>
    </div>


</body>

</html>