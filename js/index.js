var myVar;

function PageLoader() {
  myVar = setTimeout(showPage, 0);
}

function showPage() {
  var loader = document.getElementById("loader");
  if (loader) loader.style.display = "none";

  var wrapper = document.getElementById("page-content-wrapper");
  if (wrapper) wrapper.style.display = "block";
}

window.ondragstart = function () {
  return false;
};

function onReady(fn) {
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", fn, { once: true });
  } else {
    fn();
  }
}

onReady(function () {
  // Disable right-click on images and embedded objects (basic copy deterrent).
  document.addEventListener(
    "contextmenu",
    function (event) {
      var target = event.target;
      if (!(target instanceof Element)) return;
      if (target.matches("img, embed, object, iframe")) {
        event.preventDefault();
      }
    },
    { capture: true }
  );

  // Hint browser for better decode scheduling; keep existing explicit loading attrs.
  document.querySelectorAll("img").forEach(function (img) {
    if (!img.hasAttribute("decoding")) img.decoding = "async";
    if (!img.hasAttribute("loading")) img.loading = "lazy";
  });
});

