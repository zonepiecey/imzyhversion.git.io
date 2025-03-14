var myVar;

function PageLoader() {
    myVar = setTimeout(showPage, 0);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("page-content-wrapper").style.display = "block";
}

window.ondragstart = function() { return false; } 

$(document).ready(function() {
  $("img").on("contextmenu",function(){
     return false;
  }); 

  $("pdf").on("contextmenu",function(){
     return false;
  }); 

}); 
