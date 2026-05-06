<?php
include('./base/header.php');

$id = $_GET['id'];

$select_query = "SELECT * FROM seats WHERE seat_id='$id'";
$result = mysqli_query($connection, $select_query);
$seat = mysqli_fetch_array($result);

$screen_query = "SELECT * FROM screens";
$screen_result = mysqli_query($connection, $screen_query);

$category_query = "SELECT * FROM seat_categories";
$category_result = mysqli_query($connection, $category_query);

if(isset($_POST['update_seat'])){

    $screen_id   = $_POST['screen_id'];
    $seat_number = $_POST['seat_number'];
    $category_id = $_POST['category_id'];

    $update_query = "UPDATE seats SET
                     screen_id='$screen_id',
                     seat_number='$seat_number',
                     category_id='$category_id'
                     WHERE seat_id='$id'";

    mysqli_query($connection, $update_query);

    echo "<script>
        alert('Seat Updated Successfully');
        window.location='manage-seats.php';
    </script>";
}
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h4 class="text-white mb-4">Edit Seat</h4>

        <form method="POST">
            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label text-white">Select Screen</label>
                    <select name="screen_id" class="form-control bg-dark text-white border-0" required>
                        <?php while($screen = mysqli_fetch_array($screen_result)){ ?>
                            <option value="<?php echo $screen['screen_id']; ?>"
                                <?php if($screen['screen_id'] == $seat['screen_id']) echo 'selected'; ?>>
                                <?php echo $screen['screen_name']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Seat Number</label>
                    <input type="text" name="seat_number"
                           value="<?php echo $seat['seat_number']; ?>"
                           class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Seat Category</label>
                    <select name="category_id" class="form-control bg-dark text-white border-0" required>
                        <?php while($category = mysqli_fetch_array($category_result)){ ?>
                            <option value="<?php echo $category['category_id']; ?>"
                                <?php if($category['category_id'] == $seat['category_id']) echo 'selected'; ?>>
                                <?php echo $category['category_name']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" name="update_seat" class="btn btn-warning">
                        Update Seat
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>

<?php include('./base/footer.php'); ?>