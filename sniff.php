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
                    <h1>SNIFF</h1>
                    <img src="imgs/sniff/1.gif" alt="" class="proimg">
                    <h2>WHAT IS SNIFF</h2>
                    <p>Sniff is a parcel tracking application on mobile devices, designed for customers to track parcels from different carriers. This is a weekend design sprint. I was inspired by my roomate who is an online shopaholic and she is hard to organize her parcel tracking status. </p>
                    <br><br><br>
                    <h2>WIREFRAMES</h2>
                    <img src="imgs/sniff/wf.png" alt="" class="proimg"><!-- 
                    <h2>DESIGN FOCUS</h2>
                    <p>I came up with this idea from my roomate who is a online shopaholic. She always messes up with her parcels, </p> -->
                    <h2>FIANL DESIGN</h2>
                    <img src="imgs/sniff/1.png" alt="" class="proimg">
                    <img src="imgs/sniff/2.png" alt="" class="proimg">
                    <img src="imgs/sniff/3.png" alt="" class="proimg">
                    <br><br><br>
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