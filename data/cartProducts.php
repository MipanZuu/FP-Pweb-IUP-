<?php 
require_once('../class/Cart.php');
$carts = $cart->getAllCart();
?>
<?php foreach($carts as $c): 
    $total_Ceckout = 0;
    $total_price = $c['item_price'] * $c['item_quantity'];
?>
<div class="card mb-3 shadow-sm d-flex flex-row">
        <img src="<?= $c['item_image']; ?>" alt="Thumbnail" style="width: 100px;">
            <div class="container px-4 d-flex flex-row product-data">
                <p class="fs-4 fw-semibold my-auto me-auto" ><?= $c['item_name']; ?></p>
            <div class="my-auto me-4" style="width: 8rem;">
                <div class="input-group">
                    <span class="input-group-btn">
                        <button id="decrementButton" type="button" class="btn btn-secondary btn-number decrementButton">-</button>
                    </span>
                    <input id="inputQuantity" type="text" name="quant[1]" class="form-control input-number text-center" value="1" min="1" max="10">
                        <span class="input-group-btn">
                            <button id="incrementButton" type="button" class="btn btn-primary btn-number incrementButton">+</button>
                        </span>
                </div>
            </div>
        <p class="fs-3 fw-regular my-auto me-4"><?= 'Rp '.number_format($total_price,2,',','.'); ?></p>
        </div>
    <button id="delCart" value="<?= $c['cart_id']; ?>" type="button" class="btn btn-default border-start px-4 fs-4 text-black-50">X</button>
</div>
<div class="px-4 d-flex flex-row justify-content-end mb-4">
                <p class="fs-3 my-auto text-black-50 me-1" >Subtotal:</p>
                <p class="fs-2 fw-semibold my-auto text-black-50" >$500.00</p>
            </div>
<?php endforeach; ?>