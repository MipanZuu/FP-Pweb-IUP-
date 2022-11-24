$(document).on('submit', '#UserSignUp', function(event) {
    event.preventDefault();
    var em = $('#UserEmail').val();
    var un = $('#UserUsername').val();
    var pw = $('#UserPassword').val();

    if (em.length == "") {

        Swal.fire({
          type: 'warning',
          title: 'Oops...',
          text: 'Email is empty !'
        });

      } else if(un.length == "") {

        Swal.fire({
          type: 'warning',
          title: 'Oops...',
          text: 'Username is empty !'
        });

      } else if(pw.length == "") {

        Swal.fire({
          type: 'warning',
          title: 'Oops...',
          text: 'Password is empty !'
        });

      }
    else {
    $.ajax({
          url: 'data/userSignUp.php',
          type: 'post',
          dataType: 'json',
          data: {
            em:em,
            un:un,
            pw:pw
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