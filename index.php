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



    <title>To do list php</title>
</head>

<body>
    <div class='container'>
        <div id="app">
            <div class="row row-cols-1 bg bg-primary-subtle">
                <div class="col-8 mx-auto text-center text-uppercase mt-3">
                    <h1>To do List</h1>
                </div>
                <div v-for="(element,index) in this.list" class="col-8 mx-auto my-5">
                    <div class="row  d-flex border align-items-center">
                        <div @click='changeStatus(index)' class="col-10 "
                            :class='element.state === true? "text-decoration-line-through":""'>{{element.title}}</div>
                        <div class="col-2 d-inline">
                            <button v-show='element.state === true' @click='removeitem(index)'
                                class='btn btn-danger text-center'><i class="fa-solid fa-trash"></i></button>
                            <a :href="'description.php?id=' + index " class='btn btn-warning text-center'><i
                                    class="fa-solid fa-eye"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-8 mx-auto d-flex align-items-center">
                    <div class="input-group mb-3">

                        <input v-model="toDoTitle" type="text" class="form-control" placeholder="element" name='element'
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <textarea v-model="toDoDescription" name="description" class="form-control"
                            placeholder="description"></textarea>
                        <button @click='updatelist' class="btn btn-outline-warning" type="bottom"
                            id="button-addon2">Inserisci</button>

                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- link vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type="Text/Javascript" src="main.js"></script>
</body>

</html>