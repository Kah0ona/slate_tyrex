jQuery(document).ready(function($){
  $("#show-meer").click(function(){ //<---- button
    $(".testimonial_group").show("slow");
    $("#show-meer").hide("slow") // ><---- op tyrex moet je "testimonial" gebruiken als het goed is!
  });
});
