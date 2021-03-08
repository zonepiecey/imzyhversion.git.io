var myVar;

function PageLoader() {
    myVar = setTimeout(showPage, 0);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("page-content-wrapper").style.display = "block";
}

