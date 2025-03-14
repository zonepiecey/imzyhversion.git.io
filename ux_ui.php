<?php  
include "header.php";
?>

<body onload="PageLoader()">
    <script>
            $(function(){
                $("#sidebarWrapper").load("sidebar.html");
            });
    </script>
	<div id="wrapper">
    
        <!-- Sidebar -->
        <div id="sidebarWrapper">
        </div>

        <div class="prooverlay"></div>

        <!-- /#sidebarWrapper -->
        <div id="loader"><span class="loader-inner"></span></div>

        <!-- Page Content -->
        <div id="page-content-wrapper" style="display:none;">
            <div class="fixheader">
                <p class="header-title">OCEAN  FRIENDS</p>
            </div>
                <div class="content-section">
                    <h1>UX UI Works</h1>
                    <p class="p">To showcase some of my UX/UI works, mostly has been done during my master's study. I use tools including Adobe Creative Suites, Figma, Sketch, Flinto, Principle, Framer, InVision, Zeplin, Unity 3D etc.</p>
                    <hr>

                    <h2>Filmily: Filmmaking Tool</h2>
                    
                    <img style="margin-top:0"src="imgs/uxui/filmily/1.jpg" alt=""class="proimg">
                    <img src="imgs/uxui/filmily/2.jpg" alt=""class="proimg">
                    <hr>

                    <p>Case Study:</p>

                    <div id="adobe-dc-view"style="width: 904px; height: 500px; margin-top: 32px; "></div>
                    <script src="https://documentcloud.adobe.com/view-sdk/main.js"></script>
                    <script type="text/javascript">
                        document.addEventListener("adobe_dc_view_sdk.ready", function()
                        {
                            var adobeDCView = new AdobeDC.View({clientId: "b3e423281d6a4e7ca29041093a927290", divId: "adobe-dc-view"});
                            adobeDCView.previewFile(
                            {
                                content:   {location: {url: "imgs/pdf/Filmily_case study.pdf"}},
                                metaData: {fileName: "Filmily Case Study.pdf"}
                            },

                            {showDownloadPDF: false}

                            );
                        });
                    </script>
                    
                    
                    <hr>
                     
                    <h2>Drux: Drug Interaction Checker</h2>
                    <img src="imgs/uxui/drux/1.jpg" alt=""class="proimg">
                    <img src="imgs/uxui/drux/3.jpg" alt=""class="proimg">
                    <!-- <div class="img-grid" style="font-size:0;"> -->
                        <img src="imgs/uxui/drux/2.jpg" alt=""class="proimg">
                        <img src="imgs/uxui/drux/4.jpg" alt=""class="proimg">
                    <!-- </div> -->
                    <img src="imgs/uxui/drux/2-2.jpg" alt=""class="proimg">
                    <hr>

                    <h2>Sniff: Parcel Tracking</h2>
                    <img src="imgs/uxui/sniff/1.gif" alt=""class="proimg">
                    <img src="imgs/uxui/sniff/1.jpg" alt=""class="proimg">
                    <img src="imgs/uxui/sniff/2.jpg" alt=""class="proimg">
                    <img src="imgs/uxui/sniff/3.jpg" alt=""class="proimg">

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