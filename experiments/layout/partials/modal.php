<div class="active-album z-1 position-fixed top-0 start-0 vw-100 vh-100" v-if="flagActiveAlbum">
        
    <div class="row mx-auto h-100 position-relative w-50 justify-content-center align-items-center">
        <div class="col-8">
            <div class="card">
                <img class="card-img-top" :src="activeAlbum.poster" alt="Title" />
                <div class="card-body text-center">
                    <h4 class="card-title">{{activeAlbum.title}}</h4>
                    <p class="card-text">{{activeAlbum.year}}</p>
                    <p class="card-text fs-4 fw-bold">{{activeAlbum.author}}</p> 
                    <p class="card-text">{{activeAlbum.genre}}</p>
                </div>
            </div>
            
        </div>
    </div>
    <button class="btn btn-secondary position-absolute" @click="flagActiveAlbum = !flagActiveAlbum">&cross;</button>

</div>