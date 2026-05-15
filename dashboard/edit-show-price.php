<?php
include('./base/header.php');

$id = $_GET['id'];


$select_query = "SELECT * FROM show_prices
WHERE price_id='$id'";

$result = mysqli_query($connection, $select_query);

$price = mysqli_fetch_array($result);


$show_query = "SELECT 
shows.*,
movies.title

FROM shows

INNER JOIN movies
ON shows.movie_id = movies.movie_id";

$show_result = mysqli_query($connection, $show_query);


$category_query = "SELECT * FROM seat_categories";

$category_result = mysqli_query($connection, $category_query);


if(isset($_POST['update_price'])){

    $show_id        = $_POST['show_id'];

    $category_id    = $_POST['category_id'];

    $extra_price    = $_POST['extra_price'];


    $show_price_query = "SELECT * FROM shows
    WHERE show_id='$show_id'";

    $show_price_result =
    mysqli_query($connection, $show_price_query);

    $show_data =
    mysqli_fetch_array($show_price_result);

    $show_price =
    $show_data['price'];


    $category_price_query = "SELECT * FROM seat_categories
    WHERE category_id='$category_id'";

    $category_price_result =
    mysqli_query($connection, $category_price_query);

    $category_data =
    mysqli_fetch_array($category_price_result);

    $category_price =
    $category_data['category_price'];


    $final_price =
    $show_price +
    $category_price +
    $extra_price;


    $update_query = "UPDATE show_prices SET

    show_id='$show_id',
    category_id='$category_id',
    price='$final_price'

    WHERE price_id='$id'";

    mysqli_query($connection, $update_query);

    echo "<script>

        alert('Show Price Updated Successfully');

        window.location='manage-show-prices.php';

    </script>";
}
?>

<div class="container-fluid pt-4 px-4">

    <div class="bg-secondary rounded p-4">

        <h4 class="text-white mb-4">

            Edit Show Price

        </h4>

        <form method="POST">

            <div class="row g-3">

                <!-- SHOW -->

                <div class="col-md-6">

                    <label class="form-label text-white">

                        Select Show

                    </label>

                    <select name="show_id"
                            id="show"
                            class="form-control bg-dark text-white border-0"
                            onchange="calculatePrice()"
                            required>

                        <?php while($show = mysqli_fetch_array($show_result)){ ?>

                        <option value="<?php echo $show['show_id']; ?>"

                            data-price="<?php echo $show['price']; ?>"

                            <?php
                            if($show['show_id'] == $price['show_id']){
                                echo 'selected';
                            }
                            ?>>

                            <?php echo $show['title']; ?>

                            -

                            Rs <?php echo $show['price']; ?>

                        </option>

                        <?php } ?>

                    </select>

                </div>

                <!-- CATEGORY -->

                <div class="col-md-6">

                    <label class="form-label text-white">

                        Seat Category

                    </label>

                    <select name="category_id"
                            id="category"
                            class="form-control bg-dark text-white border-0"
                            onchange="calculatePrice()"
                            required>

                        <?php while($category = mysqli_fetch_array($category_result)){ ?>

                        <option value="<?php echo $category['category_id']; ?>"

                            data-price="<?php echo $category['category_price']; ?>"

                            <?php
                            if($category['category_id'] == $price['category_id']){
                                echo 'selected';
                            }
                            ?>>

                            <?php echo $category['category_name']; ?>

                            +

                            Rs <?php echo $category['category_price']; ?>

                        </option>

                        <?php } ?>

                    </select>

                </div>

                <!-- EXTRA PRICE -->

                <div class="col-md-6">

                    <label class="form-label text-white">

                        Extra Price

                    </label>

                    <input type="number"
                           name="extra_price"
                           id="extra_price"
                           class="form-control bg-dark text-white border-0"
                           value="0"
                           onkeyup="calculatePrice()"
                           required>

                    <small class="text-light">

                        VIP Charges etc

                    </small>

                </div>

                <!-- FINAL PRICE -->

                <div class="col-md-6">

                    <label class="form-label text-white">

                        Final Ticket Price

                    </label>

                    <input type="text"
                           id="final_price"
                           class="form-control bg-dark text-white border-0"
                           readonly>

                </div>

                <!-- OLD PRICE -->

                <div class="col-md-12">

                    <div class="alert alert-info">

                        Current Saved Price:

                        Rs <?php echo $price['price']; ?>

                    </div>

                </div>

                <!-- BUTTON -->

                <div class="col-12">

                    <button type="submit"
                            name="update_price"
                            class="btn btn-warning">

                        Update Price

                    </button>

                </div>

            </div>

        </form>

    </div>

</div>

<script>

function calculatePrice(){

    let show =
    document.getElementById("show");

    let category =
    document.getElementById("category");

    let extra =
    document.getElementById("extra_price").value;

    let show_price =
    parseInt(
    show.options[show.selectedIndex]
    .getAttribute("data-price"));

    let category_price =
    parseInt(
    category.options[category.selectedIndex]
    .getAttribute("data-price"));

    let extra_price =
    parseInt(extra || 0);

    let final_price =
    show_price +
    category_price +
    extra_price;

    document.getElementById("final_price").value =
    "Rs " + final_price;
}

/* AUTO LOAD */

calculatePrice();

</script>

<?php include('./base/footer.php'); ?>