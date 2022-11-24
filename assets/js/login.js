$(document).on('submit', '#form-login', function(event) {
    event.preventDefault();
    /* Act on the event */
    var un = $('#UserUsername').val();
    var pw = $('#UserPassword').val();
    $.ajax({
          url: 'data/userLogin.php',
          type: 'post',
          dataType: 'json',
          data: {
            un:un,
            pw:pw
          },
          success: function (data) {
            // console.log(data);
            if(data.valid == true){
              window.location = data.url;
            }else{
              alert('Invalid Username / Password!');
            }
          },
          error: function(){
            alert('Error: Login');
          }
        });//end a req
  });