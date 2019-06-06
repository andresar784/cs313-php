$('.btn').on('click', function() {
    var $this = $(this);
  $this.button('loading');
    setTimeout(function() {
       $this.button('reset');
   }, 8000);
});


$(document).ready(function () {
  $("#from")('change', function () {
    if (value == "Montevideo") {
      $("#t1").hide();
    }
    else if(value == "Durazno"){
      $("#t2").hide();
    }
    else if(value == "Paso de los Toros"){
      $("#t3").hide();
    }
    else if(value == "Tacuarembo"){
      $("#t4").hide();
    }
    else if(value == "Rivera"){
      $("$t5").hide();
    }
  });
});

