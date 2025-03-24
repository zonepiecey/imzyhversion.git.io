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
                    <div class="section-title">
                        <h1>About</h1>
                    </div>
                    <div class="section-content">
                        <p id="display1">
                        Hi, I'm Lumi,
                        Sr. Product Designer at PwC. Designing and leading product experiences for firm service tools and client-facing digital solutions across industries. Creating enterprise and customer-facing products for both mobile and desktop, leveraging strategic insights, operational best practices, and cutting-edge technologies to drive innovation, accelerate development, and optimize product launches.
                            
                        </p>
                    </div>
                    <div class="icons">
                                    <a href="mailto:zh1gy2g0@gmail.com?Subject=Hello Ying!" target="_top"><i class="fas fa-paper-plane" style="font-size:24px;color:#0100c6;"></i></a>
                                
                                    <a href="http://www.linkedin.com/in/ying-zhang-5430a9114"><i class="fab fa-linkedin-in" style="font-size:26px;color:#0100c6;"></i></a>
                    </div>
                </div>
                  
                <div class="about-section">
                    <div class="section-title">
                        <h1>Skills</h1>
                    </div>
                    <div class="section-content">
                        <p id="display1">
                        Using AI to push our industry forward—not to replace human creativity, but to supercharge it. The real magic happens when we combine human intuition with AI innovation, unlocking possibilities we never imagined.
                        Visual Design
                        Web Design
                        Branding
                        Wireframing
                        Product Design
                        lllustration
                        UI Animation
                        </p>
                    </div>
                </div>
                <div class="about-section">
                    <div class="section-title">
                        <h1>Recognition</h1>
                    </div>
                    <div class="section-content">
                        <p id="display1">
                        Visual Design
                        Web Design
                        Branding
                        Wireframing
                        Product Design
                        lllustration
                        UI Animation
                        </p>
                    </div>
                </div>
                <div class="about-section">
                    <div class="section-title">
                        <h1>Contact</h1>
                    </div>
                    <div class="section-content">
                        <p id="display1">
                        Visual Design
                        Web Design
                        Branding
                        Wireframing
                        Product Design
                        lllustration
                        UI Animation
                        <span style="color:#0100c6; font-weight:600">designer</span>
                            <a href="mailto:zh1gy2g0@gmail.com?Subject=Hello Ying!" target="_top">
                                <span style="text-decoration: underline #0100c6; text-decoration-thickness: 6px;">drop me a line</span>
                            </a>!
                        </p>
                    </div>
                </div>

            </div>

        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>
</html>