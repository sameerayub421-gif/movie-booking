<?php
include('./base/header.php');

if(isset($_POST['add_price'])){

    $show_id     = $_POST['show_id'];
    $category_id = $_POST['category_id'];
    $price       = $_POST['price'];

    $insert_query = "INSERT INTO show_prices(show_id, category_id, price)
                     VALUES('$show_id', '$category_id', '$price')";

    mysqli_query($connection, $insert_query);

    echo "<script>
        alert('Show Price Added Successfully');
        window.location='manage-show-prices.php';
    </script>";
}

$show_query = "SELECT * FROM shows";
$show_result = mysqli_query($connection, $show_query);

$category_query = "SELECT * FROM seat_categories";
$category_result = mysqli_query($connection, $category_query);
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h4 class="text-white mb-4">Add Show Price</h4>

        <form method="POST">
            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label text-white">Select Show</label>
                    <select name="show_id" class="form-control bg-dark text-white border-0" required>
                        <option value="">Choose Show</option>
                        <?php while($show = mysqli_fetch_array($show_result)){ ?>
                            <option value="<?php echo $show['show_id']; ?>">
                                Show <?php echo $show['show_id']; ?>
                            </option>
                        <?php } ?>
                    </select>
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

                <div class="col-md-6">
                    <label class="form-label text-white">Price</label>
                    <input type="number" name="price" class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-12">
                    <button type="submit" name="add_price" class="btn btn-primary">
                        Add Price
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>

<?php include('./base/footer.php'); ?>