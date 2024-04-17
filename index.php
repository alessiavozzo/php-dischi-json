<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <!-- bs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <div id="app">

        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="col" v-for="(disc,index) in dischi">
                    <div class="card" @click="showDetails(index)">
                        <img class="card-img-top" :src="disc.poster" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">{{disc.title}}</h4>
                            <div class="card-text">{{disc.author}}</div>
                            <div class="card-text">{{disc.year}}</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div v-if="isModalOpen" class="text-center">
            <div class="card" @click="showDetails(index)">
                <img class="card-img-top" :src="activeDisc.poster" alt="Title" />
                <div class="card-body">
                    <h4 class="card-title">{{activeDisc.title}}</h4>
                    <div class="card-text">{{activeDisc.author}}</div>
                    <div class="card-text">{{activeDisc.year}}</div>
                </div>
            </div>
        </div>



    </div>






    <!-- scripts -->
    <!-- script cdn axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- script cdn vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- script js -->
    <script src="./assets/js/app.js"></script>
</body>

</html>