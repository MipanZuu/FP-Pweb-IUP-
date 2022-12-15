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
    
    <!--php
    // include_once('./database/Connection.php');
    // include_once('./database/Database.php')
    ?-->
    
    <?php include_once('./modal/header.php'); ?>

    <div class="h-20 p-5 d-inline-block"></div>

    <section id="checkout">
        <h2 class="tittle">Your Shopping Cart</h2>
        <div class="container d-flex flex-row ">

            <form id="billing" method="POST" class="flex-fill mx-5">
            <input type="hidden" id="order_id">
                <div class="form-group mb-2">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" name="fname" id="fname" require placeholder="John">
                </div>
                <div class="form-group mb-2">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" require placeholder="Doe">
                </div>
                <div class="form-group mb-2">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="emailCheckout" require placeholder="jhondoe@email.com">
                </div>
                <div class="form-group mb-2">
                    <label for="telephone">Phone Number</label>
                    <input type="tel" class="form-control" id="telephone" require  placeholder="0000 0000 0000">
                </div>
                <div class="form-group mb-2">
                    <label>Billing Address</label>
                    <input type="text" class="form-control mb-1" id="billadd" require placeholder="Address 1">
                </div>
                <div class="form-group mb-2">
                    <label for="lname">City</label>
                    <input type="text" class="form-control" require id="city">
                </div>
                <div class="form-group mb-2">
                    <label for="lname">Postal Code</label>
                    <input type="number" class="form-control" require id="postalcode">
                </div>
                <div class="form-group mb-2">
                    <label for="lname">Country</label>
                    <input type="text" class="form-control" require id="country">
                </div>

                    <button type="submit" name="orderCheckout" class="btn btn-primary w-100 mt-2">Checkout</button>
            </form>

            <div id="order-summary" class="flex-fill">
                <h2 class="mb-2">Order Summary</h2>

                <div id="checkOut"></div>
                
            </div>
        </div>
    </section>


<?php include_once('./modal/footer.php'); ?>
<?php include_once('script.php'); ?>
</html>
