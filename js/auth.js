$(document).ready(function(){
  $('form').on('submit', function (e) {

          e.preventDefault();
          document.getElementById('Btn_Loading').style.display = "block";
          document.getElementById('Btn_Login').style.display = "none";
          $.ajax({
            type: 'post',
            dataType  : 'json',
            url: 'http://totskill.tk/system/auth.php',
            data: $('form').serialize(),
            success: function (results) {
              if(results.status == 'success'){
                setTimeout(function() {
                  document.getElementById('Login_Success').style.display = "block";
                  document.getElementById('Login_Error').style.display = "none";
                  document.getElementById('Btn_Loading').style.display = "none";
                  document.getElementById('Btn_Login').style.display = "block";
                  window.location.assign("./?p=home");
                },2000);
              }else{
                setTimeout(function() {
                  document.getElementById('Login_Success').style.display = "none";
                  document.getElementById('Login_Error').style.display = "block";
                  document.getElementById('Btn_Loading').style.display = "none";
                  document.getElementById('Btn_Login').style.display = "block";
                },2000);
              }
            }

          });

        });
});
