<?php 
require_once('../class/Products.php');
$products = $product->getAllProducts();
?>
<?php foreach($products as $p): 
    $rupiah = $p['item_price'];
?>
                <div class="col mb-5">
                        <div class="card h-100">
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="<?= $p['item_image']; ?>" alt="image_products" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $p['item_name']; ?></h5>
                                    <!-- Product price-->
                                    <?= 'Rp '.number_format($rupiah,2,',','.'); ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
<?php endforeach; ?>


