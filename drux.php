<?php  
include "header.php";
?>
<body onload="PageLoader()">
    <style>
        .dot6 {
            transform: scale(1.3);
            background: #1FEAFF;
        }
        .protitle6{
            color: #1FEAFF;
            visibility: visible;
        }
        .proline6{
            width: 30px;
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

        <div id="loader"><span class="loader-inner"></span></div>
        
        <!-- Page Content -->
        <div id="page-content-wrapper" style="display:none;">
            <div class="fixheader"></div>
                <div class="content-section">
                    <h1>DRUX</h1>
                    <img src="imgs/drux/1.png" alt="" class="proimg">
                    <h2>WHAT IS DRUX</h2>
                    <p>Drug interactions occur when the effect of a particular drug is altered when it is taken with another drug, or with food. Drux will display any interactions between your chosen drugs and explain the mechanism of each drug interaction.</p>
                    <p>With Drux, the user can easily access the camera on a mobile device and scan the barcode on the medicine’s packaging to check the interaction result.</p>
                    <br><br><br>
                    <h2>HOW IT WORKS</h2>
                    <img src="imgs/drux/2.png" alt="" class="proimg">
                    <h2>DESIGN PROCESS</h2>
                    <img src="imgs/drux/2-2.png" alt="" class="proimg">
                    <img src="imgs/drux/3.png" alt="" class="proimg">
                    <img src="imgs/drux/4.png" alt="" class="proimg">
                    <br>
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