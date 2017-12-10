$(document).ready(function (){

  $("#content_btn").click(function(){
    $("#post_form").fadeIn(200);
    $("#content_btn").hide();
  }); //log btn END
  $("#cancel_btn").click(function(){
    $("#post_form").hide();
    $("#content_btn").fadeIn();
  }); //log btn END
});// document ready END
