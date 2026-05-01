<?php include('../base/header.php'); ?>

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
                        <th>Poster</th>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Language</th>
                        <th>Duration</th>
                        <th>Release Date</th>
                        <th>Trailer</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img src="img/movie1.jpg" width="60" class="rounded"></td>
                        <td>Avengers Endgame</td>
                        <td>Action / Sci-Fi</td>
                        <td>English</td>
                        <td>180 min</td>
                        <td>2026-05-10</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info">View</a>
                        </td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <a href="edit-movies.php?id=1" class="btn btn-sm btn-warning">Edit</a>
                            <a href="delete_movie.php?id=1" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td><img src="img/movie2.jpg" width="60" class="rounded"></td>
                        <td>Batman</td>
                        <td>Action</td>
                        <td>English</td>
                        <td>165 min</td>
                        <td>2026-06-15</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info">View</a>
                        </td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <a href="edit_movie.php?id=2" class="btn btn-sm btn-warning">Edit</a>
                            <a href="delete_movie.php?id=2" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('../base/footer.php'); ?>
