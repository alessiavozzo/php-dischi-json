<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <!-- bs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- fa -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>


    <div id="app">

        <!-- header with logo -->
        <header id="site_header">
            <nav class="navbar bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        LOGO
                    </a>
                </div>
            </nav>
        </header>

        <!-- main with discs -->
        <main id="site_main" class="py-5 bg-secondary">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                    <div class="col gy-4" v-for="(disc,index) in dischi">

                        <!-- disc info -->
                        <div class="card bg-dark" @click="showDetails(index)">
                            <img class="card-img-top px-5 py-2" :src="disc.poster" alt="Title" />
                            <div class="card-body text-light text-center">
                                <h4 class="card-title">{{disc.title}}</h4>
                                <div class="card-text py-2">{{disc.author}}</div>
                                <h5 class="card-text">{{disc.year}}</h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>

        <!-- modal: overlayed -->
        <div v-if="isModalOpen" class="modal-info position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center bg-dark">
            <i class="fa-solid fa-xmark fs-3 position-absolute end-0 top-0 text-white" @click="closeModal()"></i>

            <div class="card">
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