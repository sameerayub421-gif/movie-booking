<?php
include('./base/header.php');

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $delete_query = "DELETE FROM movies WHERE movie_id='$id'";
    mysqli_query($connection, $delete_query);

    echo "<script>
        alert('Movie Deleted Successfully');
        window.location='manage-movies.php';
    </script>";
}

$select_query = "SELECT * FROM movies";
$result = mysqli_query($connection, $select_query);
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-0 text-white">Manage Movies</h4>
            <a href="add_movie.php" class="btn btn-primary">
                <i class="fa fa-plus me-2"></i>Add New Movie
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-white align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Language</th>
                        <th>Duration</th>
                        <th>Release Date</th>
                        <th>Poster</th>
                        <th>Trailer </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                $count = 1;
                while($movie = mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $movie['title']; ?></td>
                        <td><?php echo $movie['genre']; ?></td>
                        <td><?php echo $movie['language']; ?></td>
                        <td><?php echo $movie['duration']; ?> min</td>
                        <td><?php echo $movie['release_date']; ?></td>
                        <td><img src="uploads/<?php echo $movie['poster']; ?>" width="80"></td>
                        <td>
                            <a href="<?php echo $movie['trailer_url']; ?>" 
                               target="_blank" 
                               class="btn btn-sm btn-info">
                               View
                            </a>
                        </td>

                        <td>
                            <a href="edit-movies.php?id=<?php echo $movie['movie_id']; ?>" 
                               class="btn btn-sm btn-warning">
                               Edit
                            </a>

                            <a href="manage-movies.php?delete=<?php echo $movie['movie_id']; ?>"
                               onclick="return confirm('Are you sure you want to delete this movie?')"
                               class="btn btn-sm btn-danger">
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