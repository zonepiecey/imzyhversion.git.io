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
                    <h1>HUTONG</h1>
                    <img src="imgs/hutong/1.jpg" alt="" class="proimg">
                    <h2>HUTONG IN LIVE</h2>
                    <p>After a brief introduction to the history of old city Beijing, the VR experience transitions to a virtual hutong courtyard. Hutongs are alleys formed by lines of siheyuan, traditional courtyard residences. Many neighborhoods were formed by joining siheyuan’s to another to form a hutong. You get to relive memories of kids jump roping and boating on the lake in a nearby park and interact with residents. Fast forward and now high rise buildings begin to emerge and surround the hutong houses.</p>
                    <h2>ROLE</h2>
                     <p>Interaction Designer</p>
                     <h2>AWARD</h2>
                     <p><a href="https://payments.cinequest.org/websales/pages/info.aspx?evtinfo=71289~78899376-35a9-4153-8303-e1557be2dc32&#.WsFvzdPwafU"target="_blank">Cinequest 2018</a></p>
                    <br><br><br>
                    <img src="imgs/hutong/3.png" alt="" class="proimg">
                    <img src="imgs/hutong/4.jpg" alt="" class="proimg">
                    <img src="imgs/hutong/5.jpg" alt="" class="proimg">
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