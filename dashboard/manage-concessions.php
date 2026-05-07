<?php
include('./base/header.php');

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $delete_query = "DELETE FROM concessions WHERE concession_id='$id'";
    mysqli_query($connection, $delete_query);

    echo "<script>
        alert('Concession Deleted Successfully');
        window.location='manage-concessions.php';
    </script>";
}

$select_query = "SELECT * FROM concessions";
$result = mysqli_query($connection, $select_query);

$count = 1;
?>

<div class="container-fluid pt-4 px-4">

    <div class="bg-secondary rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h4 class="text-white mb-0">Manage Concessions</h4>

            <a href="add-concession.php" class="btn btn-primary">
                <i class="fa fa-plus me-2"></i>Add Concession
            </a>

        </div>

        <div class="table-responsive">

            <table class="table table-bordered table-hover text-white align-middle">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Minimum Age</th>
                        <th>Maximum Age</th>
                        <th>Discount %</th>
                        <th width="170">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php while($concession = mysqli_fetch_array($result)){ ?>

                    <tr>

                        <td><?php echo $count++; ?></td>
                        <td><?php echo $concession['category']; ?></td>
                        <td><?php echo $concession['age_min']; ?></td>
                        <td><?php echo $concession['age_max']; ?></td>
                        <td><?php echo $concession['discount_percentage']; ?>%</td>
                        <td>


                            <a href="edit-concession.php?id=<?php echo $concession['concession_id']; ?>"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <a href="manage-concessions.php?delete=<?php echo $concession['concession_id']; ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Delete this concession?')">
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