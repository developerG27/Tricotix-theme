// var search = document.querySelector("#search-icon");
// var input = document.querySelector("#input");

// search.addEventListener('click',function(){
//   input.classList.toggle('input--show');
// })


jQuery(document).ready(function($) {
  // You can use $() inside of this function
  $("#search-icon").click(function(){
    $(".header__search input").toggleClass('input--show');
  });
  
});