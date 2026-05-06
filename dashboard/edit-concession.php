<?php
include('./base/header.php');

$id = $_GET['id'];

$select_query = "SELECT * FROM concessions WHERE concession_id='$id'";
$result = mysqli_query($connection, $select_query);
$concession = mysqli_fetch_array($result);

if(isset($_POST['update_concession'])){

    $name  = $_POST['name'];
    $price = $_POST['price'];

    $update_query = "UPDATE concessions SET
                     name='$name',
                     price='$price'
                     WHERE concession_id='$id'";

    mysqli_query($connection, $update_query);

    echo "<script>
        alert('Concession Updated Successfully');
        window.location='manage-concessions.php';
    </script>";
}
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <h4 class="text-white mb-4">Edit Concession</h4>

        <form method="POST">
            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label text-white">Concession Name</label>
                    <input type="text" name="name"
                           value="<?php echo $concession['name']; ?>"
                           class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Price</label>
                    <input type="number" name="price"
                           value="<?php echo $concession['price']; ?>"
                           class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-12">
                    <button type="submit" name="update_concession" class="btn btn-warning">
                        Update Concession
                    </button>
                </div>

            </div>
        </form>

    </div>
</div>

<?php include('./base/footer.php'); ?>