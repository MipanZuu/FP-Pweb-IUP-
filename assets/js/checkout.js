$(document).on('submit', '#billing', function(event) {
    event.preventDefault();
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var emailCheckout = $('#emailCheckout').val();
    var telephone = $('#telephone').val();
    var billadd = $('#billadd').val();
    var city = $('#city').val();
    var postalcode = $('#postalcode').val();
    var country = $('#country').val();

    if (fname.length == "") {

        Swal.fire({
          type: 'warning',
          title: 'Oops...',
          text: 'Email is empty !'
        });

      } else if(lname.length == "") {

        Swal.fire({
          type: 'warning',
          title: 'Oops...',
          text: 'Username is empty !'
        });

      } else if(emailCheckout.length == "") {

        Swal.fire({
          type: 'warning',
          title: 'Oops...',
          text: 'Password is empty !'
        });

      } else if(telephone.length == "") {

        Swal.fire({
          type: 'warning',
          title: 'Oops...',
          text: 'Password is empty !'
        });

      } else if(billadd.length == "") {

        Swal.fire({
          type: 'warning',
          title: 'Oops...',
          text: 'Password is empty !'
        });

      } else if(city.length == "") {

        Swal.fire({
          type: 'warning',
          title: 'Oops...',
          text: 'Password is empty !'
        });

      } else if(postalcode.length == "") {

        Swal.fire({
          type: 'warning',
          title: 'Oops...',
          text: 'Password is empty !'
        });

      } else if(country.length == "") {

        Swal.fire({
          type: 'warning',
          title: 'Oops...',
          text: 'Password is empty !'
        });

      }
    else {
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
                title: 'Register Successfully !',
                text: 'Please login !'
              });
            }else{
              alert('Invalid Username / Password!');
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
    }
  });