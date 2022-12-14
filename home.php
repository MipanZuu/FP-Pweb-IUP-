<?php
    require_once('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home | TEAM-X </title>
    <!-- <link rel="stylesheet" href="./assets/styles/home.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="assets/styles/tittle.css">
</head>
<body>
<?php include_once('./modal/header.php'); ?>
    <!--Main Navigation-->
    <div class="flex header-blue bg-dark text-light px-4 px-lg-5 my-5 py-5" style="margin-top: 60px;">
        <div class="container hero">
            <div class="d-flex flex-row justify-content-between">
                <div class="rounded float-left mt-5">
                    <img style="width: 300px;" class="" src="dist/logo/teamx-text-white.png" alt="">
                </div>
                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                    <h1>
                        E-Commerce System
                    </h1>
                    <p>
                        - Denta Bramasta Hidayat <br>
                        - Muhammad Fatih Akbar <br>
                        - Shafina Chaerunissa <br>
                        - Selomita Zhafiirah <br>
                        - Mohammed Fachry DwiHandoko
                    </p>
                    <button class="btn btn-primary px-4 py-2 rounded-0 action-button" type="button">
                        Our Products
                    </button>
                </div>
            </div>
        </div>
    </div>

 <!-- brochure-->
    <div class="container">
  <div class="row">
    <div class="col-sm justify-content-center text-center">
    <a href="./dist/flyer/COLD SALES.png" download="COLD SALES.png">
        <img style="width: 300px;" src="./dist/flyer/COLD SALES.png" alt="">
    </a>
    </div>
    <div class="col-sm justify-content-center text-center">
    <a href="./dist/flyer/Discounts Flyer.png" download="Discounts Flyer.png">
        <img style="width: 300px;" src="./dist/flyer/Discounts Flyer.png" alt="">
    </a>
    </div>
  </div>
</div>

<section class="py-5" id="productView">
</section>

        <!-- Section-->
        <h2 class="tittle mt-5">Featured products</h2>
        <section id="products" class="py-5">
            <div class="container px-4 px-lg-5">
                <!-- Displaying all products here -->
                <div id="allProducts" class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
   
                </div>
            </div>
        </section>

<?php include_once('./modal/footer.php'); ?>
<?php include_once('script.php'); ?>
</body>
</html>
