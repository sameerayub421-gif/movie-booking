<?php 
include('./base/header.php'); 

$latest_movies_query = "SELECT * FROM movies ORDER BY movie_id DESC LIMIT 8";
$latest_movies_result = mysqli_query($connection, $latest_movies_query);

$top_movies_query = "SELECT * FROM movies ORDER BY movie_id DESC LIMIT 6";
$top_movies_result = mysqli_query($connection, $top_movies_query);

$shows_query = "SELECT shows.*, movies.title, movies.poster
                FROM shows
                INNER JOIN movies ON shows.movie_id = movies.movie_id
                ORDER BY shows.show_id DESC LIMIT 6";

$shows_result = mysqli_query($connection, $shows_query);

$reviews_query = "SELECT reviews.*, users.name, movies.title
                  FROM reviews
                  INNER JOIN users ON reviews.user_id = users.user_id
                  INNER JOIN movies ON reviews.movie_id = movies.movie_id
                  ORDER BY review_id DESC LIMIT 5";

$reviews_result = mysqli_query($connection, $reviews_query);
?>

<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">

        <?php
        $slider_query = "SELECT * FROM movies ORDER BY movie_id DESC LIMIT 2";
        $slider_result = mysqli_query($connection, $slider_query);

        while($slider = mysqli_fetch_array($slider_result)){
        ?>

        <div class="single-hero-slide d-flex align-items-center justify-content-center">

            <div class="slide-img bg-img"
                 style="background-image: url('dashboard/uploads/<?php echo $slider['poster']; ?>');">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="hero-slides-content text-center">

                            <h6 data-animation="fadeInUp" data-delay="100ms">
                                Latest Movie
                            </h6>

                            <h2 data-animation="fadeInUp" data-delay="300ms">
                                <?php echo $slider['title']; ?>
                                <span><?php echo $slider['title']; ?></span>
                            </h2>

                            <a href="movie-detail.php?id=<?php echo $slider['movie_id']; ?>"
                               class="btn oneMusic-btn mt-50">
                               Discover
                               <i class="fa fa-angle-double-right"></i>
                            </a>

                        </div>

                    </div>
                </div>
            </div>

        </div>

        <?php } ?>

    </div>
</section>
<!-- ##### Hero Area End ##### -->


<!-- ##### Latest Movies Area Start ##### -->
<section class="latest-albums-area section-padding-100">

    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="section-heading style-2">
                    <p>See what’s new</p>
                    <h2>Latest Movies</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <div class="albums-slideshow owl-carousel">

                    <?php while($movie = mysqli_fetch_array($latest_movies_result)){ ?>

                    <div class="single-album">

                        <img src="dashboard/uploads/<?php echo $movie['poster']; ?>" alt="" class="movie-poster">

                        <div class="album-info">

                            <a href="movie-detail.php?id=<?php echo $movie['movie_id']; ?>">
                                <h5><?php echo $movie['title']; ?></h5>
                            </a>

                            <p><?php echo $movie['genre']; ?></p>

                        </div>

                    </div>

                    <?php } ?>

                </div>

            </div>
        </div>

    </div>

</section>
<!-- ##### Latest Movies Area End ##### -->


<!-- ##### Shows Area Start ##### -->
<section class="oneMusic-buy-now-area has-fluid bg-gray section-padding-100">

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="section-heading style-2">
                    <p>Book your tickets</p>
                    <h2>Latest Shows</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <?php while($show = mysqli_fetch_array($shows_result)){ ?>

            <div class="col-12 col-sm-6 col-md-4 col-lg-2">

                <div class="single-album-area wow fadeInUp">

                    <div class="album-thumb">

                        <img src="dashboard/uploads/<?php echo $show['poster']; ?>" alt="" class="movie-poster">

                    </div>

                    <div class="album-info">

                        <a href="#">
                            <h5><?php echo $show['title']; ?></h5>
                        </a>

                        <p>
                            <?php echo $show['show_date']; ?>
                            <br>
                            <?php echo $show['start_time']; ?>
                        </p>

                    </div>

                </div>

            </div>

            <?php } ?>

        </div>

    </div>

</section>
<!-- ##### Shows Area End ##### -->


<!-- ##### Reviews Area Start ##### -->
<section class="miscellaneous-area section-padding-100-0">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="section-heading text-left mb-50">
                    <p>User Feedback</p>
                    <h2>Latest Reviews</h2>
                </div>

            </div>

        </div>

        <div class="row">

            <?php while($review = mysqli_fetch_array($reviews_result)){ ?>

            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-top-item d-flex align-items-center justify-content-between mb-4 p-3 bg-light">

                    <div>

                        <h6>
                            <?php echo $review['title']; ?>
                        </h6>

                        <p>
                            <?php echo $review['comment']; ?>
                        </p>

                        <small>
                            By <?php echo $review['name']; ?>
                        </small>

                    </div>

                </div>

            </div>

            <?php } ?>

        </div>

    </div>

</section>
<!-- ##### Reviews Area End ##### -->


<!-- ##### Contact Area Start ##### -->
<!-- <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img"
style="background-image: url(img/bg-img/bg-2.jpg);">

    <div class="container">

        <div class="row">
            <div class="col-12">

                <div class="section-heading white wow fadeInUp">

                    <p>Need Help?</p>
                    <h2>Contact Us</h2>

                </div>

            </div>
        </div>

        <div class="row">

            <div class="col-12">

                <div class="contact-form-area">

                    <form action="" method="post">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text"
                                           class="form-control"
                                           placeholder="Name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email"
                                           class="form-control"
                                           placeholder="Email">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control"
                                              rows="5"
                                              placeholder="Message"></textarea>
                                </div>
                            </div>

                            <div class="col-12 text-center">

                                <button class="btn oneMusic-btn mt-30" type="submit">
                                    Send Message
                                    <i class="fa fa-angle-double-right"></i>
                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section> -->
<!-- ##### Contact Area End ##### -->

<?php include('./base/footer.php'); ?>