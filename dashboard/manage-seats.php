<?php
include('./base/header.php');

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $delete_query = "DELETE FROM seats WHERE seat_id='$id'";
    mysqli_query($connection, $delete_query);

    echo "<script>
        alert('Seat Deleted Successfully');
        window.location='manage-seats.php';
    </script>";
}

$select_query = "SELECT seats.*, screens.screen_name, seat_categories.category_name
                 FROM seats
                 INNER JOIN screens ON seats.screen_id = screens.screen_id
                 INNER JOIN seat_categories ON seats.category_id = seat_categories.category_id";

$result = mysqli_query($connection, $select_query);

$count = 1;
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="text-white mb-0">Manage Seats</h4>

            <a href="add-seat.php" class="btn btn-primary">
                <i class="fa fa-plus me-2"></i>Add Seat
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-white align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Screen Name</th>
                        <th>Seat Number</th>
                        <th>Category</th>
                        <th width="170">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php while($seat = mysqli_fetch_array($result)){ ?>

                    <tr>
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $seat['screen_name']; ?></td>
                        <td><?php echo $seat['seat_number']; ?></td>
                        <td><?php echo $seat['category_name']; ?></td>
                        <td>
                            <a href="edit-seat.php?id=<?php echo $seat['seat_id']; ?>" 
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <a href="manage-seats.php?delete=<?php echo $seat['seat_id']; ?>" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Delete this seat?')">
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