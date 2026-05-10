<?php
include('./base/header.php');

if(isset($_POST['add_category'])){

    $category_name  = $_POST['category_name'];
    $category_price = $_POST['category_price'];
    $description    = $_POST['description'];

    $insert_query = "INSERT INTO seat_categories
    (
        category_name,
        category_price,
        description
    )

    VALUES
    (
        '$category_name',
        '$category_price',
        '$description'
    )";

    mysqli_query($connection, $insert_query);

    echo "<script>
        alert('Seat Category Added Successfully');
        window.location='manage-seat-categories.php';
    </script>";
}
?>

<div class="container-fluid pt-4 px-4">

    <div class="bg-secondary rounded p-4">

        <h4 class="text-white mb-4">
            Add Seat Category
        </h4>

        <form method="POST">

            <div class="row g-3">

                <!-- CATEGORY -->
                <div class="col-md-4">

                    <label class="form-label text-white">
                        Category Name
                    </label>

                    <select name="category_name"
                            class="form-control bg-dark text-white border-0"
                            required>

                        <option value="">
                            Choose Category
                        </option>

                        <option value="Gold">
                            Gold
                        </option>

                        <option value="Platinum">
                            Platinum
                        </option>

                        <option value="Box">
                            Box
                        </option>

                    </select>

                </div>

                <!-- PRICE -->
                <div class="col-md-4">

                    <label class="form-label text-white">
                        Category Price
                    </label>

                    <input type="number"
                           name="category_price"
                           class="form-control bg-dark text-white border-0"
                           placeholder="Enter Price"
                           required>

                </div>

                <!-- DESCRIPTION -->
                <div class="col-md-4">

                    <label class="form-label text-white">
                        Description
                    </label>

                    <input type="text"
                           name="description"
                           class="form-control bg-dark text-white border-0"
                           placeholder="Enter Description"
                           required>

                </div>

                <!-- BUTTON -->
                <div class="col-12">

                    <button type="submit"
                            name="add_category"
                            class="btn btn-primary">

                        Add Category

                    </button>

                </div>

            </div>

        </form>

    </div>

</div>

<?php include('./base/footer.php'); ?>