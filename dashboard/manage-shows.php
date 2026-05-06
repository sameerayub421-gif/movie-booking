<?php
include('./base/header.php');

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $delete_query = "DELETE FROM shows WHERE show_id='$id'";
    mysqli_query($connection, $delete_query);

    echo "<script>
        alert('Show Deleted Successfully');
        window.location='manage-shows.php';
    </script>";
}

$select_query = "SELECT shows.*, movies.title, theaters.name AS theater_name, screens.screen_name
                 FROM shows
                 INNER JOIN movies ON shows.movie_id = movies.movie_id
                 INNER JOIN theaters ON shows.theater_id = theaters.theater_id
                 INNER JOIN screens ON shows.screen_id = screens.screen_id";

$result = mysqli_query($connection, $select_query);
$count = 1;
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="text-white mb-0">Manage Shows</h4>

            <a href="add-show.php" class="btn btn-primary">
                <i class="fa fa-plus me-2"></i>Add Show
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-white align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Movie</th>
                        <th>Theater</th>
                        <th>Screen</th>
                        <th>Show Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th width="170">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while($show = mysqli_fetch_array($result)){ ?>

                    <tr>
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $show['title']; ?></td>
                        <td><?php echo $show['theater_name']; ?></td>
                        <td><?php echo $show['screen_name']; ?></td>
                        <td><?php echo $show['show_date']; ?></td>
                        <td><?php echo $show['start_time']; ?></td>
                        <td><?php echo $show['end_time']; ?></td>
                        <td>
                            <a href="edit-show.php?id=<?php echo $show['show_id']; ?>" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <a href="manage-shows.php?delete=<?php echo $show['show_id']; ?>" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Delete this show?')">
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