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


if(isset($_POST['update_profile'])){

    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $password = $_POST['password'];

    $update_query = "UPDATE users SET

                     name = '$name',
                     email = '$email',
                     phone = '$phone',
                     password = '$password'

                     WHERE user_id = '$user_id'";

    $update_result = mysqli_query($connection, $update_query);

    if($update_result){

        echo "<script>

            alert('Profile Updated Successfully');

            window.location='my-profile.php';

        </script>";

    }else{

        echo "<script>

            alert('Profile Update Failed');

        </script>";

    }

}

?>

<div class="container-fluid pt-4 px-4">

    <div class="bg-secondary rounded p-4">

        <div class="d-flex align-items-center justify-content-between mb-4">

            <h4 class="mb-0 text-white">

                Edit Profile

            </h4>

        </div>

        <div class="row g-4">

            <div class="col-sm-12 col-xl-6">

                <div class="bg-dark rounded h-100 p-4">

                    <form method="POST">

                        <!-- NAME -->

                        <div class="mb-3">

                            <label class="form-label text-white">

                                Full Name

                            </label>

                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   value="<?php echo $user['name']; ?>"
                                   required>

                        </div>

                        <!-- EMAIL -->

                        <div class="mb-3">

                            <label class="form-label text-white">

                                Email Address

                            </label>

                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   value="<?php echo $user['email']; ?>"
                                   required>

                        </div>

                        <!-- PHONE -->

                        <div class="mb-3">

                            <label class="form-label text-white">

                                Phone Number

                            </label>

                            <input type="text"
                                   name="phone"
                                   class="form-control"
                                   value="<?php echo $user['phone']; ?>"
                                   required>

                        </div>

                        <!-- PASSWORD -->

                        <div class="mb-3">

                            <label class="form-label text-white">

                                Password

                            </label>

                            <input type="text"
                                   name="password"
                                   class="form-control"
                                   value="<?php echo $user['password']; ?>"
                                   required>

                        </div>

                        <!-- BUTTON -->

                        <button type="submit"
                                name="update_profile"
                                class="btn btn-primary">

                            Update Profile

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include('./base/footer.php'); ?>