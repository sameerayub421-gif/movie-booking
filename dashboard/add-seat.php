<?php
include('./base/header.php');

if(isset($_POST['add_seat'])){

    $screen_id    = $_POST['screen_id'];
    $seat_number  = $_POST['seat_number'];
    $category_id  = $_POST['category_id'];

    $insert_query = "INSERT INTO seats(screen_id, seat_number, category_id)
                     VALUES('$screen_id', '$seat_number', '$category_id')";

    mysqli_query($connection, $insert_query);

    echo "<script>
        alert('Seat Added Successfully');
        window.location='manage-seats.php';
    </script>";
}

$screen_query = "SELECT * FROM screens";
$screen_result = mysqli_query($connection, $screen_query);

$category_query = "SELECT * FROM seat_categories";
$category_result = mysqli_query($connection, $category_query);
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h4 class="text-white mb-4">Add Seat</h4>

        <form method="POST">
            <div class="row g-3">

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
                    <label class="form-label text-white">Seat Number</label>
                    <input type="text" name="seat_number" class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Seat Category</label>
                    <select name="category_id" class="form-control bg-dark text-white border-0" required>
                        <option value="">Choose Category</option>
                        <?php while($category = mysqli_fetch_array($category_result)){ ?>
                            <option value="<?php echo $category['category_id']; ?>">
                                <?php echo $category['category_name']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" name="add_seat" class="btn btn-primary">
                        Add Seat
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>

<?php include('./base/footer.php'); ?>