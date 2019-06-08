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

function calculatePrice(){  
  var q = "<?=$quantity ?>";
  var price;
  var from = "<?=$from ?>";
  var to = "<?=$to ?>";

  if (from == "Montevideo" && to == "Durazno" || from == "Durazno" && to == "Montevideo"){
    price = 180 * q;
  }
  else if (from == "Montevideo" && to == "Paso de los Toros" || from == "Paso de los Toros" && to == "Montevideo"){
    price = 250 * q;
  }
  else if (from == "Montevideo" && to == "Tacuarembo" || from == "Rivera" && to == "Montevideo" ){
    price = 390 * q;
  }
  else if(from == "Montevideo" && to == "Rivera" || from == "Rivera" && to == "Montevideo"){
    price = 500 * q;
  }
  else if(from == "Durazno" && to == "Paso de los Toros" || from == "Paso de los Toros" && to == "Durazno"){
    price = 70 * q;
  }
  else if(from == "Durazno" && to == "Tacuarembo" || from == "Tacuarembo" && to == "Durazno"){
    price = 180 * q;
  }
  else if(from == "Durazno" && to == "Rivera" || from == "Rivera" && to == "Durazno"){
    price = 320 * q;
  }
  else if(from == "Paso de los Toros" && to == "Tacuarembo" || from == "Tacuarembo" && to == "Paso de los Toros"){
    price = 140 * q;
  }
  else if(from == "Paso de los Toros" && to == "Rivera" || from == "Rivera" && to == "Paso de los Toros"){
    price = 250 * q;
  }
  else if(from == "Tacuarembo" && to == "Rivera" || from == "Rivera" && to == "Tacuarembo"){
    price = 110 * q;
  }
  document.getElementById("showprice").innerHTML = price;
}

