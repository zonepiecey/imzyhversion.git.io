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

  // Check if native lazy loading is supported
  if ('loading' in HTMLImageElement.prototype) {
    // Native lazy loading is supported
    const images = document.querySelectorAll('img:not([loading])');
    images.forEach(img => {
      img.loading = 'lazy';
    });
  } else {
    // Fallback for browsers that don't support native lazy loading
    const images = document.querySelectorAll('img[data-src]');
    const loadImage = (img) => {
      img.src = img.dataset.src;
      img.removeAttribute('data-src');
    };

    // Simple scroll based lazy loading
    const lazyLoad = () => {
      images.forEach(img => {
        if (img.getBoundingClientRect().top <= window.innerHeight + 100) {
          loadImage(img);
        }
      });
    };

    // Initial check
    lazyLoad();
    // Add scroll event listener
    window.addEventListener('scroll', lazyLoad);
    window.addEventListener('resize', lazyLoad);
  }
}); 
