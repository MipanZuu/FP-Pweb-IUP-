<?php 
require_once('../class/Products.php');
$products = $product->getAllProducts();
?>
<?php foreach($products as $p): 
    $rupiah = $p['item_price'];
?>
                <div class="col mb-5 product-data">
                        <div class="card h-100">
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="<?= $p['item_image']; ?>" alt="image_products" />
                            <input type="hidden" id="item_image" value="<?= $p['item_image']; ?>">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                <h5 class="fw-bolder"><?= $p['item_name']; ?>
                                    <input type="hidden" id="item_name" value="<?= $p['item_name']; ?>">
                                </h5>
                                    <!-- Product price-->
                                    <input type="hidden" id="item_price" value="<?= $p['item_price']; ?>">
                                    <?= 'Rp '.number_format($rupiah,2,',','.'); ?>

                                </div>
                            </div>
                            <!-- Product actions-->
                            <!-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <button type="submit" id="addToCart" value="<?= $p['item_id']; ?>" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                    <input type="hidden" id="inputQuantity" value="<?= $p['item_quantity']; ?>">
                                </div>
                            </div> -->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                <button id="viewItems" value="<?= $p['item_id']; ?>" class="btn mt-auto">
                                    <a class="btn btn-outline-dark mt-auto" href="#productView">View</a>
                                </button>
                            </div>
                            </div>
                        </div>
                    </div>
<?php endforeach; ?>


