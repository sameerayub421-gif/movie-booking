<?php
include('../base/header.php');

$select_query = "SELECT 
shows.show_id,
shows.movie_id,
shows.show_date,
shows.start_time,
shows.end_time,
movies.title,
movies.poster,
theaters.name as theater_name,
screens.screen_name

FROM shows

INNER JOIN movies
ON shows.movie_id = movies.movie_id

INNER JOIN screens
ON shows.screen_id = screens.screen_id

INNER JOIN theaters
ON screens.theater_id = theaters.theater_id

ORDER BY shows.show_date ASC";

$result = mysqli_query($connection, $select_query);
?>




<section class="section-padding-100" id="shows">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="section-heading style-2">

                    <p>Available Movie Shows</p>

                    <h2>All Shows</h2>

                </div>

            </div>

        </div>

        <div class="row">

            <?php while($show = mysqli_fetch_array($result)){ ?>

            <div class="col-12 col-md-6 col-lg-4">

                <div class="card show-card mb-30">

                    <img src="../dashboard/uploads/<?php echo $show['poster']; ?>">

                    <div class="card-body">

                        <h4>
                            <?php echo $show['title']; ?>
                        </h4>

                        <p>
                            🎬 Theater:
                            <?php echo $show['theater_name']; ?>
                        </p>

                        <p>
                            🖥 Screen:
                            <?php echo $show['screen_name']; ?>
                        </p>

                        <p>
                            📅 Date:
                            <?php echo $show['show_date']; ?>
                        </p>

                        <p>
                            ⏰ Time:
                            <?php echo $show['start_time']; ?>
                            -
                            <?php echo $show['end_time']; ?>
                        </p>

                       <a href="../book-ticket/book-now.php?movie_id=<?php echo $show['movie_id']; ?>"
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
