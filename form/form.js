// const form = document.querySelector("#form1");
const sliderHijo = document.querySelector(".slider-hijo");

// const send = (e) => {
//   e.preventDefault();
//   const confirmar = confirm("¿desea enviar el formulario?");

//   if(confirmar == true){
//  alert(form.nombre.value)

//   }
// }

// form.addEventListener("submit", send)
let index = 1;
let img = sliderHijo.querySelectorAll("img").length;
console.log(img);

// setInterval(function(){
//   console.log(index)
//   let cantidad = index * -115;
//   console.log(cantidad);
//   sliderHijo.style.transform = `translateX(${cantidad + "%"})`;
//   index++;
// if(index > img-1){
//   index = 0
// }
// }, 3000 );

const arrow_l = document.querySelector(".arrow-l");
const arrow_r = document.querySelector(".arrow-r");

arrow_r.addEventListener("click", () => {
  console.log(index);
  let cantidad = index * -115;
  console.log(cantidad);
  sliderHijo.style.transform = `translateX(${cantidad + "%"})`;
  index++;
  if (index > img - 1) {
    index = 0;
  }
});


let counter = 0;

arrow_l.addEventListener("click", () => {
  console.log(index)
  index--
  if (index < 0) {
    index = img - 1;
    let can = index * -115;
    console.log(can);
    sliderHijo.style.transform = `translateX(${can + "%"})`;
    //  console.log(counter); counter++;
  

    return;
  }
  console.log(index)
  let cantidad = index * -115;
  console.log(cantidad);
  console.log(index);
  sliderHijo.style.transform = `translateX(${cantidad + "%"})`;
});
