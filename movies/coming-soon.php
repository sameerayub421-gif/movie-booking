<?php
include('../base/header.php');

$movies_query = "SELECT * FROM movies WHERE release_date > CURDATE() ORDER BY release_date ASC";
$movies_result = mysqli_query($connection, $movies_query);
?>

<section class="breadcumb-area bg-img bg-overlay"
style="background-image: url('../img/bg-img/breadcumb.jpg');">

    <div class="bradcumbContent">
        <p>Upcoming Blockbuster Movies</p>
        <h2>Coming Soon</h2>
    </div>

</section>

<section class="now-showing-area section-padding-100">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="section-heading style-2">
                    <p>Check upcoming movies</p>
                    <h2>Coming Soon Movies</h2>
                </div>

            </div>

        </div>

        <div class="row">

            <?php while($movie = mysqli_fetch_array($movies_result)){ ?>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                <div class="single-movie-card mb-30">

                    <span class="badge-soon">
                        Soon
                    </span>

                    <div class="movie-poster">

                        <img src="../dashboard/uploads/<?php echo $movie['poster']; ?>"
                             alt="<?php echo $movie['title']; ?>">

                    </div>

                    <div class="movie-info">

                        <h5>
                            <?php echo $movie['title']; ?>
                        </h5>

                        <p class="genre">
                            <?php echo $movie['genre']; ?>
                        </p>

                        <p class="release-date">
                            Release:
                            <?php echo $movie['release_date']; ?>
                        </p>

                        <p class="duration">
                            <?php echo $movie['duration']; ?> Min
                        </p>

                        <a href="../book-ticket/by-movie.php?id=<?php echo $movie['movie_id']; ?>"
                           class="btn oneMusic-btn">
                           Pre Book
                           <i class="fa fa-angle-double-right"></i>
                        </a>

                    </div>

                </div>

            </div>

            <?php } ?>

        </div>

    </div>

</section>

<section class="about-section">

    <div class="container">

        <div class="about-box">

            <h2>About Coming Soon Movies</h2>

            <p>
                Our Online Movie Booking System helps users discover upcoming blockbuster movies before release.
                Stay updated with release dates, genres, trailers, and pre-booking options.
            </p>

            <p>
                From action and thriller to romance and sci-fi, all upcoming movies are listed here for movie lovers.
            </p>

            <h3>Why Use This Section?</h3>

            <ul>
                <li>Check upcoming movie releases</li>
                <li>Pre-book movie tickets</li>
                <li>Explore movie genres and details</li>
                <li>Stay updated with new cinema releases</li>
            </ul>

        </div>

    </div>

</section>

<style>

.single-movie-card{
    background:#111;
    border-radius:12px;
    overflow:hidden;
    transition:0.3s;
    position:relative;
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

.release-date{
    color:#fff;
    font-size:14px;
    margin-bottom:5px;
}

.duration{
    color:#bbb;
    margin-bottom:15px;
}

.badge-soon{
    position:absolute;
    top:10px;
    left:10px;
    background:red;
    color:#fff;
    padding:5px 12px;
    border-radius:5px;
    font-size:12px;
    z-index:9;
}

.oneMusic-btn{
    width:100%;
}

.about-section{
    padding-bottom:100px;
}

.about-box{
    background:#111;
    padding:40px;
    border-radius:10px;
}

.about-box h2,
.about-box h3{
    color:#fff;
    margin-bottom:20px;
}

.about-box p,
.about-box li{
    color:#bbb;
    line-height:1.8;
}

</style>

<?php
include('../base/footer.php');
?>