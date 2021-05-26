
document.getElementById('booked-item').onclick = function(){
  document.getElementById('col-booked-item').style.display = "block";
  document.getElementById('col-booked-item2').style.display = "none";
  document.getElementById('displayer-div-holder').style.display = "none";
  document.getElementById('account-div-holder').style.display = "none";
}

document.getElementById('selled-item').onclick = function(){
  document.getElementById('col-booked-item').style.display = "none";
  document.getElementById('col-booked-item2').style.display = "block";
  document.getElementById('displayer-div-holder').style.display = "none";
  document.getElementById('account-div-holder').style.display = "none";
}
document.getElementById('items-list').onclick = ()=>{
  document.querySelector('.li-admin-other-holder').style.display = "block";
}
document.getElementById('items-list').addEventListener('dblclick', function(){
  document.querySelector('.li-admin-other-holder').style.display = "none";
});
document.getElementById('upload-admin-btu').onclick = () => location.reload();
document.getElementById('icon-refresh').onclick = () => location.reload();

document.getElementById('account').onclick = ()=> {
    document.getElementById('col-booked-item').style.display = "none";
    document.getElementById('col-booked-item2').style.display = "none";
    document.getElementById('displayer-div-holder').style.display = "none";
    document.getElementById('account-div-holder').style.display = "inline";
}
document.getElementById('btu-change-pass').onclick = ()=> {
  document.querySelector('.new-form').style.display = 'block';
  document.querySelector('.new-form-email').style.display = 'none';
}
document.getElementById('btu-change-email').onclick = ()=> {
  document.querySelector('.new-form-email').style.display = 'block';
  document.querySelector('.new-form').style.display = 'none';
}
document.onselectstart = (e) => e.preventDefault();
