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
                <p class="header-title">VEER</p>
            </div>

                <div class="content-section">
                    <h1>VeeR VR: Designing for Immersive Storytelling</h1>
                    <img src="imgs/veer/cover.jpg" alt=""class="proimg">

                    <h2>The Challenge: Navigating the Unknown</h2>
                    <p class="p">It was 2018, and VR was still a frontier. The hype was real, but the adoption? Not so much. VeeR VR had started as a community-driven platform, where anyone could upload VR content. It was a bold move—giving creators a space to share—but there was one major problem: user-generated content was inconsistent in quality, and VR headset adoption was slow. Viewers struggled to find engaging content, and as a result, engagement suffered.

VeeR needed a shift. It wasn’t just about showcasing VR content; it was about creating a premium cinematic experience that kept users coming back. That’s where I came in. As a UX designer, my mission was to redefine how users discovered and consumed VR content in an emerging medium. The challenge? Make something new feel intuitive.</p>

                    <hr>

                    <h2>As the UX designer, I owned, designed and delivered the experience for:</h2>
                    <span class="tag"><div class="tag-text">Research</div></span>
                    <span class="tag"><div class="tag-text">Prototyping</div></span>
                    <span class="tag"><div class="tag-text">Iteration</div></span>
                    <span class="tag"><div class="tag-text">Design reviews</div></span>
                    <span class="tag"><div class="tag-text">ROI</div></span>
                    <span class="tag"><div class="tag-text">UI components managements</div></span>
                    <span class="tag"><div class="tag-text">VR headset experience</div></span>
                    <p>As the UX designer for the VR platform, I'm proud that since VeeR VR 2.0's launch in 2018, we have achieved high consumer satisfaction rates, strong user retention, and best-in-class overall user experience.</p>
                    <img src="imgs/veer/rating.jpg" alt=""class="proimg">
                    <hr>

                    <!-- overview -->
                    <h2>Overview: From Community to Platform</h2>

                    <p>VeeR VR launched in 2017 as a VR community platform where creators could upload VR content for headset users to watch. However, due to limited VR headset adoption and lower UGC content quality in 2017-2018, we pivoted our focus to premium content when I joined in 2018. We began curating high-quality cinematic VR content and introduced a premium paid section on our platform.</p>
                    <hr>

                    <!-- feeds -->
                    <h2>Feeds - Case Study</h2>

                    <p>My first project was redesigning the Feeds section. User research indicated that users found the old Feeds cluttered and difficult to navigate. To reduce cognitive load, we evolved the Feeds design system. In the new version, content is organized by categories, and our machine learning-based recommendation system helps users discover content that matches their interests. This makes content exploration more intuitive in an immersive environment.</p>

                    <p>
                    As the result of this redesign,  the average number of content watched per session has inceased by <span style="color:black; font-weight:600"> 69.8% </span>
                    and the average length of watch time per session has increased by <span style="color:black; font-weight:600">34.4% </span> comparing with old version.
                    </p>
                    <img src="imgs/veer/feeds.jpg" alt=""class="proimg">
                    

                    <h3>Goal</h3>
                    <p>Increase App Engagement & User Retention.
                    <!-- <ul style="font-size: 1em; -webkit-font-smoothing: antialiased; text-align: left; font-family: 'Poppins', sans-serif; font-weight: 400;color: rgba(0, 0, 0, .68);">
                        <li>Increase the average number of content watched per session</li>
                        <li>Increase the average length of watch time per session</li>
                        <li>Shorten the time from entering the app to watching the first content</li></ul>
                    </p> -->

                    <h3>Design Solution</h3>
                    <img src="imgs/veer/solution.jpg" alt=""class="proimg-border">

                    <h3>Measure</h3>
                    <img src="imgs/veer/measure.jpg" alt=""class="proimg-border">

                    <h3>Data Analysis</h3>
                    <img src="imgs/veer/data_entry.jpg" alt=""class="proimg-border">

                    

                    
                    <h3>New Structure</h3>
                    <p>Rearranged navigation level to put well-performed entry at first place. The new information architecture:
                    </p>
                    <img src="imgs/veer/IA.jpg" alt=""class="proimg">

                    <img src="imgs/veer/before-after.jpg" alt=""class="proimg">
                    
                    <h3>Environment</h3>
                    <p>The previous veer land (the purple background on the back of the UI) was not VR friendly, many users feel it's too bright that causes eye strain. Another problem is the old veer land was not works well with the UI in terms of visual hierarchy and design aesthetics.
                    </p><p>
                    So at the end of feeds redesign, I prototyped a new background scene in Unity:
                    </p>
                    
                    <img src="imgs/veer/scene.jpg" alt=""class="proimg">
                    <img src="imgs/veer/feeds.jpg" alt=""class="proimg">



                    <hr>

                    <!-- Bookmark -->
                    <h2>Bookmark: Connecting Mobile and VR Experiences</h2>

                    <p>Our user research revealed distinct usage patterns between VR headsets and mobile devices. VR headsets present several challenges:<br>
                    - Limited comfort for extended wear<br>
                    - Potential motion sickness<br>
                    - Weight considerations, even with standalone headsets<br>
                    - Limited mobility, primarily used at home<br>
                    - Restricted usage duration<br>
                    </p>
                    <p>To address these limitations, we developed a cross-platform Bookmark system. Users can save content through our website or mobile app, which syncs to their VR app under the same account. This allows users to quickly access their saved content when they return to their VR headset.</p>
                    <img src="imgs/veer/bookmark_empty.jpg" alt=""class="proimg">
                    <hr>


                    <!-- Paid content -->
                    <h2>Paid Content</h2>
                    <p>In late 2018 we introduced a paid section on our platform. It was our first try for monetization, the model was pay-per-view for cinematic content.</p>
                    <img src="imgs/veer/paid content.jpg" alt=""class="proimg">
                    <hr>
                    
                    <!-- Player -->
                    <h2>Player: Up Next Optimization</h2>
                    <p>Making decision results in cognitive load. Desirable browsing behavior needs to be primed by default options you set for them. At the end of each watch section, we did some optimization to display some relavent content to our user, based on algorithm.</p>
                    <img src="imgs/veer/player.jpg" alt=""class="proimg">
                    <hr>
                    
                    <!-- VR experience -->
                    <h2>VR experience optimization</h2>
                    <p>It's all about User. We did many user experience optimazaiton: add voice input; toggle UI based on controller tracking during video playing; add trailer for paid content; 360 panorama image background preview in content details page; etc.</p>
                    <hr>

                    <!-- research -->
                    <h2>Research and Collaboration</h2>
                    <p>Our design and research teams maintain continuous dialogue with users through regular testing and validation. We also host the annual VeeR Creator Conference, bringing together outstanding global VR content creators to exchange ideas and production experiences.</p>
  

                     <img src="imgs/veer/meetup.png" alt=""class="proimg">


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