$(document).ready(function (){
  $("#log_btn").click(function(){
    $("#login_menu").show();
  }); //log btn END
  $("#sign_btn").click(function(){
    $("#reg_menu").show();
  });//sign btn END
  $("#login_menu").mouseleave(function(){
    $("#login_menu").hide();
  });//login menu mouseleave END
  $("#reg_menu").mouseleave(function(){
    $("#reg_menu").hide();
  });//reg menu mouseleave END
});// document ready END
