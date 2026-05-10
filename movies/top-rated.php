<?php
include('../base/header.php');


$select_query = "
SELECT
movies.*,
AVG(reviews.rating) as avg_rating
FROM movies
INNER JOIN reviews
ON movies.movie_id = reviews.movie_id
GROUP BY movies.movie_id
HAVING avg_rating >= 3
ORDER BY avg_rating DESC
";

$result = mysqli_query($connection, $select_query);

?>

<style>

body{
    background:#000;
    color:#fff;
}

.movie-card{
    width:280px;
    background:#1b1b1b;
    border:2px solid #E50914;
    border-radius:10px;
    overflow:hidden;
    transition:0.3s;
    position:relative;
    margin:auto;
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
    color:#fff;
    margin-top:15px;
}

.movie-card p{
    color:#ccc;
}

.rating-badge{
    position:absolute;
    top:10px;
    left:10px;
    background:#E50914;
    color:#fff;
    padding:5px 12px;
    border-radius:5px;
    font-size:14px;
}

</style>

<section class="section-padding-100">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="section-heading text-center">

                    <p>Highest Rated Collection</p>

                    <h2>Top Rated Movies</h2>

                </div>

            </div>

        </div>

        <div class="row">

            <?php while($movie = mysqli_fetch_assoc($result)){ ?>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

                <div class="movie-card">

                    <div class="rating-badge">

                        ⭐
                        <?php echo round($movie['avg_rating'],1); ?>

                    </div>

                    <img src="../dashboard/uploads/<?php echo $movie['poster']; ?>">

                    <div class="p-3 text-center">

                        <h4>

                            <?php echo $movie['title']; ?>

                        </h4>

                        <p>

                            <?php echo $movie['genre']; ?>

                        </p>

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

<?php
include('../base/footer.php');
?>