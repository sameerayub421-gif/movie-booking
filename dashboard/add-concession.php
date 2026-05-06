<?php
include('./base/header.php');

if(isset($_POST['add_concession'])){

    $name  = $_POST['name'];
    $price = $_POST['price'];

    $insert_query = "INSERT INTO concessions(name, price)
                     VALUES('$name', '$price')";

    mysqli_query($connection, $insert_query);

    echo "<script>
        alert('Concession Added Successfully');
        window.location='manage-concessions.php';
    </script>";
}
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <h4 class="text-white mb-4">Add Concession</h4>

        <form method="POST">
            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label text-white">Concession Name</label>
                    <input type="text" name="name"
                           class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Price</label>
                    <input type="number" name="price"
                           class="form-control bg-dark text-white border-0" required>
                </div>

                <div class="col-12">
                    <button type="submit" name="add_concession" class="btn btn-primary">
                        Add Concession
                    </button>
                </div>

            </div>
        </form>

    </div>
</div>

<?php include('./base/footer.php'); ?>