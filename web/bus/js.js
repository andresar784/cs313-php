$('.btn').on('click', function() {
    var $this = $(this);
  $this.button('loading');
    setTimeout(function() {
       $this.button('reset');
   }, 8000);
});

$(document).ready(function () {
  $("#from").change(function () {

    var valueT = $(this).children("option:selected").val();

    
    switch(valueT){
      case "Montevideo":
      $("#t1").style.display = "none";
      break;
      case "Durazno":
      $("#t2").style.display = "none";
      break;
      case "Paso de los Toros":
      $("#t3").style.display = "none";
      break;
      case "Tacuarembo":
      $("#t4").style.display = "none";
      break;
      default:
      $("#t5").style.display = "none";
      
      }
      });
});

function calculatePrice(from, to, quantity){
  var from = from;
  var to = to;
  var quantity = quantity;
  var price;

  if(from == "Montevideo" & to == "Rivera"){
    price = 500 * quantity;
  }
  else if(from == "Montevideo" & to == "Tacuarembo"){
    price = 390 * quantity;
  }

  document.getElementById("showprice").innerHTML = price;


}