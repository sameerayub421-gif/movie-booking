<?php
include('../base/header.php');

$theater_id = $_GET['id'];

$query = "
SELECT DISTINCT movies.*
FROM movies
JOIN shows ON movies.movie_id = shows.movie_id
JOIN screens ON shows.screen_id = screens.screen_id
WHERE screens.theater_id = '$theater_id'
";

$result = mysqli_query($connection, $query);
?>

<div class="container pt-5">

    <h2 class="text-center mb-5">
        Theater Movies
    </h2>

    <div class="row">

    <?php while($movie = mysqli_fetch_array($result)){ ?>

        <div class="col-md-3 mb-4">

            <div class="card">

                <img src="../dashboard/uploads/<?php echo $movie['poster']; ?>"
                     style="height:350px; object-fit:cover;">

                <div class="card-body text-center">

                    <h5>
                        <?php echo $movie['title']; ?>
                    </h5>

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

<?php
include('../base/footer.php');
?>