<?php
include("./base/header.php");

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $delete_query = "DELETE FROM theaters WHERE theater_id='$id'";
    mysqli_query($connection, $delete_query);

    echo "<script>
        alert('Theater Deleted Successfully');
        window.location='manage-theaters.php';
    </script>";
}

$select_query = "SELECT * FROM theaters";
$result = mysqli_query($connection, $select_query);
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="text-white mb-0">Manage Theaters</h4>

            <a href="add-theater.php" class="btn btn-primary">
                <i class="fa fa-plus me-2"></i>Add Theater
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-white align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Theater Name</th>
                        <th>Location</th>
                        <th>Total Screens</th>
                        <th>Created At</th>
                        <th width="170">Action</th>
                    </tr>
                </thead>

                <tbody>

                <?php
                $count = 1;
                while($theater = mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $theater['name']; ?></td>
                        <td><?php echo $theater['location']; ?></td>
                        <td><?php echo $theater['total_screens']; ?></td>
                        <td><?php echo $theater['created_at']; ?></td>

                        <td>
                            <a href="edit-theater.php?id=<?php echo $theater['theater_id']; ?>" 
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <a href="manage-theaters.php?delete=<?php echo $theater['theater_id']; ?>"
                               onclick="return confirm('Delete this theater?')"
                               class="btn btn-danger btn-sm">
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