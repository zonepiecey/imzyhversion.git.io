<?php  
include "header.php";
?>

<body onload="PageLoader()">
	<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebarWrapper">
        </div>
        
        <script>
        $(function(){
          $("#sidebarWrapper").load("sidebar.html");
        });
        </script>
        <div class="prooverlay"></div>
        <!-- /#sidebarWrapper -->
        <div id="loader"><span class="loader-inner"></span></div>
        <!-- Page Content -->
        <div id="page-content-wrapper" style="display:none;">
            <div class="fixheader">
                <p class="header-title">OCEAN  FRIENDS</p>
            </div>
                <div class="content-section">
                    <h1>Design + Code</h1>
                    <!-- <h2>ABSTRACT</h2> -->
                    <p class="p">The very first programming languages I learned was HTML, CSS and Javascript. When I was getting familiar with front-end development, I found I really enjoy coding. I also like to play with code to do some Generative Arts and 3D Arts using Processing, Three.JS, Pyton and C#.</p>
                    <hr>

                    <h2>Some visual made with <span style="color:blue">Three.js</span>
                    </h2>

                     <div class="vid-grid" style=" font-size:0; ">
                        <video class="vid" width="50%"  autoplay muted loop>
                            <source src="imgs/code/threejs_1.mp4" type="video/mp4" />
                        </video>
                        <video class="vid" width="50%"  autoplay muted loop>
                            <source src="imgs/code/threejs_2.mp4" type="video/mp4" />
                        </video>
                    </div>
                    <hr>
                    
                     <h2>Some visual made with <span style="color:blue">Processing 3</span>
                    </h2>

                    <div class="vid-grid" style=" font-size:0; ">
                        <video class="vid" width="50%"  autoplay muted loop>
                            <source src="imgs/code/p3_perlin-noise.mp4" type="video/mp4" />
                        </video>
                        <video class="vid" width="50%"  autoplay muted loop>
                            <source src="imgs/code/p3_starfield.mp4" type="video/mp4" />
                        </video>
                        <video class="vid" width="50%"  autoplay muted loop>
                            <source src="imgs/code/p3_moving-lines.mp4" type="video/mp4" />
                        </video>
                        <video class="vid" width="50%"  autoplay muted loop>
                            <source src="imgs/code/p3_rasterizer.mp4" type="video/mp4" />
                        </video>
                        
                        
                    </div>
                     
                    <div id="footer">
                    </div>
                    <script>
                        $(function(){
                        $("#footer").load("footer.html");
                        });
                    </script>
                </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <script>
    </script>
    <!-- /#wrapper -->
</body>
</html>