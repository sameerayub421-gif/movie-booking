<?php
include('../base/header.php');

$movies_query = "SELECT * FROM movies ORDER BY movie_id DESC";
$movies_result = mysqli_query($connection, $movies_query);
?>

<section class="now-showing-area section-padding-100">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="section-heading style-2">
                    <p>Check out what's playing</p>
                    <h2>Now Showing</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <?php while($movie = mysqli_fetch_array($movies_result)){ ?>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                <div class="single-movie-card mb-30">

                    <div class="movie-poster">

                        <img src="../dashboard/uploads/<?php echo $movie['poster']; ?>"
                             alt="<?php echo $movie['title']; ?>">

                    </div>

                    <div class="movie-info">

                        <h5><?php echo $movie['title']; ?></h5>

                        <p class="genre">
                            <?php echo $movie['genre']; ?>
                        </p>

                        <p class="duration">
                            <?php echo $movie['duration']; ?> Min
                        </p>

                        <div class="rating">
                            ⭐⭐⭐⭐⭐
                        </div>

                        <a href="../book-ticket/by-movie.php?id=<?php echo $movie['movie_id']; ?>"
                           class="btn oneMusic-btn">
                           Book Now
                        </a>

                    </div>

                </div>

            </div>

            <?php } ?>

        </div>

    </div>
</section>

<style>

.single-movie-card{
    background:#111;
    border-radius:12px;
    overflow:hidden;
    transition:0.3s;
    height:100%;
}

.single-movie-card:hover{
    transform:translateY(-5px);
}

.movie-poster img{
    width:100%;
    height:400px;
    object-fit:cover;
}

.movie-info{
    padding:20px;
    text-align:center;
}

.movie-info h5{
    color:#fff;
    margin-bottom:10px;
}

.genre{
    color:#ff0000;
    margin-bottom:5px;
}

.duration{
    color:#bbb;
    margin-bottom:10px;
}

.rating{
    margin-bottom:15px;
    font-size:18px;
}

.oneMusic-btn{
    width:100%;
}

</style>

<?php
include('../base/footer.php');
?>