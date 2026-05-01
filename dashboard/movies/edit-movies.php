<?php include("../base/header.php"); ?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h4 class="mb-4 text-white">Edit Movie</h4>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label text-white">Movie Title</label>
                    <input type="text" class="form-control bg-dark text-white" placeholder="Enter Movie Title">
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Duration (Minutes)</label>
                    <input type="number" class="form-control bg-dark text-white" placeholder="Enter Duration">
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Release Date</label>
                    <input type="date" class="form-control bg-dark text-white">
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Language</label>
                    <input type="text" class="form-control bg-dark text-white" placeholder="Enter Language">
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Genre</label>
                    <input type="text" class="form-control bg-dark text-white" placeholder="Enter Genre">
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Trailer URL</label>
                    <input type="url" class="form-control bg-dark text-white" placeholder="Enter Trailer URL">
                </div>

                <div class="col-12">
                    <label class="form-label text-white">Description</label>
                    <textarea rows="5" class="form-control bg-dark text-white" placeholder="Enter Movie Description"></textarea>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Current Poster</label><br>
                    <img src="../../uploads/movies/default.jpg" width="120" class="rounded border">
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Change Poster</label>
                    <input type="file" class="form-control bg-dark text-white">
                </div>

                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary">
                        Update Movie
                    </button>

                    <a href="manage-movies.php" class="btn btn-secondary">
                        Cancel
                    </a>
                </div>

            </div>
        </form>
    </div>
</div>

<?php include("../base/footer.php"); ?>