<?php
include('../base/header.php');

$select_query = "
SELECT movies.*, AVG(reviews.rating) as avg_rating
FROM movies
LEFT JOIN reviews ON movies.movie_id = reviews.movie_id
GROUP BY movies.movie_id
ORDER BY avg_rating DESC
";

$result = mysqli_query($connection, $select_query);
?>

<section class="hero-area">
    <div class="hero-slides owl-carousel">

        <div class="single-hero-slide d-flex align-items-center justify-content-center">

            <div class="slide-img bg-img"
                 style="background-image: url(/movie-booking-master/images/index.img/background1.jpg);">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="hero-slides-content text-center">

                            <h6>Top Rated Collection</h6>

                            <h2>
                                BEST MOVIES
                                <span>BEST MOVIES</span>
                            </h2>

                            <a href="#movies"
                               class="btn oneMusic-btn mt-50">
                               Explore
                               <i class="fa fa-angle-double-right"></i>
                            </a>

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<section class="section-padding-100" id="movies">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="section-heading style-2">
                    <p>Most Popular Movies</p>
                    <h2>Top Rated Movies</h2>
                </div>

            </div>

        </div>

        <div class="row">

            <?php while($movie = mysqli_fetch_array($result)){ ?>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                <div class="card movie-card mb-30">

                    <span class="badge">

                        ⭐ 
                        <?php 
                        if($movie['avg_rating']){
                            echo round($movie['avg_rating'],1);
                        }else{
                            echo "No Rating";
                        }
                        ?>

                    </span>

                    <img src="../dashboard/uploads/<?php echo $movie['poster']; ?>">

                    <div class="card-body text-center">

                        <h4>
                            <?php echo $movie['title']; ?>
                        </h4>

                        <p>
                            <?php echo $movie['genre']; ?>
                        </p>

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

.movie-card{
    background:#f8f9fa;
    border:none;
    overflow:hidden;
    transition:0.3s;
    position:relative;
}

.movie-card img{
    width:100%;
    height:350px;
    object-fit:cover;
}

.movie-card:hover{
    transform:translateY(-5px);
}

.movie-card h4{
    font-size:20px;
    margin-top:10px;
}

.movie-card p{
    color:#666;
    font-size:14px;
}

.badge{
    position:absolute;
    top:10px;
    left:10px;
    background:#000;
    color:#fff;
    padding:6px 10px;
    border-radius:5px;
    font-size:13px;
    z-index:10;
}

</style>

<?php
include('../base/footer.php');
?>