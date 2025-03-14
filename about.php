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

        <!-- loader -->
        <div id="loader"><span class="loader-inner"></span></div>

        <!-- page-content-wrapper -->
        <div id="page-content-wrapper" style="display:none">

            <div class="container-fluid">

                <div class="about-section">

                    
                    
                    <p id="display1">
                        Hi! I'm Ying, a <span style="color:#0100c6; font-weight:600">designer</span> delivering smart interaction and delightful user experience.<br><br>
                        If you believe we can do something amazingly together,<br>
                        <a href="mailto:zh1gy2g0@gmail.com?Subject=Hello Ying!" target="_top">
                            <span style="text-decoration: underline #0100c6; text-decoration-thickness: 6px;">drop me a line</span>
                        </a>!
                    </p>

                </div>
                <div class="icons">
                        <a href="mailto:zh1gy2g0@gmail.com?Subject=Hello Ying!" target="_top"><i class="fas fa-paper-plane" style="font-size:24px;color:#0100c6;"></i></a>
                        
                        <a href="http://www.linkedin.com/in/ying-zhang-5430a9114"><i class="fab fa-linkedin-in" style="font-size:26px;color:#0100c6;"></i></a>
                </div>

            </div>

        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>
</html>