// var search = document.querySelector("#search-icon");
// var input = document.querySelector("#input");

// search.addEventListener('click',function(){
//   input.classList.toggle('input--show');
// })


jQuery(document).ready(function($) {
  // You can use $() inside of this function
  $("#searchsubmit").click(function(){
    $("input#s").toggleClass('input--show');
    $(".main__navigation ul").toggleClass('hide');

  });

  
  
});
