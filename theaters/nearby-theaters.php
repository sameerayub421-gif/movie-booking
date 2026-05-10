<?php
include('../base/header.php');

$search = "";

if(isset($_GET['city']) && $_GET['city'] != ""){

    $search = $_GET['city'];

    $select_query = "SELECT * FROM theaters 
                     WHERE location LIKE '%$search%'";

}else{

    $select_query = "SELECT * FROM theaters WHERE 1=0";

}

$result = mysqli_query($connection, $select_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Nearby Theaters</title>

<style>

body{
    margin:0;
    font-family:Arial, sans-serif;
    background:#000;
    color:#ffffff;
}

/* Title */
h1{
    text-align:center;
    margin:40px 0 10px 0;
    font-size:42px;
    color:#ffffff;
}

/* Description */
p.desc{
    text-align:center;
    width:70%;
    margin:0 auto 30px auto;
    color:#cccccc;
}

/* Search box */
.search-box{
    text-align:center;
    margin-bottom:40px;
}

.search-box input{
    width:280px;
    padding:10px;
    border:1px solid #E50914;
    outline:none;
    border-radius:6px;
}

.search-box button{
    padding:10px 14px;
    border:1px solid #666666;
    background:#666666;
    color:#fff;
    cursor:pointer;
    transition:0.3s;
    border-radius:6px;
}

.search-box button:hover{
    background:#E50914;
    color:#fff;
}

/* Grid */
.container{
    width:90%;
    margin:auto;
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(260px, 1fr));
    gap:25px;
    padding-bottom:60px;
}

/* Card */
.card{
    width: 280px;
    background:#666666;
    border:2px solid #E50914;
    padding:25px;
    border-radius:15px;
    text-align:center;
    transition:0.3s ease;
    box-shadow:0 5px 15px rgba(0,0,0,0.06);
}

/* hover */
.card:hover{
    transform:translateY(-10px);
    box-shadow:0 15px 30px rgba(0,0,0,0.12);
}

/* text */
.card h3{
    margin-bottom:10px;
}

.card p{
    margin:6px 0;
    color:#555;
}

/* button */
.btn{
    margin-top:15px;
    display:inline-block;
    padding:9px 16px;
    background:#fff;
    color:#000;
    border:1px solid #000;
    border-radius:8px;
    text-decoration:none;
    transition:0.3s;
}

.btn:hover{
    background:#111;
    color:#fff;
}

</style>
</head>

<body>

<section class="hero-area">
    <div class="hero-slides owl-carousel">

        <div class="single-hero-slide d-flex align-items-center justify-content-center">

            <div class="slide-img bg-img"
                 style="background-image: url(/movie-booking-master/images/index.img/background1.jpg);">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="hero-slides-content text-center">

                            <h6>Nearby Cinema</h6>

                            <h2>
                                FIND THEATERS
                                <span>FIND THEATERS</span>
                            </h2>

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<h1>Nearby Theaters</h1>

<p class="desc">
Find cinemas near your location and book your seats instantly.
</p>

<!-- SEARCH -->
<div class="search-box">

    <form method="GET">

        <input type="text"
               name="city"
               placeholder="Enter city e.g Lahore"
               value="<?php echo $search; ?>">

        <button type="submit">
            Search
        </button>

        <a href="nearby-theaters.php" class="btn">
            Reset
        </a>

    </form>

</div>

<div class="container">

<?php while($theater = mysqli_fetch_array($result)){ ?>

    <div class="card">

        <h3>
            🎬 <?php echo $theater['name']; ?>
        </h3>

        <p>
            📍 <?php echo $theater['location']; ?>
        </p>

        <p>
            🎭 Total Screens:
            <?php echo $theater['total_screens']; ?>
        </p>

        <a href="view-movies.php?theater_id=<?php echo $theater['theater_id']; ?>"
           class="btn">
           View Movies
        </a>

    </div>

<?php } ?>

</div>

</body>
</html>

<?php
include('../base/footer.php');
?>