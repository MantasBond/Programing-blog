$(document).ready(function (){

  $("#log_btn").click(function(){
    $("#login_menu").slideDown(200);
    $("#active_btn1").addClass("menuActive");
    $("#active_btn2").removeClass("menuActive");
    $("#log_btn").removeClass("menu_btn").addClass("activeBtn");
    $("#reg_menu").hide();
    $("#sign_btn").removeClass("activeBtn").addClass("menu_btn");
  }); //log btn END

  $("#sign_btn").click(function(){
    $("#login_menu").hide();
    $("#reg_menu").slideDown(200);
    $("#active_btn2").addClass("menuActive");
    $("#active_btn1").removeClass("menuActive");
    $("#sign_btn").removeClass("menu_btn").addClass("activeBtn");
    $("#log_btn").removeClass("activeBtn").addClass("menu_btn");
  });//sign btn END

  $("#login_menu").mouseleave(function(){
    $("#login_menu").slideUp(200);
    $("#active_btn1").removeClass("menuActive");
    $("#log_btn").removeClass("activeBtn").addClass("menu_btn");
  });//login menu mouseleave END

  $("#reg_menu").mouseleave(function(){
    $("#reg_menu").slideUp(200);
    $("#active_btn2").removeClass("menuActive");
    $("#sign_btn").removeClass("activeBtn").addClass("menu_btn");
  });//reg menu mouseleave END

});// document ready END
