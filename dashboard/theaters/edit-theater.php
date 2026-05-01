<?php include("../base/header.php"); ?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h4 class="mb-4 text-white">Edit Theater</h4>

        <form action="" method="POST">
            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label text-white">Theater Name</label>
                    <input type="text" class="form-control bg-dark text-white" placeholder="Enter Theater Name">
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Location</label>
                    <input type="text" class="form-control bg-dark text-white" placeholder="Enter Theater Location">
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Total Screens</label>
                    <input type="number" class="form-control bg-dark text-white" placeholder="Enter Total Screens">
                </div>

                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary">
                        Update Theater
                    </button>

                    <a href="theaters.php" class="btn btn-secondary">
                        Cancel
                    </a>
                </div>

            </div>
        </form>
    </div>
</div>

<?php include("../base/footer.php"); ?>