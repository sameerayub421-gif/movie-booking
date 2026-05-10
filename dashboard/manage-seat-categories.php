<?php
include('./base/header.php');

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $delete_query = "DELETE FROM seat_categories WHERE category_id='$id'";
    mysqli_query($connection, $delete_query);

    echo "<script>
        alert('Category Deleted Successfully');
        window.location='manage-seat-categories.php';
    </script>";
}

$select_query = "SELECT * FROM seat_categories";
$result = mysqli_query($connection, $select_query);

$count = 1;
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="text-white mb-0">Manage Seat Categories</h4>

            <a href="add-seat-category.php" class="btn btn-primary">
                <i class="fa fa-plus me-2"></i>Add Category
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-white align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th width="170">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php while($category = mysqli_fetch_array($result)){ ?>

                    <tr>
                        <td><?php echo $count++; ?></td>

                        <td>
                            <?php echo $category['category_name']; ?>
                        </td>

                        <td>
                            Rs <?php echo number_format($category['category_price']); ?>
                        </td>

                        <td>
                            <?php echo $category['description']; ?>
                        </td>

                        <td>
                            <a href="edit-seat-category.php?id=<?php echo $category['category_id']; ?>" 
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <a href="manage-seat-categories.php?delete=<?php echo $category['category_id']; ?>" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Delete this category?')">
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