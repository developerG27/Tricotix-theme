// var search = document.querySelector("#search-icon");
// var input = document.querySelector("#input");

// search.addEventListener('click',function(){
//   input.classList.toggle('input--show');
// })

jQuery(document).ready(function($) {
  // You can use $() inside of this function
  $("#searchsubmit").click(function(){
    console.log("ho fatto click");
    //Se input ha un valore
    if($("input#s").val()){
      console.log("sono pieno");
    }else{
      //altrimenti aggiunti la classe
      $("input#s").toggleClass('input--show');
      //mostra e rendi invisibile
      $(".main__navigation ul").toggleClass('hide');
      console.log("sono vuoto");
      //diventa disabilitato
      $("#searchsubmit").attr('disabled',true); 
      //se c'è un keydown ritorna abilitato
      $("input#s").keydown(function(){
        $("#searchsubmit").attr('disabled',false);
      })
    }
  });

  
 

   
});
