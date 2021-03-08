<?php  
include "header.php";
?>

<body onload="PageLoader()">
	<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
        </div>
        
        <script>
        $(function(){
          $("#sidebar-wrapper").load("sidebar.html");
        });
        </script>
        <div class="prooverlay"></div>
        <!-- /#sidebar-wrapper -->

        <div id="loader"><span class="loader-inner"></span></div>

        <!-- Page Content -->
        <div id="page-content-wrapper" style="display:none;">
            <div class="fixheader"></div>
                <div class="content-section">
                    <h1>MUGGLE</h1>
                   <img src="imgs/guozao/1.jpg" alt="" class="proimg">
                   <br><br><br><br>
                   <h2>You are a muggle in real lives, but you can be a witch in VR</h2>
                   <br><br>
                    <p>Muggle is my first VR demo which delivers a delightful immersive experience that I dreamed about. I built this with Unity 3D and dypolyed on an iphone.</p>
                   <img src="imgs/guozao/1.png" alt="" class="proimg">
                   <img src="imgs/guozao/1_2.png" alt="" class="proimg">
                   <img src="imgs/guozao/1.gif" alt="" class="proimg">
                   <img src="imgs/guozao/2.gif" alt="" class="proimg">
                   <img src="imgs/guozao/3.gif" alt="" class="proimg">
                   <img src="imgs/guozao/4.png" alt="" class="proimg">
                   <img src="imgs/guozao/3.png" alt="" class="proimg">
                   <img src="imgs/guozao/2.png" alt="" class="proimg">
                    <div class="footer">
                        <p class="copyr">Copyright @ 2016 Ying Zhang</p>
                    </div>
                </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <script>
    </script>
    <!-- /#wrapper -->
</body>
</html>