<?php


// Recupera l'ID dall'URL
if(isset($_GET['id']) ){
  $id = (int)$_GET['id']; 
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
    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link boostrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Axios-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.3/axios.min.js"
        integrity="sha512-zJXKBryKlsiDaWcWQ9fuvy50SG03/Qc5SqfLXxHmk9XiUUbcD9lXYjHDBxLFOuZSU6ULXaJ69bd7blSMEgxXNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>DescriptionElement</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class='col-12 text-center'>
                <div class="alert alert-info"><?php echo $item ?></div>

            </div>
            <div class='col-12'>
                <a href="index.php" class='btn btn-info'>Torna alla homepage</a>
            </div>
        </div>
    </div>

    <!-- link vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type="Text/Javascript" src="main.js"></script>
</body>

</html>