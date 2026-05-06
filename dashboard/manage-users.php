<?php
include('./base/header.php');

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $delete_query = "DELETE FROM users WHERE user_id='$id'";
    mysqli_query($connection, $delete_query);

    echo "<script>
        alert('User Deleted Successfully');
        window.location='manage-users.php';
    </script>";
}

$select_query = "SELECT * FROM users";
$result = mysqli_query($connection, $select_query);

$count = 1;
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="text-white mb-0">Manage Users</h4>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-white align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Password</th>
                        <th width="120">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php while($user = mysqli_fetch_array($result)){ ?>

                    <tr>
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['phone']; ?></td>
                        <td><?php echo $user['password']; ?></td>
                        <td>
                            <a href="manage-users.php?delete=<?php echo $user['user_id']; ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Delete this user?')">
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