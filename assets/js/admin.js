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