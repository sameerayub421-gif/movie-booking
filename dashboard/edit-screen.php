<?php
include('./base/header.php');

$id = $_GET['id'];

$select_query = "SELECT * FROM screens WHERE screen_id='$id'";
$result = mysqli_query($connection, $select_query);
$screen = mysqli_fetch_array($result);

$theater_query = "SELECT * FROM theaters";
$theater_result = mysqli_query($connection, $theater_query);

if(isset($_POST['update_screen'])){

    $theater_id  = $_POST['theater_id'];
    $screen_name = $_POST['screen_name'];
    $total_seats = $_POST['total_seats'];

    $update_query = "UPDATE screens SET
                     theater_id='$theater_id',
                     screen_name='$screen_name',
                     total_seats='$total_seats'
                     WHERE screen_id='$id'";

    mysqli_query($connection, $update_query);

    echo "<script>
        alert('Screen Updated Successfully');
        window.location='manage-screens.php';
    </script>";
}
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h4 class="text-white mb-4">Edit Screen</h4>

        <form method="POST">
            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label text-white">Select Theater</label>
                    <select name="theater_id" class="form-control bg-dark text-white border-0" required>

                        <?php while($theater = mysqli_fetch_array($theater_result)){ ?>
                            <option value="<?php echo $theater['theater_id']; ?>"
                                <?php if($theater['theater_id'] == $screen['theater_id']) echo 'selected'; ?>>
                                <?php echo $theater['name']; ?>
                            </option>
                        <?php } ?>

                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Screen Name</label>
                    <input type="text" name="screen_name"
                           value="<?php echo $screen['screen_name']; ?>"
                           class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Total Seats</label>
                    <input type="number" name="total_seats"
                           value="<?php echo $screen['total_seats']; ?>"
                           class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-12">
                    <button type="submit" name="update_screen" class="btn btn-warning">
                        Update Screen
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>

<?php include('./base/footer.php'); ?>