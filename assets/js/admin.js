var valid = true;
function eMsg(message) {
  alert("Error: Cannot Show The Database!" + message + "+");
}

//all products
function getAllProducts() {
    $.ajax({
      url: "./data/products.php",
      type: "post",
      data: {},
      success: function (data) {
        $("#allProducts").html(data);
      },
      error: function () {
        eMsg(128);
      },
    });
  } //end all_laundry
  getAllProducts();

  function cartProducts() {
    $.ajax({
      url: './data/cartProducts.php',
      type: 'post',
      data: {},
      success: function(response) {
        $("#cartProducts").html(response);
      }
    });
  }
  cartProducts();

  $(document).on('click', '#delCart', function(){
    var cart_id = $(this).val();
    // alert(cart_id);
    $.ajax({
      url: './data/cartDelete.php',
      type: 'post',
      data: {
        "cart_id":cart_id,
      },
      success: function(response) {
        alert("Success Delete Cart");
      }
    });
  });

  $(document).on('click', '#viewItems', function(){
    var item_id = $(this).val();
    // alert(item_id);

    $.ajax({
      url: './data/productDetail.php',
      type: 'post',
      data: {
        item_id:item_id,
      },
      success: function(data) {
        $("#productView").html(data);
      }
    });
  });

  $(document).on('click', '#incrementButton', function(){
    var quantity = $(this).closest('.product-data').find('#inputQuantity').val();
    // alert(quantity);
    var value = parseInt(quantity, 10);
    value = isNaN(value) ? 0 : value;
    if (value < 10) {
      value++;
      $(this).closest('.product-data').find('#inputQuantity').val(value);
    }
  });

  $(document).on('click', '#decrementButton', function(){
    var quantity = $(this).closest('.product-data').find('#inputQuantity').val();
    // alert(quantity);
    var value = parseInt(quantity, 10);
    value = isNaN(value) ? 0 : value;
    if (value > 1) {
      value--;
      $(this).closest('.product-data').find('#inputQuantity').val(value);
    }
  });

  $(document).on("click", '#addToCart', function(event){
    event.preventDefault();
    var item_quantity = $(this).closest('.product-data').find('#inputQuantity').val();
    var item_id = $(this).val();
    var item_name = $('#item_name').val();
    var item_price = $('#item_price').val();
    var item_image = $('#item_image').val();

    // alert(item_name);
    $.ajax({
      url: 'data/addToCart.php',
      type: "post",
      data: {
        item_id:item_id,
        item_quantity:item_quantity,
        item_name:item_name,
        item_price:item_price,
        item_image:item_image,
      },
      success: function (data) {
          alert("Success adding to cart");
      },
      error: function () {
        eMsg(128);
      },
    });

  });

  $(document).on('click', ".updateQuantity", function(){
    var cart_id = $(this).closest('.productCart').find('#itemidCart').val();
    var quantity = $('#inputQuantity').val();
    // alert(cart_id);
    $.ajax({
      url: 'data/updateQuantity.php',
      type: "post",
      data: {
        cart_id:cart_id,
        item_quantity:quantity,
      },
      success: function (data) {
          alert("Success update");
      },
      error: function () {
        eMsg(128);
      },
    });
  });

  
