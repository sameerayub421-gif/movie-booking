<?php include("../base/header.php"); ?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h4 class="mb-4 text-white">Edit Screen</h4>

        <form action="" method="POST">
            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label text-white">Select Theater</label>
                    <select class="form-select bg-dark text-white">
                        <option>Select Theater</option>
                        <option>Cinepax Mega Mall</option>
                        <option>Nueplex Cinema</option>
                        <option>Universal Cinema</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Screen Name</label>
                    <input type="text" class="form-control bg-dark text-white" placeholder="Enter Screen Name">
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Total Seats</label>
                    <input type="number" class="form-control bg-dark text-white" placeholder="Enter Total Seats">
                </div>

                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary">
                        Update Screen
                    </button>

                    <a href="screens.php" class="btn btn-secondary">
                        Cancel
                    </a>
                </div>

            </div>
        </form>
    </div>
</div>

<?php include("../base/footer.php"); ?>