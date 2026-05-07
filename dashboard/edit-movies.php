<?php
include("./base/header.php");

$id = $_GET['id'];

$select_query  = "SELECT * FROM movies WHERE movie_id = '$id'";
$result = mysqli_query($connection, $select_query);
$movie  = mysqli_fetch_array($result);

if(isset($_POST['update_movie'])){

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

    if($poster != ""){

        if($extension == "jpg" || $extension == "png" || $extension == "jpeg"){

            move_uploaded_file($tmpPoster, $destination);

        } else {

            echo "<script>alert('Invalid image format');</script>";
        }

    } else {

        $poster = $movie['poster'];
    }

    $update = "UPDATE movies SET
        title='$title',
        description='$description',
        duration='$duration',
        release_date='$release_date',
        language='$language',
        genre='$genre',
        poster='$poster',
        trailer_url='$trailer_url'
        WHERE movie_id='$id'
    ";

    mysqli_query($connection, $update);

    echo "<script>alert('Movie Updated Successfully'); window.location='manage-movies.php';</script>";
}
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-0 text-white">Edit Movie</h4>
            <a href="manage-movies.php" class="btn btn-primary">Back</a>
        </div>

        <form method="POST" enctype="multipart/form-data">
            <div class="row g-4">

                <div class="col-md-6">
                    <label class="form-label text-white">Movie Title</label>
                    <input type="text" name="title" value="<?php echo $movie['title']; ?>" class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Duration</label>
                    <input type="number" name="duration" value="<?php echo $movie['duration']; ?>" class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Release Date</label>
                    <input type="date" name="release_date" value="<?php echo $movie['release_date']; ?>" class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Language</label>
                    <input type="text" name="language" value="<?php echo $movie['language']; ?>" class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Genre</label>
                    <input type="text" name="genre" value="<?php echo $movie['genre']; ?>" class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Change Poster</label>
                    <input type="file" name="poster" class="form-control bg-dark text-white border-0">
                </div>

                <div class="col-12">
                    <img src="./uploads/<?php echo $movie['poster']; ?>" width="120" class="rounded mb-2">
                </div>

                <div class="col-12">
                    <label class="form-label text-white">Trailer URL</label>
                    <input type="text" name="trailer_url" value="<?php echo $movie['trailer_url']; ?>" class="form-control bg-dark text-white border-0">
                </div>

                <div class="col-12">
                    <label class="form-label text-white">Description</label>
                    <textarea name="description" rows="5" class="form-control bg-dark text-white border-0"><?php echo $movie['description']; ?></textarea>
                </div>

                <div class="col-12">
                    <button type="submit" name="update_movie" class="btn btn-success px-5">Update Movie</button>
                </div>

            </div>
        </form>
    </div>
</div>

<?php include("./base/footer.php"); ?>
