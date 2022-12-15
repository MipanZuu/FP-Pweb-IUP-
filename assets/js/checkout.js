$(document).on('submit', '#billing', function(event) {
    event.preventDefault();
    // var order_id = $('#order_id').val();
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var emailCheckout = $('#emailCheckout').val();
    var telephone = $('#telephone').val();
    var billadd = $('#billadd').val();
    var city = $('#city').val();
    var postalcode = $('#postalcode').val();
    var country = $('#country').val();

    // alert(order_id);
    $.ajax({
          url: 'data/checkOutData.php',
          type: 'post',
          dataType: 'json',
          data: {
            fname:fname,
            lname:lname,
            emailCheckout:emailCheckout,
            telephone:telephone,
            billadd:billadd,
            city:city,
            postalcode:postalcode,
            country:country
          },
          success: function (data) {
            if(data.valid == true){
              Swal.fire({
                type: 'success',
                title: 'checkout Successfully !',
                text: 'Please make out a payment !'
              });
            }else{
              alert('Invalid input');
            }
          },
          error: function(){
            Swal.fire({
                type: 'error',
                title: 'Opps!',
                text: 'server error!'
              });
          }
        });
  });