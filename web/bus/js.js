$('.btn').on('click', function() {
    var $this = $(this);
  $this.button('loading');
    setTimeout(function() {
       $this.button('reset');
   }, 8000);
});

$(document).ready(function () {
  $("#select.from").change(function () {

    var valueT = $(this).children("option:selected").val();

    
    switch(valueT){
      case "Montevideo":
      $("#t1").hide();
      break;
      case "Durazno":
      $("#t2").hide();
      break;
      case "Paso de los Toros":
      $("#t3").hide();
      break;
      case "Tacuarembo":
      $("#t4").hide();
      break;
      default:
      $("$t5").hide();
      
      }
      });
});

