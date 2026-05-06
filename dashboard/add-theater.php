<?php
include('./base/header.php');

if(isset($_POST['add_theater'])){

    $name          = $_POST['name'];
    $location      = $_POST['location'];
    $total_screens = $_POST['total_screens'];

    $insert_query = "INSERT INTO theaters(name, location, total_screens)
              VALUES('$name', '$location', '$total_screens')";

    mysqli_query($connection, $insert_query);

    echo "<script>
        alert('Theater Added Successfully');
        window.location='manage-theaters.php';
    </script>";
}
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h4 class="text-white mb-4">Add Theater</h4>

        <form method="POST">
            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label text-white">Theater Name</label>
                    <input type="text" name="name" class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Location</label>
                    <input type="text" name="location" class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Total Screens</label>
                    <input type="number" name="total_screens" class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-12">
                    <button type="submit" name="add_theater" class="btn btn-primary">
                        Add Theater
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>

<?php include('./base/footer.php'); ?>