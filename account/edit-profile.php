<?php
include('../base/header.php');


$user_id = $_SESSION['user_id'];


$user_query = "SELECT * FROM users
               WHERE user_id = '$user_id'";

$user_result = mysqli_query($connection, $user_query);

$user = mysqli_fetch_assoc($user_result);


if(isset($_POST['update_profile'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $update_query = "UPDATE users SET

    name = '$name',
    email = '$email',
    phone = '$phone'

    WHERE user_id = '$user_id'";

    $update_result = mysqli_query($connection, $update_query);

    if($update_result){

        echo "<script>

        alert('Profile Updated Successfully');

        window.location.href='my-profile.php';

        </script>";

    }else{

        echo mysqli_error($connection);
    }
}

?>

<style>

body{
    background:#000;
    color:#fff;
    font-family:Arial;
}

.edit-container{
    width:90%;
    margin:auto;
    padding:50px 0;
}

.edit-box{
    background:#111;
    border:2px solid #E50914;
    border-radius:10px;
    padding:40px;
}

.edit-title{
    text-align:center;
    margin-bottom:40px;
}

.edit-title h1{
    color:#E50914;
}

.form-group{
    margin-bottom:25px;
}

.form-group label{
    display:block;
    margin-bottom:10px;
    color:#E50914;
    font-weight:bold;
}

.form-control{
    width:100%;
    padding:12px;
    background:#222;
    border:1px solid #555;
    border-radius:5px;
    color:#fff;
}

.form-control:focus{
    outline:none;
    border-color:#E50914;
}

.update-btn{
    background:#E50914;
    color:#fff;
    border:none;
    padding:12px 25px;
    border-radius:5px;
    cursor:pointer;
    transition:0.3s;
}

.update-btn:hover{
    background:#b20710;
}

</style>

<div class="edit-container">

    <div class="edit-box">

        <div class="edit-title">

            <h1>
                Edit Profile
            </h1>

            <p>
                Update Your Account Information
            </p>

        </div>

        <form method="POST">

            <!-- NAME -->

            <div class="form-group">

                <label>
                    Full Name
                </label>

                <input type="text"
                       name="name"
                       class="form-control"
                       value="<?php echo $user['name']; ?>"
                       required>

            </div>

            <!-- EMAIL -->

            <div class="form-group">

                <label>
                    Email Address
                </label>

                <input type="email"
                       name="email"
                       class="form-control"
                       value="<?php echo $user['email']; ?>"
                       required>

            </div>

            <!-- PHONE -->

            <div class="form-group">

                <label>
                    Phone Number
                </label>

                <input type="text"
                       name="phone"
                       class="form-control"
                       value="<?php echo $user['phone']; ?>"
                       required>

            </div>

            <button type="submit"
                    name="update_profile"
                    class="update-btn">

                Update Profile

            </button>

        </form>

    </div>

</div>

<?php
include('../base/footer.php');
?>