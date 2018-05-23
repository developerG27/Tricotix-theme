let search = document.querySelector("#search-icon");
let input = document.querySelector("#input");

search.addEventListener('click',function(e){
  input.classList.toggle('.input--show')
  return e;
});