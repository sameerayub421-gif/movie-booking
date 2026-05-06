<?php
include('./base/header.php');

if(isset($_POST['add_screen'])){

    $theater_id   = $_POST['theater_id'];
    $screen_name  = $_POST['screen_name'];
    $total_seats  = $_POST['total_seats'];

    $insert_query = "INSERT INTO screens(theater_id, screen_name, total_seats)
                     VALUES('$theater_id', '$screen_name', '$total_seats')";

    mysqli_query($connection, $insert_query);

    echo "<script>
        alert('Screen Added Successfully');
        window.location='manage-screens.php';
    </script>";
}

$theater_query = "SELECT * FROM theaters";
$theater_result = mysqli_query($connection, $theater_query);
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h4 class="text-white mb-4">Add Screen</h4>

        <form method="POST">
            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label text-white">Select Theater</label>
                    <select name="theater_id" class="form-control bg-dark text-white border-0" required>
                        <option value="">Choose Theater</option>

                        <?php while($theater = mysqli_fetch_array($theater_result)){ ?>
                            <option value="<?php echo $theater['theater_id']; ?>">
                                <?php echo $theater['name']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Screen Name</label>
                    <input type="text" name="screen_name" class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Total Seats</label>
                    <input type="number" name="total_seats" class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-12">
                    <button type="submit" name="add_screen" class="btn btn-primary">
                        Add Screen
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>

<?php include('./base/footer.php'); ?>