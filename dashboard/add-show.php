<?php
include('./base/header.php');

if(isset($_POST['add_show'])){

    $movie_id   = $_POST['movie_id'];
    $screen_id  = $_POST['screen_id'];
    $show_date  = $_POST['show_date'];
    $start_time = $_POST['start_time'];
    $end_time   = $_POST['end_time'];

    $insert_query = "INSERT INTO shows(movie_id, screen_id, show_date, start_time, end_time)
                     VALUES('$movie_id', '$screen_id', '$show_date', '$start_time', '$end_time')";

    mysqli_query($connection, $insert_query);

    echo "<script>
        alert('Show Added Successfully');
        window.location='manage-shows.php';
    </script>";
}

$movie_query = "SELECT * FROM movies";
$movie_result = mysqli_query($connection, $movie_query);

$screen_query = "SELECT * FROM screens";
$screen_result = mysqli_query($connection, $screen_query);
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h4 class="text-white mb-4">Add Show</h4>

        <form method="POST">
            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label text-white">Select Movie</label>
                    <select name="movie_id" class="form-control bg-dark text-white border-0" required>
                        <option value="">Choose Movie</option>
                        <?php while($movie = mysqli_fetch_array($movie_result)){ ?>
                            <option value="<?php echo $movie['movie_id']; ?>">
                                <?php echo $movie['title']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Select Screen</label>
                    <select name="screen_id" class="form-control bg-dark text-white border-0" required>
                        <option value="">Choose Screen</option>
                        <?php while($screen = mysqli_fetch_array($screen_result)){ ?>
                            <option value="<?php echo $screen['screen_id']; ?>">
                                <?php echo $screen['screen_name']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Show Date</label>
                    <input type="date" name="show_date" class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Start Time</label>
                    <input type="time" name="start_time" class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">End Time</label>
                    <input type="time" name="end_time" class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-12">
                    <button type="submit" name="add_show" class="btn btn-primary">
                        Add Show
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>

<?php include('./base/footer.php'); ?>