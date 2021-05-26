var cart = document.getElementById("cart");
var cartDiv = document.querySelector(".cart-div-container");
var arrowup = document.getElementById("arrowup");

cart.onclick = () => {
  cartDiv.style.display = "block";
}
arrowup.onclick = () => {
  cartDiv.style.display = "none";
}

var show = document.getElementById("show-cate");
var txt = "Now Showing ";
var txt1 = " item.";
document.querySelector(".cate").onclick = function(){
  show.innerHTML = txt + "Slippers" + txt1;
}
document.querySelector(".cate2").onclick = function(){
  show.innerHTML = txt + "Shoes" + txt1;
}

document.getElementById("btu-des").onclick = ()=>{
  document.querySelector('.Details-div-holder').style.display = "block";
}

document.onselectstart = (e) => e.preventDefault();
