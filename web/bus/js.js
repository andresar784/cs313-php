$('.btn').on('click', function() {
    var $this = $(this);
  $this.button('loading');
    setTimeout(function() {
       $this.button('reset');
   }, 8000);
});

$(document).ready(function () {
  $("#from").change(function () {
    if ($(this).val() == "Montevideo") 
      $("#t1").hide();
    
    if($(this).val() == "Durazno")
      $("#t2").hide();
    
    if($(this).val() == "Paso de los Toros")
      $("#t3").hide();
    
    if($(this).val()== "Tacuarembo")
      $("#t4").hide();
    
    if($(this).val() == "Rivera")
      $("$t5").hide();
    
  });
});

