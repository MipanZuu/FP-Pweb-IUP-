$(document).on("submit", "#resetPass", function (event) {
    event.preventDefault();
    var username = $("#UsernameReset").val();
    var pwd = $("#newPassword").val();
    var pwd2 = $("#repeatPassword").val();
    alert(username);
    if (pwd != pwd2) {
      alert("Password Not Match!");
    }
     else {
      $.ajax({
        url: "data/change_pass.php",
        type: "post",
        dataType: "json",
        data: {
            username:username,
            pwd: pwd,
        },
        success: function (data) {
            if(data.valid == true){
                Swal.fire({
                  type: 'success',
                  title: 'Reset Successfully !',
                  text: 'Please login !'
                });
              }else{
                alert('Cannot Reset Your Password');
              }
        },
        error: function () {
          eMsg(387);
        },
      });
    }
  });