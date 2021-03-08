
<?php  
include "header.php";
?>
<body onload="PageLoader()">
    <style>
        .dot{
        background:#0000CA;
        }
    </style>
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

        <!-- /#sidebar-wrapper -->

        <!-- page-content-wrapper -->
        <div id="page-content-wrapper">

            <div class="container-fluid">

                <div class="about-section">

                    
                    
                    <p id="display1">
                        Hi! I’m Ying, a <span style="color:#0000CA">designer</span> delivering smart interaction and delightful user experience.<br><br>
                        If you believe we can do something amazing together, drop me a line !
                    </p>

                </div>
                <div class="icons">
                        <a href="mailto:zh1gy2g0@gmail.com?Subject=Hello" target="_top"><i class="fas fa-paper-plane" style="font-size:24px;color:#0000CA;"></i></a>
                        
                        <a href="http://www.linkedin.com/in/ying-zhang-5430a9114"><i class="fab fa-linkedin-in" style="font-size:26px;color:#0000CA;"></i></a>
                </div>

            </div>

        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>
</html>