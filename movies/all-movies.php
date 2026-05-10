<?php
include('../base/header.php');

$movies_query = "SELECT * FROM movies ORDER BY movie_id DESC";
$movies_result = mysqli_query($connection, $movies_query);
?>

<section class="breadcumb-area bg-img bg-overlay"
    style="background-image: url(<?php echo $base_url; ?>img/bg-img/breadcumb.jpg);">

    <div class="bradcumbContent">
        <p>Book Your Favourite Movie</p>
        <h2>All Movies</h2>
    </div>

</section>

<section class="events-area section-padding-100">

    <div class="container">

        <div class="row">

            <?php while($movie = mysqli_fetch_array($movies_result)){ ?>

            <div class="col-12 col-md-6 col-lg-4">

                <div class="single-event-area mb-30">

                    <div class="event-thumbnail">

                        <img src="<?php echo $base_url; ?>dashboard/uploads/<?php echo $movie['poster']; ?>"
                             class="movie-poster"
                             alt="">

                    </div>

                    <div class="event-text">

                        <h4><?php echo $movie['title']; ?></h4>

                        <div class="event-meta-data">

                            <a href="#" class="event-place">
                                <?php echo $movie['genre']; ?>
                            </a>

                            <a href="#" class="event-date">
                                <?php echo $movie['release_date']; ?>
                            </a>

                        </div>

                        <p>
                            <?php echo substr($movie['description'],0,120); ?>...
                        </p>

                        <div class="mt-3">

                            <span class="badge badge-light p-2">
                                <?php echo $movie['language']; ?>
                            </span>

                            <span class="badge badge-dark p-2">
                                <?php echo $movie['duration']; ?> Min
                            </span>

                        </div>

                    
<a href="../book-ticket/book-now.php?movie_id=<?php echo $movie['movie_id']; ?>"
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

body {
    background: #000;
    color: #ffffff;
}

.movie-poster{
    width:100%;
    height:450px;
    object-fit:cover;
}

.single-event-area{
    width: 280px;
    background:#666666;
    border:2px solid #E50914;
    border-radius:10px;
    overflow:hidden;
    transition:0.3s;
    height:100%;
}

.single-event-area:hover{
    transform:translateY(-5px);
}

.event-text{
    padding:20px;
}

.event-text h4{
    color:#fff;
    margin-bottom:10px;
}

.event-text p{
    color:#cccccc;
}

.event-meta-data{
    margin-bottom:10px;
}

.event-meta-data a{
    color:#ff0000;
    margin-right:10px;
    font-size:14px;
}

.badge{
    font-size:13px;
}

</style>

<?php include('../base/footer.php'); ?>