var modal = document.getElementById("myModal");

var click = document.getElementById("myClick");
var img = document.getElementById("myImg");
var modalImg = document.getElementById("modal-img");
var captionText = document.getElementById("caption");

click.onclick = function(){
  modal.style.display = "block";
  modalImg.src = img.src;
  captionText.innerHTML = img.alt;
}

var span = document.getElementsByClassName("close-modal")[0];

span.onclick = function(){ 
  modal.style.display = "none";
}