<?php include_once __DIR__ . '/layout/head.php'?>

<?php

$newAlbum=$_POST;

 if (!empty($newAlbum)) {
    //$jsonObj = json_encode($newAlbum);
    //$jsonNewAlbum = file_post_contents('albums.json');

    $json_string = file_get_contents('albums.json');

    $albumsArray = json_decode($json_string, true);

    array_push($albumsArray, $newAlbum);

    $albums_json = json_encode($albumsArray);

    file_put_contents('albums.json', $albums_json);

    $newAlbum=[];

    header('Location: ./index.php');
}
?>


<div class="container">

    <form action="" method="post" class="mt-5 p-4 text-light bg-secondary border border-secondary rounded-1">
        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Type Album title"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Author</label>
            <input type="text" class="form-control" name="author" id="author" aria-describedby="helpId" placeholder="Type Album author"/>
        </div>        
        <div class="mb-3">
            <label for="" class="form-label">Year</label>
            <input type="text" class="form-control" name="year" id="year" aria-describedby="helpId" placeholder="Type Album year"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Album cover</label>
            <input type="text" class="form-control" name="poster" id="cover" aria-describedby="helpId" placeholder="Type link to cover image"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Genre</label>
            <input type="text" class="form-control" name="genre" id="" aria-describedby="helpId" placeholder="Type Album genre"/>
        </div>

        <button type="submit" class="btn btn-dark">Add</button>
    </form>
    
</div>

<?php include_once __DIR__ . '/layout/foot.php'?>

