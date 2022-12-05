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

  // $(document).on('click', '#addToCart', function(){
  //   var item_id = $(this).val();
  //   // alert(item_id);

  //   $.ajax({
  //     url: './data/addToCart.php',
  //     type: 'post',
  //     data: {
  //       "item_id":item_id,
  //     },
  //     success: function(response) {
  //       alert("Success add to Cart");
  //     }
  //   });
  // });

  $(document).on('click', '.addToCart', function(){
    var item_id = $(this).val();
    alert(item_id);

    $.ajax({
      url: './data/addToCart.php',
      type: 'post',
      data: {
        "item_id":item_id,
      },
      success: function(response) {
        alert("Success Delete Cart");
      }
    });
  });

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

  // $(document).on('click', '#viewItems', function(){
  //   var item_id = $(this).val();
  //   alert(item_id);

  //   $.ajax({
  //     url: './data/productDetail.php',
  //     type: 'post',
  //     data: {
  //       item_id:item_id,
  //     },
  //     success: function(data) {
  //       $("#productView").html(data);
  //       window.open("product-details.php?=" + item_id);
  //     }
  //   });
  // });

  // function getSingleProduct() {
  //   var item_id = $("$viewItems").val();
  //   // alert(item_id);
  //   $.ajax({
  //   // product-details.php?p=<?= $p['item_name'];
  //     url: './data/productDetail.php',
  //     type: 'post',
  //     data: {
  //       item_id:item_id,
  //     },
  //     success: function (data) {
  //       $("#productView").html(data);
  //     },
  //     error: function () {
  //       eMsg(128);
  //     },
  //   });
  // } //end all_laundry
  // getSingleProduct();

  // $("#viewItems").change(function (e) {
  //   e.preventDefault();
  //   var item_id = $("#viewItems").val();

  //   $.ajax({
  //     url: './data/productDetail.php',
  //     type: 'post',
  //     data: {
  //       item_id: item_id,
  //     },
  //     success: function (data) {
  //       $("#productView").html(data);
  //     },
  //     error: function () {
  //       eMsg(330);
  //     },
  //   });
  // });