<?php
include('./base/header.php');

if(isset($_POST['signup'])){

    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $password = $_POST['password'];

    $insert_query = "INSERT INTO users(name, email, phone, password)
                     VALUES('$name', '$email', '$phone', '$password')";

    mysqli_query($conn, $insert_query);

    echo "<script>
        alert('Account Created Successfully');
        window.location='sign.php';
    </script>";
}
?>

<div class="container-fluid position-relative d-flex p-0">

    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">

                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Cinema Admin</h3>
                        <h3>Sign Up</h3>
                    </div>

                    <form method="POST">

                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                            <label>Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                            <label>Email Address</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                            <label>Phone Number</label>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                            <label>Password</label>
                        </div>

                        <button type="submit" name="signup" class="btn btn-primary py-3 w-100 mb-4">
                            Sign Up
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include('./base/footer.php'); ?>
