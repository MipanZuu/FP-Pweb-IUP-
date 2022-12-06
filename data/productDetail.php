<?php 
require_once('../class/Products.php');
if(isset($_POST['item_id'])){
	$item_id = $_POST['item_id'];
	$products = $product->getSingleProduct($item_id);
}//end isset
?>

<?php foreach($products as $p): 
    $rupiah = $p['item_price'];
?>
            <div class="container px-4 px-lg-5 my-5 product-data">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div id="item_image" value="<?= $p['item_image']; ?>" class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?= $p['item_image']; ?>" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1" id="item_name" value="<?= $p['item_name']; ?>"><?= $p['item_name']; ?></div>
                        <h1 class="display-5 fw-bolder">
                            <?= $p['item_name']; ?>
                        </h1>
                        <div class="fs-5 mb-5">
                            <span id="item_price" value="<?= $p[$rupiah]; ?>">
                            <?= 'Rp '.number_format($rupiah,2,',','.'); ?>
                            </span>
                        </div>
                        <p class="lead pb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias perferendis officia perspiciatis sapiente soluta accusamus, expedita, et velit quibusdam excepturi commodi cum! Sed omnis veritatis esse fuga earum, unde ratione. <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis minima voluptatem nostrum in voluptate dolorum veritatis temporibus vitae, praesentium aspernatur, aperiam nam, atque ratione iure possimus autem laboriosam dolore exercitationem!
                        </p>
                        <div class="input-group mb-3">
                            <button id="decrementButton" class="input-group-text decrementButton">-</button>
                                <input class="form-control text-center" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button id="incrementButton" class="input-group-text me-3 incrementButton">+</button>
                            <button id="addToCart" class="btn btn-outline-primary flex-shrink-0" type="button" value="<?= $p['item_id']; ?>">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
<?php endforeach; ?>