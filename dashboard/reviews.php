<?php
include('./base/header.php');

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $delete_query = "DELETE FROM reviews WHERE review_id='$id'";
    mysqli_query($connection, $delete_query);

    echo "<script>
        alert('Review Deleted Successfully');
        window.location='reviews.php';
    </script>";
}

$select_query = "SELECT reviews.*, users.name, movies.title
                 FROM reviews
                 INNER JOIN users ON reviews.user_id = users.user_id
                 INNER JOIN movies ON reviews.movie_id = movies.movie_id";

$result = mysqli_query($connection, $select_query);

$count = 1;
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <h4 class="text-white mb-4">Movie Reviews</h4>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-white align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User Name</th>
                        <th>Movie</th>
                        <th>Rating</th>
                        <th>Review</th>
                        <th>Date</th>
                        <th width="120">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php while($review = mysqli_fetch_array($result)){ ?>

                    <tr>
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $review['name']; ?></td>
                        <td><?php echo $review['title']; ?></td>
                        <td><?php echo $review['rating']; ?></td>
                        <td><?php echo $review['review_text']; ?></td>
                        <td><?php echo $review['review_date']; ?></td>
                        <td>
                            <a href="reviews.php?delete=<?php echo $review['review_id']; ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Delete this review?')">
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