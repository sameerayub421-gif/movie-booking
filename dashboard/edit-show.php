<?php
include('./base/header.php');

$id = $_GET['id'];

$select_query = "SELECT * FROM shows WHERE show_id='$id'";
$result = mysqli_query($connection, $select_query);
$show = mysqli_fetch_array($result);

$movie_query = "SELECT * FROM movies";
$movie_result = mysqli_query($connection, $movie_query);

$screen_query = "SELECT * FROM screens";
$screen_result = mysqli_query($connection, $screen_query);

if(isset($_POST['update_show'])){

    $movie_id   = $_POST['movie_id'];
    $screen_id  = $_POST['screen_id'];
    $show_date  = $_POST['show_date'];
    $start_time = $_POST['start_time'];
    $end_time   = $_POST['end_time'];

    $update_query = "UPDATE shows SET
                     movie_id='$movie_id',
                     screen_id='$screen_id',
                     show_date='$show_date',
                     start_time='$start_time',
                     end_time='$end_time'
                     WHERE show_id='$id'";

    mysqli_query($connection, $update_query);

    echo "<script>
        alert('Show Updated Successfully');
        window.location='manage-shows.php';
    </script>";
}
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h4 class="text-white mb-4">Edit Show</h4>

        <form method="POST">
            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label text-white">Select Movie</label>
                    <select name="movie_id" class="form-control bg-dark text-white border-0" required>
                        <?php while($movie = mysqli_fetch_array($movie_result)){ ?>
                            <option value="<?php echo $movie['movie_id']; ?>"
                                <?php if($movie['movie_id'] == $show['movie_id']) echo 'selected'; ?>>
                                <?php echo $movie['title']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Select Screen</label>
                    <select name="screen_id" class="form-control bg-dark text-white border-0" required>
                        <?php while($screen = mysqli_fetch_array($screen_result)){ ?>
                            <option value="<?php echo $screen['screen_id']; ?>"
                                <?php if($screen['screen_id'] == $show['screen_id']) echo 'selected'; ?>>
                                <?php echo $screen['screen_name']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Show Date</label>
                    <input type="date" name="show_date"
                           value="<?php echo $show['show_date']; ?>"
                           class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Start Time</label>
                    <input type="time" name="start_time"
                           value="<?php echo $show['start_time']; ?>"
                           class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">End Time</label>
                    <input type="time" name="end_time"
                           value="<?php echo $show['end_time']; ?>"
                           class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-12">
                    <button type="submit" name="update_show" class="btn btn-warning">
                        Update Show
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>

<?php include('./base/footer.php'); ?>