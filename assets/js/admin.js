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
        // $("#cartProducts").html(response);
      }
    });
  });