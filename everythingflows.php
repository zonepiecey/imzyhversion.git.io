<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ying's portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/logo_1.png" type="image/png">
    <link href="css/sidebar.css" rel="stylesheet">
	<link href="css/project.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans|Raleway:300,400,600,700" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/index.js"></script>
    
    
</head> -->
<?php  
include "header.php";
?>
<body onload="PageLoader()">
    <style>
        .dot2 {
           transform: scale(1.3);
           /*background: #E3E3E3;*/
           background: #1FEAFF;
       }
       .protitle2{
           /*color: black;*/
           color: #1FEAFF;
           visibility: visible;
       }
       .proline2{
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
                    <h1>EVERYTHING FLOWS</h1>
                    <img src="imgs/everythingflows/1.png" alt="" class="proimg">
                    <h2>ABSTRACT</h2>
                     <p>Returning to the hometown after year's absence, I experienced a strange and overwhelming journey. Everything has changed or distorted beyond recognition. It's like feeling homesick for a place that doesn't even exist. However, the memories are still vivid. That's where she had her first life lesson and where everything began. <br><br>This VR experience presents a surreal city views with a mixture of painting, video capture, sounds, dreaming, memory, and reality. You will be existed as an participant of Director's memory. You are welcome to explore, to see and to feel the space and the moments.</p>
                     <h2>ROLE</h2>
                     <p>Production Designer<br>Camera Assistant<br>Editing Assistant</p>
                     <h2>AWARD</h2>
                     <p><a href="https://schedule.sxsw.com/2018/films/VC114423"target="_blank">SXSW 2018</a></p>
    
                    <br><br><br>

<div data-configid="29648609/58910568" style="width:100%; height:700px;" class="issuuembed"></div>
<script type="text/javascript" src="http://e.issuu.com/embed.js" async="true"></script>

                    <br><br><br>
                    <br><br><br>

                    <img src="imgs/everythingflows/2.jpg" alt="" class="proimg">
                    <img src="imgs/everythingflows/3.jpg" alt="" class="proimg">
                    <img src="imgs/everythingflows/4.jpg" alt="" class="proimg">
                    <img src="imgs/everythingflows/5.jpg" alt="" class="proimg">
                    <br>
                    <div class="footer">
                        <p class="copyr">Copyright @ 2016 Ying Zhang</p>
                    </div>
                </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <script></script>
    <!-- /#wrapper -->
</body>
</html>