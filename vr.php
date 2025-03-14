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
                    <h1>Virtual Reallity Projects</h1>
                    <p>I’m a big fan of the way that VR can already enhance lives far beyond a mere gaming experience. I've been designing for VR since 2017. Here are some projects I have done.</p>
                    <hr>

                    <h2 style="margin-top:40px">Everything Flows
                    </h2>
                    <p>Everying Flows is a award-winning VR project. This VR experience presents a surreal city views with a mixture of painting, video capture, sounds, dreaming, memory, and reality. Audience will be existed as an participant of Director's memory. 
                   </p>
                   <p>
                    As the <span style="font-weight:bold">Production designer</span>, I've participated the end-to-end design workflow including:</p>

                    <span class="tag"><div class="tag-text">Production design</div></span>
                    <span class="tag"><div class="tag-text">Camera assiatant</div></span>
                    <span class="tag"><div class="tag-text">Stiching assiatant</div></span>
                    <img src="imgs/vr/everythingflows/award.jpg" alt=""class="proimg">
                    <img src="imgs/vr/everythingflows/cover.jpg" alt=""class="proimg">
                    <hr>
                    
                    <h2>Hutong Days VR
                    </h2>

                    <p>Hutongs are alleys formed by lines of siheyuan, traditional courtyard residences of Beijing. considered by many to be the heart and the soul of the city. Some of the structures date back to the 13th century, but as the city undergoes a building boom, the old neighborhoods are disappearing. </p>
                    
                    <p>Hutong Days VR combines interactive VR, 360 video and voiceover narration with a 3D recreation of the neighborhoods for an immersive experience. When viewers put on VR headsets, they can explore the narrow streets and courtyards, listen to the sounds of neighbors chatting and interact with different characters.</p>

                    <p>   
                    As the <span style="font-weight:bold">UX designer</span>, I've worked closely with post-production team and participated the Unity development workflow including:</p>

                    <span class="tag"><div class="tag-text">Storyboarding</div></span>
                    <span class="tag"><div class="tag-text">User flow</div></span>
                    <span class="tag"><div class="tag-text">User testing</div></span>
                    <span class="tag"><div class="tag-text">Unity development</div></span>

                    <img src="imgs/vr/hutong/screenshots.jpg" alt=""class="proimg">
                    <img src="imgs/vr/hutong/cover.jpg" alt=""class="proimg">
                    <hr>

  



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