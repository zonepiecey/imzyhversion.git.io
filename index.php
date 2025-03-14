<?php
include "header.php";
?>

<body onload="PageLoader()">
	<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebarWrapper"></div>
        
        <script>
        $(function(){
          $("#sidebarWrapper").load("sidebar.html");
        });
        </script>
        <div class="prooverlay"></div>
        <!-- /#sidebarWrapper -->

        <!-- loader -->
        <div id="loader"><span class="loader-inner"></span></div>

        <!-- #page-content-wrapper -->
        <div id="page-content-wrapper" style="display:none;">
        
              <!-- canvas -->
              <div class="section" id="canvas">
  

              <div id="landingText">
                <p id="text1">Hey!</p>
                <p id="text2">I'm Lumi,</p>
                <p id="text3">a digital poduct designer specializing in innovative interactions, systemic design, and UX frameworks.</p>
                <div id="slogan">
                  <p class="text4">Exploring</p>
                  <p class="text4">Creating</p>
                  <p class="text4">Designing</p>
                  <p class="text4">with Joy.</p>
                </div>
                
              </div>
                  
              <canvas id="dotgrid"></canvas>
              
                  <!-- <div id="logo_3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 74.23 74.23"><defs><style>.cls-1{fill:none;stroke-miterlimit:10;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><rect class="cls-1" x="4.11" y="4.11" width="66" height="66"/><polyline class="cls-1" points="4.11 51.94 39.35 51.94 47.72 41.79 55.18 51.94 70.11 51.94"/></g></g></svg>
                  </div> -->
                  
                  <!-- <img id="logo_3" src="imgs/logo_3.png" alt=""> -->
                  <!-- <img class="dot_group" src="imgs/dot_group.png" alt=""> -->
                  
                  
              </div>
              <!-- /canvas -->
              
              <!-- #container-fluid -->
              <div class="container-fluid">

                      <div class="about-section">
                          
                        <p id="display1">
                              Hi! I'm Lumi, a <span style="color:#0100c6; font-weight:600">designer</span> delivering smart interaction and delightful user experience.<br><br>
                              If you believe we can do something amazingly together, 
                              <br>
                              <a href="mailto:zh1gy2g0@gmail.com?Subject=Hello Ying!" target="_top"><span style="font-weight:600; text-decoration: underline #0100c6; text-decoration-thickness: 6px;">drop me a line</span>!</a>
                          </p>

                      </div>

                      <div class="icons">
                              <a href="mailto:zh1gy2g0@gmail.com?Subject=Hello" target="_top"><i class="fas fa-paper-plane" style="font-size:24px;color:#0000CA;"></i></a>
                              
                              <a href="http://www.linkedin.com/in/ying-zhang-5430a9114"><i class="fab fa-linkedin-in" style="font-size:26px;color:#0000CA;"></i></a>
                      </div>

              </div>
              <!-- /#container-fluid -->

              <!-- #container-fluid 2 -->
              <div class="container-fluid" data-trigger="true">

              </div>
              <!-- /#container-fluid 2-->
          

          </div>
          <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

   

    <!-- Menu Toggle Script -->
    <script>
            x = $("#logo_2");
            y = $("#logo_3");
            $("#wrapper").on("mousemove", function(t) {
                var a = -($(window).innerWidth() / 2 - t.pageX) / 10,
                    b = ($(window).innerHeight() / 2 - t.pageY) / -16;
                    c = ($(window).innerWidth() / 2 - t.pageX) / -40;
                    d = ($(window).innerHeight() / 2 - t.pageY) / -50;
  
                y.attr("style", "transform: translateX(" + a + "px) translateY(" + b + "px);-webkit-transform: translateX(" + a + "px) translateY(" + b + "px);-moz-transform: translateX(" + a + "px) translateY(" + b + "px)")
                x.attr("style", "transform: translateX(" + c + "px) translateY(" + d + "px);-webkit-transform: translateX(" + c + "px) translateY(" + d + "px);-moz-transform: translateX(" + c + "px) translateY(" + d + "px)")
            })


            // Get the canvas element by its ID
            var canvas = document.getElementById('dotgrid'),
                // Get the 2D drawing context of the canvas
                ctx = dotgrid.getContext('2d'),
                // Initialize an array to store points
                points = [],
                // Initialize an object to store mouse coordinates
                mouse = {
                  x: 0,
                  y: 0
                },
                // Set the size of each point
                size = 2,
                // Set the number of dots vertically
                h = 6, 
                // Set the number of dots horizontally
                w = 6;

            // Add an event listener for window resize
            window.addEventListener('resize', function() {
              let size = window.innerWidth;
              let size2 = window.innerHeight;
              dotgrid.width = size;
              dotgrid.height = size2;
              // Call setup function to initialize points
              setup();
            });

            // Trigger the resize event to initialize canvas size
            window.dispatchEvent(new Event('resize'));

            // Add an event listener for mouse movement
            window.addEventListener('mousemove', function(e) {
              // Update mouse coordinates with a scaling factor for x
              mouse.x = e.clientX;
              mouse.y = e.clientY;
            });

            // Function to set up points on the canvas
            function setup() {
              // Clear the points array
              points = [];
              // Get canvas width and height
              var cw = dotgrid.width;
              var ch = dotgrid.height;
              
              // Calculate the number of rows and columns
              var rw = cw / w;
              var rh = ch / h;

              // Loop through each row and column to create points
              for (var y = 0; y < rh; y++) {
                for (var x = 0; x < rw; x++) {
                  // Padding between points
                  var pad = 2;
                  // Calculate the position of each point
                  var point = {
                    x: ((cw - size) / (rw + pad)) * x + (cw / rw) * (pad / 2),
                    y: ((ch - size) / (rh + pad)) * y + (ch / rh) * (pad / 2),
                    size: size
                  };

                  // Add the point to the points array
                  points.push(point);
                }
              }
            }

            // Function to render points on the canvas
            function render() {
              // Clear the canvas
              ctx.clearRect(0, 0, dotgrid.width, dotgrid.height);

              // Loop through each point
              for (var i = 0; i < points.length; i++) {
                var point = points[i];
                
                // Calculate the scale based on distance from the mouse
                var scale = getDistance(point, mouse) / 100;
                  
                scale = 5 - scale;
              
                scale /= 5;
                
                // Calculate the new size of the point
                var newScale = point.size * scale * 2;
                
                // Ensure the new size is not negative
                if(newScale < 0) newScale = 0;
                
                // Calculate color based on mouse position
                var color = calculateColor(mouse.x, mouse.y);

                // Draw the point as a rectangle
                ctx.beginPath();
                ctx.rect(point.x, point.y, newScale, newScale);
                ctx.fill();
                // Set the fill color for the point
                ctx.fillStyle = color;
              }
            }

            // Function to calculate color based on mouse position
            function calculateColor(x, y) {
              // Normalize mouse position to a range of 0 to 1
              var xRatio = x / window.innerWidth;
              var yRatio = y / window.innerHeight;

              // Define RGB values for pink, yellow, and blue
              var pink = { r: 255, g: 105, b: 180 };
              var yellow = { r: 255, g: 255, b: 0 };
              var blue = { r: 25, g: 205, b: 255 };

              // Interpolate between colors based on mouse position
              var r, g, b;
              if (xRatio < 0.5) {
                // Interpolate between blue and pink
                r = Math.round(blue.r * (1 - xRatio * 2) + pink.r * xRatio * 2);
                g = Math.round(blue.g * (1 - yRatio) + pink.g * yRatio);
                b = Math.round(blue.b * (1 - yRatio) + pink.b * yRatio);
              } else {
                // Interpolate between pink and yellow
                r = Math.round(pink.r * (1 - (xRatio - 0.5) * 2) + yellow.r * (xRatio - 0.5) * 2);
                g = Math.round(pink.g * (1 - yRatio) + yellow.g * yRatio);
                b = Math.round(pink.b * (1 - yRatio) + yellow.b * yRatio);
              }

              return `rgb(${r}, ${g}, ${b})`;
            }

            // Polyfill for requestAnimationFrame
            window.requestAnimFrame = (function() {
              return window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                function(callback) {
                  window.setTimeout(callback, 1000 / 60);
                };
            })();

            // Animation loop to continuously render the canvas
            (function animloop() {
              requestAnimFrame(animloop);
              render();
            })();

            // Function to calculate the distance between two points
            function getDistance(obj1, obj2) {
              var dx = obj1.x - obj2.x;
              var dy = obj1.y - obj2.y;
              return Math.sqrt(dx * dx + dy * dy);
            }

    </script>

    <!-- Show side bar when scroll -->
    <script>

      const sidebarWrapper = document.getElementById('sidebarWrapper'); // Ensure the correct ID
      const triggerSection = document.querySelector('.container-fluid[data-trigger]');

      function handleScroll() {
        const triggerTop = triggerSection.offsetTop
        const screenMiddle = window.innerHeight / 2; // Get the middle of the screen

        // Check if the bottom of the triggerSection has passed the middle of the screen
        if (triggerTop <= window.scrollY + screenMiddle) {
          sidebarWrapper.classList.add('hovered');
        } else {
          sidebarWrapper.classList.remove('hovered');
        }
      }

      window.addEventListener('scroll', handleScroll);


      </script>
</body>
</html>