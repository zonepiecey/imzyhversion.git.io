// 用于存储页面加载器的定时器ID
var myVar;

// 页面加载器函数 - 在页面加载时调用
// 作用：控制页面加载动画和内容的显示
function PageLoader() {
    // 立即执行showPage函数（timeout设为0）
    myVar = setTimeout(showPage, 0);
}

// 显示页面内容的函数
// 作用：隐藏加载动画，显示实际页面内容
function showPage() {
    // 隐藏加载动画元素
    document.getElementById("loader").style.display = "none";
    // 显示页面主要内容
    document.getElementById("page-content-wrapper").style.display = "block";
}

// 禁用整个窗口的拖拽功能
// 作用：防止用户拖拽页面元素
window.ondragstart = function() { return false; } 

// 当文档加载完成后执行
$(document).ready(function() {
    // 禁用所有图片的右键菜单
    // 作用：防止用户右键保存图片
    $("img").on("contextmenu",function(){
        return false;
    }); 

    // 禁用所有PDF的右键菜单
    // 作用：防止用户右键操作PDF文件
    $("pdf").on("contextmenu",function(){
        return false;
    }); 
}); 




// Check and apply lazy loading to images
$(document).ready(function() {
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

