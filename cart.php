<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Shopping Cart | TEAM-X </title>
    <link rel="stylesheet" href="../styles/home.css">
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
    <header>
        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <div class="container-fluid justify-content-center justify-content-md-between">
            <div class="d-flex my-2 my-sm-0">
            <a class="navbar-brand me-2 mb-1 d-flex justify-content-center" href="#">
                <h4 class="my-auto pe-lg-3 fw-bolder"> TEAM-X </h4>
            </a>
    
            <!-- Search form -->
            <form class="d-flex input-group w-auto my-auto">
                <input autocomplete="off" type="search" class="form-control rounded fst-italic" placeholder="Search"
                style="min-width: 125px" />
                <span class="input-group-text border-0 d-none d-md-flex"><i class="fas fa-search"></i></span>
            </form>
            </div>
    
            <ul class="navbar-nav flex-row">
                <li class="nav-item me-3 me-lg-0 px-lg-2">
                    <a class="nav-link" href="#">
                        <span class="d-none d-lg-inline-block fst-italic">
                            Home
                        </span>
                        <i class="fas fa-shopping-bag d-inline-block d-lg-none"></i>
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-0 px-lg-2">
                    <a class="nav-link" href="#">
                        <span class="d-none d-lg-inline-block fst-italic">
                            Shop
                        </span>
                        <i class="fas fa-shopping-bag d-inline-block d-lg-none"></i>
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-0 ps-lg-2 pe-lg-5">
                <a class="nav-link" href="#">
                    <span class="d-none d-lg-inline-block fst-italic">
                        Contact
                    </span>
                    <i class="fas fa-envelope d-inline-block d-lg-none"></i>
                </a>
            </li>
            <!-- Avatar -->
            <li class="nav-item px-4 py-1 bg-primary text-center">
                <a class="nav-link d-flex align-items-center text-white fw-bolder" href="logout.php" id="navbarDropdownMenuLink" role="button">
                    <h6 class="my-auto pe-2"> LOGOUT </h6>
                </a>
            </li>
            </ul>
        </div>
        </nav>
        <!-- Navbar -->
    </header>

    <div class="h-50 p-5 d-inline-block"></div>

    <!-- Order Lists -->
    <section id="orders">
        <h2 class="tittle">Your Shopping Cart</h2>
        <div class="container px-4 px-lg-5 mb-5 d-flex flex-column">
            <div class="card mb-3 shadow-sm d-flex flex-row">
                <img src="https://dummyimage.com/100x100/dee2e6/6c757d.jpg" alt="Thumbnail" style="width: 100px;">
                <div class="container px-4 d-flex flex-row ">
                    <p class="fs-4 fw-semibold my-auto me-auto" >Fancy Electronic Product</p>
                    <div class="my-auto me-4" style="width: 8rem;">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-secondary btn-number" data-type="minus" data-field="quant[1]">-</button>
                            </span>
                            <input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">+</button>
                            </span>
                        </div>
                    </div>
                    <p class="fs-3 fw-regular my-auto me-4">$100.00</p>
                </div>
                <button type="buttton" class="btn btn-default border-start px-4 fs-4 text-black-50">X</button>
            </div>

            <div class="card mb-3 shadow-sm d-flex flex-row">
                <img src="https://dummyimage.com/100x100/dee2e6/6c757d.jpg" alt="Thumbnail" style="width: 100px;">
                <div class="container px-4 d-flex flex-row ">
                    <p class="fs-4 fw-semibold my-auto me-auto" >Fancy Electronic Product</p>
                    <div class="my-auto me-4" style="width: 8rem;">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-secondary btn-number" data-type="minus" data-field="quant[1]">-</button>
                            </span>
                            <input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">+</button>
                            </span>
                        </div>
                    </div>
                    <p class="fs-3 fw-regular my-auto me-4">$100.00</p>
                </div>
                <button type="buttton" class="btn btn-default border-start px-4 fs-4 text-black-50">X</button>
            </div>

            <div class="card mb-3 shadow-sm d-flex flex-row">
                <img src="https://dummyimage.com/100x100/dee2e6/6c757d.jpg" alt="Thumbnail" style="width: 100px;">
                <div class="container px-4 d-flex flex-row ">
                    <p class="fs-4 fw-semibold my-auto me-auto" >Fancy Electronic Product</p>
                    <div class="my-auto me-4" style="width: 8rem;">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-secondary btn-number" data-type="minus" data-field="quant[1]">-</button>
                            </span>
                            <input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">+</button>
                            </span>
                        </div>
                    </div>
                    <p class="fs-3 fw-regular my-auto me-4">$100.00</p>
                </div>
                <button type="buttton" class="btn btn-default border-start px-4 fs-4 text-black-50">X</button>
            </div>

            <div class="card mb-3 shadow-sm d-flex flex-row">
                <img src="https://dummyimage.com/100x100/dee2e6/6c757d.jpg" alt="Thumbnail" style="width: 100px;">
                <div class="container px-4 d-flex flex-row ">
                    <p class="fs-4 fw-semibold my-auto me-auto" >Fancy Electronic Product</p>
                    <div class="my-auto me-4" style="width: 8rem;">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-secondary btn-number" data-type="minus" data-field="quant[1]">-</button>
                            </span>
                            <input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">+</button>
                            </span>
                        </div>
                    </div>
                    <p class="fs-3 fw-regular my-auto me-4">$100.00</p>
                </div>
                <button type="buttton" class="btn btn-default border-start px-4 fs-4 text-black-50">X</button>
            </div>

            <div class="card mb-3 shadow-sm d-flex flex-row">
                <img src="https://dummyimage.com/100x100/dee2e6/6c757d.jpg" alt="Thumbnail" style="width: 100px;">
                <div class="container px-4 d-flex flex-row ">
                    <p class="fs-4 fw-semibold my-auto me-auto" >Fancy Electronic Product</p>
                    <div class="my-auto me-4" style="width: 8rem;">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-secondary btn-number" data-type="minus" data-field="quant[1]">-</button>
                            </span>
                            <input type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">+</button>
                            </span>
                        </div>
                    </div>
                    <p class="fs-3 fw-regular my-auto me-4">$100.00</p>
                </div>
                <button type="buttton" class="btn btn-default border-start px-4 fs-4 text-black-50">X</button>
            </div>

            <div class="px-4 d-flex flex-row justify-content-end mb-4">
                <p class="fs-3 my-auto text-black-50 me-1" >Subtotal:</p>
                <p class="fs-2 fw-semibold my-auto text-black-50" >$500.00</p>
            </div>

            <div class="px-4 d-flex flex-row">
                <button type="button" class="btn btn-secondary btn-number me-auto">Return Shopping</button>
                <button type="button" class="btn btn-primary btn-number">Go to Checkout</button>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="text-center text-white" style="background-color: #2F3537;">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Social media -->
    <section class="mb-4">

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-light m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-twitter"></i
      ></a>


      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-light m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-light m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-light m-1"
        target="_blank"
        href="https://github.com/MipanZuu/FP-Pweb-IUP-"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-light p-3" style="background-color: rgba(38, 44, 44, 1);">
    © 2022 Copyright: Team-X
  </div>
  <!-- Copyright -->
</footer>
<script src="../scripts/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
