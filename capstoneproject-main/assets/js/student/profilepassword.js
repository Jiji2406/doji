//CURRENT PASSWORD
$('.current_pass_slash').on('click', function () {
    var x = document.getElementById("currentPassword");
    x.type = "text";
    $('.current_pass_fill').css('display', 'block');
    $('.current_pass_slash').css('display', 'none');
  });
  $('.current_pass_fill').on('click', function () {
    var x = document.getElementById("currentPassword");
    x.type = "password";
    $('.current_pass_fill').css('display', 'none');
    $('.current_pass_slash').css('display', 'block');
  });

  //NEW PASSWORD
  $('.newpass_slash').on('click', function () {
    var x = document.getElementById("newPassword");
      x.type = "text";
      $('.newpass_fill').css('display', 'block');
      $('.newpass_slash').css('display', 'none');
  });

  $('.newpass_fill').on('click', function () {
    var x = document.getElementById("newPassword");
      x.type = "password";
      $('.newpass_fill').css('display', 'none');
      $('.newpass_slash').css('display', 'block');
  });