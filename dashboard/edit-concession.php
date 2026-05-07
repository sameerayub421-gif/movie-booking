<?php
include('./base/header.php');

$id = $_GET['id'];

$select_query = "SELECT * FROM concessions WHERE concession_id='$id'";
$result = mysqli_query($connection, $select_query);

$concession = mysqli_fetch_array($result);

if(isset($_POST['update_concession'])){

    $category = $_POST['category'];
    $age_min = $_POST['age_min'];
    $age_max = $_POST['age_max'];
    $discount = $_POST['discount'];

    $update_query = "UPDATE concessions SET
                     category='$category',
                     age_min='$age_min',
                     age_max='$age_max',
                     discount_percentage='$discount'
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

                    <label class="form-label text-white">
                        Category
                    </label>

                    <input type="text"
                           name="category"
                           value="<?php echo $concession['category']; ?>"
                           class="form-control bg-dark text-white border-0"
                           required>

                </div>

                <div class="col-md-3">

                    <label class="form-label text-white">
                        Minimum Age
                    </label>

                    <input type="number"
                           name="age_min"
                           value="<?php echo $concession['age_min']; ?>"
                           class="form-control bg-dark text-white border-0"
                           required>

                </div>

                <div class="col-md-3">

                    <label class="form-label text-white">
                        Maximum Age
                    </label>

                    <input type="number"
                           name="age_max"
                           value="<?php echo $concession['age_max']; ?>"
                           class="form-control bg-dark text-white border-0"
                           required>

                </div>

                <div class="col-md-6">

                    <label class="form-label text-white">
                        Discount Percentage
                    </label>

                    <input type="number"
                           name="discount"
                           value="<?php echo $concession['discount_percentage']; ?>"
                           class="form-control bg-dark text-white border-0"
                           required>

                </div>

                <div class="col-12">

                    <button type="submit"
                            name="update_concession"
                            class="btn btn-warning">

                        Update Concession

                    </button>

                </div>

            </div>

        </form>

    </div>

</div>

<?php include('./base/footer.php'); ?>