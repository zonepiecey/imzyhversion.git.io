<?php  
include "header.php";
?>

<body>
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

        <!-- #page-content-wrapper -->
        <div id="page-content-wrapper" >
        
        <!-- canvas -->
            <div class="canvas">
                <img id="logo_2" src="imgs/logo_2.png" alt="">
                <img id="logo_3" src="imgs/logo_3.png" alt="">
                <img class="dot_group" src="imgs/dot_group.png" alt="">
                <div id="mouse-icon">
                  <div id="scroll-wheel"></div>
                </div>
            </div>
        <!-- /canvas -->
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
        <div class="section">

        </div>
        <!-- project-grid -->
            <!-- <div class="project-grid">
                <div class="tnframe">
                    <a href="veer.php">
                      <img src="imgs/tnimg/veer.png" alt="Avatar" class="tnimg">
                      <div class="overlay">
                        <div class="tntext">
                            <p class="tn-name">Veer</p>
                            <p class="tn-text">VR</p></div>
                      </div>
                    </a>
                </div>
                <div class="tnframe" data-cat="mobile">
                    <a href="acro.php">
                      <img src="imgs/tnimg/acro.png" alt="Avatar" class="tnimg">
                      <div class="overlay">
                        <div class="tntext">
                            <p class="tn-name">Acro</p>
                            <p class="tn-text">Mobile</p>
                        </div>
                      </div>
                    </a>
                </div>
                <div class="tnframe">
                    <a href="filmily.php">
                      <img src="imgs/tnimg/filmily.png" alt="Avatar" class="tnimg">
                      <div class="overlay">
                        <div class="tntext">
                            <p class="tn-name">Filmily</p>
                            <p class="tn-text">Mobile</p>
                        </div>
                      </div>
                    </a>
                </div>
                <div class="tnframe">
                    <a href="drux.php">
                      <img src="imgs/tnimg/drux.png" alt="Avatar" class="tnimg">
                      <div class="overlay">
                        <div class="tntext">
                            <p class="tn-name">Drux</p>
                            <p class="tn-text">Mobile</p>
                        </div>
                      </div>
                    </a>
                </div>
                <div class="tnframe">
                    <a href="everythingflows.php">
                      <img src="imgs/tnimg/flows.png" alt="Avatar" class="tnimg">
                      <div class="overlay">
                        <div class="tntext">
                            <p class="tn-name">Everything Flows</p>
                            <p class="tn-text">VR</p>
                        </div>
                      </div>
                    </a>
                </div>
                <div class="tnframe">
                    <a href="onceuponacloud.php">
                      <img src="imgs/tnimg/cloud.png" alt="Avatar" class="tnimg">
                      <div class="overlay">
                        <div class="tntext">
                            <p class="tn-name">Once Upon a Cloud</p>
                            <p class="tn-text">VR</p>
                        </div>
                      </div>
                    </a>
                </div>
                <div class="tnframe">
                    <a href="muggle.php">
                      <img src="imgs/tnimg/muggle.png" alt="Avatar" class="tnimg">
                      <div class="overlay">
                        <div class="tntext">
                            <p class="tn-name">Muggle</p>
                            <p class="tn-text">VR</p></div>
                      </div>
                    </a>
                </div>
                <div class="tnframe">
                    <a href="sniff.php">
                      <img src="imgs/tnimg/sniff.png" alt="Avatar" class="tnimg">
                      <div class="overlay">
                        <div class="tntext">
                            <p class="tn-name">Sniff</p>
                            <p class="tn-text">Mobile</p>
                        </div>
                      </div>
                    </a>
                </div>
                <div class="tnframe">
                    <a href="hutong.php">
                      <img src="imgs/tnimg/hutong.png" alt="Avatar" class="tnimg">
                      <div class="overlay">
                        <div class="tntext">
                            <p class="tn-name">Hutong in Live</p>
                            <p class="tn-text">VR</p>
                        </div>
                      </div>
                    </a>
                </div>
            </div> -->
        <!-- /project-grid -->
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

   

    <!-- Menu Toggle Script -->
    <script>
        var x = $(".dot_group");
            y = $("#logo_3");
            z = $("#logo_2");
            $("#wrapper").on("mousemove", function(t) {
                var a = -($(window).innerWidth() / 2 - t.pageX) / 20,
                    b = ($(window).innerHeight() / 2 - t.pageY) / 40;
                    c = ($(window).innerHeight() / 2 - t.pageY) / 20;
                    d = ($(window).innerWidth() / 2 - t.pageY) / 40;
                x.attr("style", "transform: translateY(" + a + "px) translateX("+d+"px) rotateY(" + a + "deg) rotateX(" + c + "deg);-webkit-transform: rotateY(" + a + "deg) rotateX(" + c + "deg);-moz-transform: rotateY(" + a + "deg) rotateX(" + c + "deg)")
                y.attr("style", "transform: translateY(" + b + "px) rotateX(" + b + "px);-webkit-transform: translateY(" + b + "px) translateX(" + b + "px);-moz-transform: translateY(" + b + "px) translateX(" + b + "px)")
                z.attr("style", "transform: translateY(" + d + "px) translateX(" + c + "px);-webkit-transform: translateY(" + d + "px) translateX(" + c + "px);-moz-transform: translateY(" + d + "px) translateX(" + c + "px)")
        })
</script>


</body>
</html>