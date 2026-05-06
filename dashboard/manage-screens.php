<?php
include('./base/header.php');

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $delete_query = "DELETE FROM screens WHERE screen_id='$id'";
    mysqli_query($connection, $delete_query);

    echo "<script>
        alert('Screen Deleted Successfully');
        window.location='manage-screens.php';
    </script>";
}

$select_query = "SELECT screens.*, theaters.name 
                 FROM screens
                 INNER JOIN theaters ON screens.theater_id = theaters.theater_id";

$result = mysqli_query($connection, $select_query);

$count = 1;
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="text-white mb-0">Manage Screens</h4>

            <a href="add-screen.php" class="btn btn-primary">
                <i class="fa fa-plus me-2"></i>Add Screen
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-white align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Theater Name</th>
                        <th>Screen Name</th>
                        <th>Total Seats</th>
                        <th width="170">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php while($screen = mysqli_fetch_array($result)){ ?>

                    <tr>
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $screen['name']; ?></td>
                        <td><?php echo $screen['screen_name']; ?></td>
                        <td><?php echo $screen['total_seats']; ?></td>
                        <td>
                            <a href="edit-screen.php?id=<?php echo $screen['screen_id']; ?>" 
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <a href="manage-screens.php?delete=<?php echo $screen['screen_id']; ?>" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Delete this screen?')">
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

<?php include("./base/footer.php"); ?>