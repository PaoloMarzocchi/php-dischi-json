<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    

<div id="app">
    <header>
        <h1 class="text-center p-3">OUR TOP 6 ALBUMS!</h1>
    </header>
    <main>
        <div class="container">
            <div class="row gy-4">
                <div class="col-4" v-for="album in albums">
                    <div class="card">
                        <img class="card-img-top" :src="album.poster" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">{{album.title}}</h4>
                            <p class="card-text">{{album.author}}</p>
                            <p class="card-text">{{album.year}}</p>
                            <p class="card-text">{{album.genre}}</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>
    
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="./assets/js/app.js"></script>
</body>
</html>