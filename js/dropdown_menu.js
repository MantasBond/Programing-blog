$(document).ready(function (){

  $("#log_btn").click(function(){
    $("#login_menu").slideDown(200);
    $("#reg_menu").hide();
  }); //log btn END

  $("#sign_btn").click(function(){
    $("#reg_menu").slideDown(200);
    $("#login_menu").hide();
  });//sign btn END

  $("#login_menu").mouseleave(function(){
    $("#login_menu").slideUp(200);
  });//login menu mouseleave END

  $("#reg_menu").mouseleave(function(){
    $("#reg_menu").slideUp(200);
  });//reg menu mouseleave END

});// document ready END
