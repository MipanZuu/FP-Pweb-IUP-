<?php 
require_once('../class/Cart.php');
$carts = $cart->getAllCart();
?>
<?php foreach($carts as $c): 
    $total_Ceckout = 0;
    $total_price = $c['item_price'] * $c['item_quantity'];
    $total_Checkout += $total_price;
?>

                <div class="card d-flex flex-row mb-2">
                    <img style="width: 100px;" src="<?= $c['item_image']; ?>" alt="thumbnail">
                    <div class="pt-3 p-2">
                        <h4 class="font-weight-bold"><?= $c['item_name']; ?></h4>
                        <p><?= 'Rp '.number_format($total_price,2,',','.'); ?> x <em><?= $c['item_quantity']; ?> Item/s.</em></p>
                    </div>
                </div>
                
<?php endforeach; ?>
<div class="px-4 d-flex flex-row justify-content-end mb-4">
                <p class="fs-3 my-auto text-black-50 me-1" >Subtotal:</p>
                <p class="fs-2 fw-semibold my-auto text-black-50" id="totalPrice"><?= 'Rp '.number_format($total_Checkout,2,',','.'); ?></p>
</div>