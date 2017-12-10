$(document).ready(function (){

  $("#logout_btn").click(function (){
    $("#logout_btn").load("includes/logout.inc.php");
    window.location='index.php';
  }); //logout btn END

});// document ready END
