<div class="container">
    <div class="row gy-4">
        <div class="col-4" v-for="(album,index) in albums">
            <div class="card" @click='showAlbum(index)'>
                <img class="card-img-top" :src="album.poster" alt="Title" />
                <div class="card-body text-center">
                    <h4 class="card-title">{{album.title}}</h4>
                    <p class="card-text">{{album.year}}</p>
                    <p class="card-text fs-4 fw-bold">{{album.author}}</p> 
                    <p class="card-text">{{album.genre}}</p>
                </div>
            </div>
            
        </div>
    </div>
</div>