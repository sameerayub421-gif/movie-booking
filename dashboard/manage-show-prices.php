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


$select_query = "SELECT 
show_prices.*,

movies.title,

seat_categories.category_name,
seat_categories.category_price,

shows.show_date,
shows.start_time,

theaters.name as theater_name

FROM show_prices

INNER JOIN shows
ON show_prices.show_id = shows.show_id

INNER JOIN movies
ON shows.movie_id = movies.movie_id

INNER JOIN screens
ON shows.screen_id = screens.screen_id

INNER JOIN theaters
ON screens.theater_id = theaters.theater_id

INNER JOIN seat_categories
ON show_prices.category_id = seat_categories.category_id

ORDER BY show_prices.price_id DESC";

$result = mysqli_query($connection, $select_query);

$count = 1;
?>

<div class="container-fluid pt-4 px-4">

    <div class="bg-secondary rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h4 class="text-white mb-0">
                Manage Show Prices
            </h4>

            <a href="add-show-price.php"
               class="btn btn-primary">

                <i class="fa fa-plus me-2"></i>
                Add Show Price

            </a>

        </div>

        <div class="table-responsive">

            <table class="table table-bordered table-hover text-white align-middle">

                <thead>

                    <tr>

                        <th>#</th>

                        <th>Movie</th>

                        <th>Theater</th>

                        <th>Show Date</th>

                        <th>Show Time</th>

                        <th>Seat Category</th>

                        <th>Category Price</th>

                        <th>Show Base Price</th>

                        <th>Final Price</th>

                        <th width="170">Action</th>

                    </tr>

                </thead>

                <tbody>

                    <?php while($price = mysqli_fetch_array($result)){ ?>

                    <?php
                    $final_price =
                    $price['price'] +
                    $price['category_price'];
                    ?>

                    <tr>

                        <td>
                            <?php echo $count++; ?>
                        </td>

                        <td>
                            <?php echo $price['title']; ?>
                        </td>

                        <td>
                            <?php echo $price['theater_name']; ?>
                        </td>

                        <td>
                            <?php echo $price['show_date']; ?>
                        </td>

                        <td>
                            <?php echo $price['start_time']; ?>
                        </td>

                        <td>
                            <?php echo $price['category_name']; ?>
                        </td>

                        <td>
                            Rs <?php echo number_format($price['category_price']); ?>
                        </td>

                        <td>
                            Rs <?php echo number_format($price['price']); ?>
                        </td>

                        <td>

                            <span class="badge bg-success p-2">

                                Rs <?php echo number_format($final_price); ?>

                            </span>

                        </td>

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