<?php
include('./base/header.php');

$id = $_GET['id'];

$select_query = "SELECT * FROM theaters WHERE theater_id='$id'";
$result = mysqli_query($connection, $select_query);
$theater = mysqli_fetch_array($result);

if(isset($_POST['update_theater'])){

    $name          = $_POST['name'];
    $location      = $_POST['location'];
    $total_screens = $_POST['total_screens'];

    $update_query = "UPDATE theaters SET
                name='$name',
                location='$location',
                total_screens='$total_screens'
                WHERE theater_id='$id'";

    mysqli_query($connection, $update_query);

    echo "<script>
        alert('Theater Updated Successfully');
        window.location='manage-theaters.php';
    </script>";
}
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h4 class="text-white mb-4">Edit Theater</h4>

        <form method="POST">
            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label text-white">Theater Name</label>
                    <input type="text" name="name"
                           value="<?php echo $theater['name']; ?>"
                           class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Location</label>
                    <input type="text" name="location"
                           value="<?php echo $theater['location']; ?>"
                           class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Total Screens</label>
                    <input type="number" name="total_screens"
                           value="<?php echo $theater['total_screens']; ?>"
                           class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-12">
                    <button type="submit" name="update_theater" class="btn btn-warning">
                        Update Theater
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>

<?php include('./base/footer.php'); ?>