<?php
include('./base/header.php');

$id = $_GET['id'];

$select_query = "SELECT * FROM seat_categories
WHERE category_id='$id'";

$result = mysqli_query($connection, $select_query);

$category = mysqli_fetch_array($result);

if(isset($_POST['update_category'])){

    $category_name  = $_POST['category_name'];
    $category_price = $_POST['category_price'];
    $description    = $_POST['description'];

    $update_query = "UPDATE seat_categories SET

    category_name='$category_name',
    category_price='$category_price',
    description='$description'

    WHERE category_id='$id'";

    mysqli_query($connection, $update_query);

    echo "<script>

        alert('Seat Category Updated Successfully');

        window.location='manage-seat-categories.php';

    </script>";
}
?>

<div class="container-fluid pt-4 px-4">

    <div class="bg-secondary rounded p-4">

        <h4 class="text-white mb-4">
            Edit Seat Category
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

                        <option value="Gold"
                        <?php
                        if($category['category_name']=='Gold')
                        echo 'selected';
                        ?>>
                            Gold
                        </option>

                        <option value="Platinum"
                        <?php
                        if($category['category_name']=='Platinum')
                        echo 'selected';
                        ?>>
                            Platinum
                        </option>

                        <option value="Box"
                        <?php
                        if($category['category_name']=='Box')
                        echo 'selected';
                        ?>>
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

                           value="<?php
                           echo $category['category_price'];
                           ?>"

                           class="form-control bg-dark text-white border-0"

                           required>

                </div>

                <!-- DESCRIPTION -->
                <div class="col-md-4">

                    <label class="form-label text-white">
                        Description
                    </label>

                    <input type="text"
                           name="description"

                           value="<?php
                           echo $category['description'];
                           ?>"

                           class="form-control bg-dark text-white border-0"

                           required>

                </div>

                <!-- BUTTON -->
                <div class="col-12">

                    <button type="submit"
                            name="update_category"
                            class="btn btn-warning">

                        Update Category

                    </button>

                </div>

            </div>

        </form>

    </div>

</div>

<?php include('./base/footer.php'); ?>