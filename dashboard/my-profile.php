<?php

include('./base/header.php');


if(!isset($_SESSION['user_id'])){

    header("Location: signin.php");
    exit();

}


$user_id = $_SESSION['user_id'];


$user_query = "SELECT * FROM users
               WHERE user_id = '$user_id'";

$user_result = mysqli_query($connection, $user_query);

$user = mysqli_fetch_assoc($user_result);

?>

<div class="container-fluid pt-4 px-4">

    <div class="bg-secondary rounded p-4">

        <div class="d-flex align-items-center justify-content-between mb-4">

            <h4 class="mb-0 text-white">
                My Profile
            </h4>

            <a href="edit-profile.php"
               class="btn btn-primary">

                Edit Profile

            </a>

        </div>

        <div class="row g-4">

            <div class="col-sm-12 col-xl-6">

                <div class="bg-dark rounded h-100 p-4">

                    <!-- NAME -->

                    <div class="mb-3">

                        <label class="form-label text-white">

                            Full Name

                        </label>

                        <input type="text"
                               class="form-control"
                               value="<?php echo $user['name']; ?>"
                               readonly>

                    </div>

                    <!-- EMAIL -->

                    <div class="mb-3">

                        <label class="form-label text-white">

                            Email Address

                        </label>

                        <input type="text"
                               class="form-control"
                               value="<?php echo $user['email']; ?>"
                               readonly>

                    </div>

                    <!-- PHONE -->

                    <div class="mb-3">

                        <label class="form-label text-white">

                            Phone Number

                        </label>

                        <input type="text"
                               class="form-control"
                               value="<?php echo $user['phone']; ?>"
                               readonly>

                    </div>

                    <!-- ROLE -->

                    <div class="mb-3">

                        <label class="form-label text-white">

                            Role

                        </label>

                        <input type="text"
                               class="form-control"
                               value="<?php echo ucfirst($user['role']); ?>"
                               readonly>

                    </div>

                    <!-- STATUS -->

                    <div class="mb-3">

                        <label class="form-label text-white">

                            Status

                        </label>

                        <input type="text"
                               class="form-control"
                               value="<?php echo ucfirst($user['status']); ?>"
                               readonly>

                    </div>

                    <!-- CREATED DATE -->

                    <div class="mb-3">

                        <label class="form-label text-white">

                            Account Created

                        </label>

                        <input type="text"
                               class="form-control"
                               value="<?php echo $user['created_at']; ?>"
                               readonly>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include('./base/footer.php'); ?>