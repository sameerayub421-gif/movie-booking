<?php include("./base/header.php"); 

if(isset($_POST['add_movie'])){

    $title        = $_POST['title'];
    $description  = $_POST['description'];
    $duration     = $_POST['duration'];
    $release_date = $_POST['release_date'];
    $language     = $_POST['language'];
    $genre        = $_POST['genre'];
    $trailer_url  = $_POST['trailer_url'];
    $poster = $_FILES['poster']['name'];
    $tmpPoster = $_FILES['poster']['tmp_name'];
    $destination = "./uploads/".$poster;
    $extension = pathinfo($poster, PATHINFO_EXTENSION);


     if($extension == "jpg" || $extension == "png" || $extension == "jpeg"){
        if(move_uploaded_file($tmpPoster, $destination)){
    $insert_query = "INSERT INTO movies 
    (title, description, duration, release_date, language, genre, trailer_url, poster)
    VALUES
    ('$title', '$description', '$duration', '$release_date', '$language', '$genre', '$trailer_url', '$poster')";

    mysqli_query($connection, $insert_query);

    echo "<script>alert('Movie Added Successfully'); window.location='manage-movies.php';</script>";
        } else {
            echo "<script>alert('Failed to upload poster image');</script>";
        }
    } else {
        echo "<script>alert('Invalid image format. Only JPG, JPEG, and PNG are allowed.');</script>";
    }
}


?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="text-white mb-0">Add Movie</h4>
            <a href="manage-movies.php" class="btn btn-outline-light">
                <i class="fa fa-arrow-left me-2"></i>Back
            </a>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label class="form-label text-white">Movie Title</label>
                <input type="text" name="title" class="form-control bg-dark text-white border-0"
                    placeholder="Enter Movie Title" required>
            </div>

            <div class="mb-3">
                <label class="form-label text-white">Description</label>
                <textarea name="description" rows="4" class="form-control bg-dark text-white border-0"
                    placeholder="Enter Movie Description"></textarea>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label text-white">Duration (Minutes)</label>
                    <input type="number" name="duration" class="form-control bg-dark text-white border-0"
                        placeholder="e.g. 120" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label text-white">Release Date</label>
                    <input type="date" name="release_date" class="form-control bg-dark text-white border-0" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label text-white">Language</label>
                    <input type="text" name="language" class="form-control bg-dark text-white border-0"
                        placeholder="English / Urdu / Hindi">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label text-white">Genre</label>
                    <input type="text" name="genre" class="form-control bg-dark text-white border-0"
                        placeholder="Action / Comedy / Horror">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label text-white">Poster Image</label>
                <input type="file" name="poster" class="form-control bg-dark text-white border-0">
            </div>

            <div class="mb-3">
                <label class="form-label text-white">Trailer URL</label>
                <input type="url" name="trailer_url" class="form-control bg-dark text-white border-0"
                    placeholder="https://youtube.com/...">
            </div>

            <button type="submit" class="btn btn-primary" name="add_movie">
                <i class="fa fa-save me-2"></i>Save Movie
            </button>

        </form>

    </div>
</div>

<?php include("./base/footer.php"); ?>