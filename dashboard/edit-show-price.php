<?php
include('./base/header.php');

$id = $_GET['id'];

$select_query = "SELECT * FROM show_prices WHERE price_id='$id'";
$result = mysqli_query($connection, $select_query);
$price = mysqli_fetch_array($result);

$show_query = "SELECT * FROM shows";
$show_result = mysqli_query($connection, $show_query);

$category_query = "SELECT * FROM seat_categories";
$category_result = mysqli_query($connection, $category_query);

if(isset($_POST['update_price'])){

    $show_id     = $_POST['show_id'];
    $category_id = $_POST['category_id'];
    $new_price   = $_POST['price'];

    $update_query = "UPDATE show_prices SET
                     show_id='$show_id',
                     category_id='$category_id',
                     price='$new_price'
                     WHERE price_id='$id'";

    mysqli_query($connection, $update_query);

    echo "<script>
        alert('Show Price Updated Successfully');
        window.location='manage-show-prices.php';
    </script>";
}
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h4 class="text-white mb-4">Edit Show Price</h4>

        <form method="POST">
            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label text-white">Select Show</label>
                    <select name="show_id" class="form-control bg-dark text-white border-0" required>
                        <?php while($show = mysqli_fetch_array($show_result)){ ?>
                            <option value="<?php echo $show['show_id']; ?>"
                                <?php if($show['show_id'] == $price['show_id']) echo 'selected'; ?>>
                                Show <?php echo $show['show_id']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Seat Category</label>
                    <select name="category_id" class="form-control bg-dark text-white border-0" required>
                        <?php while($category = mysqli_fetch_array($category_result)){ ?>
                            <option value="<?php echo $category['category_id']; ?>"
                                <?php if($category['category_id'] == $price['category_id']) echo 'selected'; ?>>
                                <?php echo $category['category_name']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Price</label>
                    <input type="number" name="price"
                           value="<?php echo $price['price']; ?>"
                           class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-12">
                    <button type="submit" name="update_price" class="btn btn-warning">
                        Update Price
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>

<?php include('./base/footer.php'); ?>