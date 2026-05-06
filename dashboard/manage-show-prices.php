<?php
include('./base/header.php');

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $delete_query = "DELETE FROM show_prices WHERE price_id='$id'";
    mysqli_query($connection, $delete_query);

    echo "<script>
        alert('Show Price Deleted Successfully');
        window.location='manage-show-prices.php';
    </script>";
}

$select_query = "SELECT show_prices.*, seat_categories.category_name
                 FROM show_prices
                 INNER JOIN seat_categories 
                 ON show_prices.category_id = seat_categories.category_id";

$result = mysqli_query($connection, $select_query);

$count = 1;
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="text-white mb-0">Manage Show Prices</h4>

            <a href="add-show-price.php" class="btn btn-primary">
                <i class="fa fa-plus me-2"></i>Add Show Price
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-white align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Show ID</th>
                        <th>Seat Category</th>
                        <th>Price</th>
                        <th width="170">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php while($price = mysqli_fetch_array($result)){ ?>

                    <tr>
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $price['show_id']; ?></td>
                        <td><?php echo $price['category_name']; ?></td>
                        <td><?php echo $price['price']; ?></td>
                        <td>
                            <a href="edit-show-price.php?id=<?php echo $price['price_id']; ?>" 
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <a href="manage-show-prices.php?delete=<?php echo $price['price_id']; ?>" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Delete this price?')">
                                Delete
                            </a>
                        </td>
                    </tr>

                    <?php } ?>

                </tbody>

            </table>
        </div>

    </div>
</div>

<?php include('./base/footer.php'); ?>