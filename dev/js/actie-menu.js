$(document).ready(function() {

  $(".actie_box").fadeOut(0, function() {});
  $(".actie_banden").fadeIn("slow", function(){});
  $(".actie-menu-banden ").css("color", "black");
  $(".actie-menu-banden ").addClass("actien-menu-active");


 $(".actie-menu-color").click(function(event){
    event.preventDefault();
    $(".actie-menu-color").css("color", "white");
    $(".actie-menu-color").removeClass("actien-menu-active");
    $(this).css("color", "black");
    $(this).addClass("actien-menu-active");
    

    if($(this).hasClass("banden-a") ){
      $(".actie_box").fadeOut(0, function() {});
      $(".actie_banden").fadeIn("slow", function(){});
    }
    else if($(this).hasClass("velgen-a") ){
      $(".actie_box").fadeOut(0, function() {});
      $(".actie_velgen").fadeIn("slow", function(){});
    }
    else if($(this).hasClass("service-a") ){
      $(".actie_box").fadeOut(0, function() {});
      $(".actie_service").fadeIn("slow", function(){});
    }
    else if($(this).hasClass("carwash-a") ){
      $(".actie_box").fadeOut(0, function() {});
      $(".actie_carwash").fadeIn("slow", function(){});
    }
 });
});
