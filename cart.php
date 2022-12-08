<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Shopping Cart | TEAM-X </title>
    <link rel="stylesheet" href="./assets/styles/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="assets/styles/tittle.css">
</head>
<body>
    <!--Main Navigation-->
    <?php
    include_once('./database/Connection.php');
    include_once('./database/Database.php')
    ?>
    <?php include_once('./modal/header.php'); ?>

    <div class="h-10 p-5 d-inline-block"></div>

    <!-- Order Lists -->
    <section id="orders">
        <h2 class="tittle">Your Shopping Cart</h2>
        <div class="container px-4 px-lg-5 mb-5 d-flex flex-column">
            <div id="cartProducts">

            </div>
            
            <div class="px-4 d-flex flex-row">
                <a href="home.php" class="btn btn-secondary btn-number me-auto">Return Shopping</a>
                <a href="checkout.php" type="button" class="btn btn-primary btn-number">Go to Checkout</a>
            </div>
        </div>
    </section>

<?php include_once('./modal/footer.php'); ?>
<?php include_once('script.php'); ?>
</html>
