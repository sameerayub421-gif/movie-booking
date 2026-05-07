<?php
include('./base/header.php');

if(isset($_POST['add_concession'])){

    $category = $_POST['category'];
    $age_min  = $_POST['age_min'];
    $age_max  = $_POST['age_max'];
    $discount = $_POST['discount'];

    $insert_query = "INSERT INTO concessions
                     (category, age_min, age_max, discount_percentage)

                     VALUES
                     ('$category', '$age_min', '$age_max', '$discount')";

    mysqli_query($connection, $insert_query);

    echo "<script>
        alert('Concession Added Successfully');
        window.location='manage-concessions.php';
    </script>";
}
?>

<div class="container-fluid pt-4 px-4">

    <div class="bg-secondary rounded p-4">

        <h4 class="text-white mb-4">
            Add Concession
        </h4>

        <form method="POST">

            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label text-white">
                        Category
                    </label>

                    <input type="text"
                           name="category"
                           class="form-control bg-dark text-white border-0"
                           placeholder="Kids / Student"
                           required>
                </div>

                <div class="col-md-3">
                    <label class="form-label text-white">
                        Minimum Age
                    </label>

                    <input type="number"
                           name="age_min"
                           class="form-control bg-dark text-white border-0"
                           required>
                </div>

                <div class="col-md-3">
                    <label class="form-label text-white">
                        Maximum Age
                    </label>

                    <input type="number"
                           name="age_max"
                           class="form-control bg-dark text-white border-0"
                           required>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">
                        Discount Percentage
                    </label>

                    <input type="number"
                           name="discount"
                           class="form-control bg-dark text-white border-0"
                           placeholder="10"
                           required>
                </div>

                <div class="col-12">

                    <button type="submit"
                            name="add_concession"
                            class="btn btn-primary">

                        Add Concession
                    </button>

                </div>

            </div>

        </form>

    </div>

</div>

<?php include('./base/footer.php'); ?>