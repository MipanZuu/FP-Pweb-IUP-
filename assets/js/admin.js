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

// $(document).ready (function(){

//   $("#SearchItems").keyup(function(){
//     var input = $(this).val();

//     if (input != "") {
//       $.ajax({
//         url: "./data/searchProducts.php",
//         type: "post",
//         data: {input:input},

//         success:function (data){
//           $("#searchResult").html(data);
//         }
//       });
//     }
//     else {
//       $("#searchResult").css("display", "none");
//     }
//   });
// });
