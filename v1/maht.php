<?php

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width; initial-scale=1.0;  minimum-scale=1.0;">
		<!--jQuery CDN-->
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<!--Custom Reference-->
		<link rel="stylesheet" type="text/css" href="main.css"/>
		<script src="main.js"></script>		
		<!--GA-->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-84318170-1', 'auto');
		  ga('send', 'pageview');
		</script>
	</head>

	<body>

		<!--HEADER-->
		
		<div style="width: 100%; position: fixed; margin: 0 auto;">
			<div id="main_title" style="z-index: 2; background-color: #FFF; width: 100%; padding: 13px;">
				<div id="header_title_1" style="text-align: center;">
					<a class="name_link" href="http://anishagarwal.org/" style="text-align: center; font-size: 30px;"><b>Anish Agarwal</b></a>
				</div>
				<table id="header_title_2" style="width: 80%; max-width: 1000px; margin: 0 auto;">
					<tr>
						<td style="vertical-align: bottom;">
							<a class="name_link" href="http://anishagarwal.org/" style="font-size: 30px;"><b>Anish Agarwal</b></a>
						</td>
						<td style="vertical-align:bottom; margin: 0px; float: right;">
							<div style="display: inline-block;">
								<a style="vertical-align:bottom; font-size: 20px; float: right; margin-left: 10px; margin-right: 10px;">Engineer</a>
							</div>
							<div style="display: inline-block;">
								<img src="images/electronics_icon.png" style="vertical-align:bottom; float: right;"height="40" width="40" alt="Error">
							</div>
							<div style="display: inline-block;">
								<a style="vertical-align:bottom; font-size: 20px; float: right; margin-left: 10px; margin-right: 10px;">Hobbyist</a>
							</div>
							<div style="display: inline-block;">
								<img src="images/quad_main_icon.png" style="vertical-align:bottom; float: right;"height="30" width="60" alt="Error">
							</div>
							<div style="display: inline-block;">
								<a style="vertical-align:bottom; font-size: 20px; float: right; margin-left: 10px; margin-right: 10px;">Entrepreneur</a>
							</div>
							<div style="display: inline-block;">
								<img src="images/entrepreneur_icon.png" style="float: right;" height="40" width="40" alt="Error">
							</div>
						</td>
					</tr>
				</table>
			</div>
			<div style="z-index: 1; margin: 0; min-width: 300px; background-color: #3399FF; width: 100%;">
				<table style="margin: 0 auto;">
					<tr>
						<td class="navbar_link_box">
							<a href="http://anishagarwal.org/diy_guides.php" class="navbar_link">DIY Guides</a>
						</td>
						<td class="navbar_link_box">
							<a href="http://anishagarwal.org/btc_menu.php" class="navbar_link">BTC</a>
						</td>
						<td class="navbar_link_box">
							<a href="http://anishagarwal.org/projects.php" class="navbar_link">Projects</a>
						</td>
						<td class="navbar_link_box">
							<a href="http://anishagarwal.org/resume_web.php" class="navbar_link">Resume</a>
						</td>
						<td class="navbar_link_box">
							<a href="http://anishagarwal.org" class="navbar_link">Home</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	
		<!--CONTENT-->

		<div id="main_content" style="background-color: #FFF; z-index: 0; margin: 0 auto; width: 100%;">
			<div id="main_container" style="background-color: #FFF; width: 90%; min-width: 300px; max-width: 1000px; margin: 0 auto;">
				
				<!--MAIN-->
				<div id="top_space" style="height: 10px"></div>
				<br>
				<div class="main_heading"><b>FollowCam</b></div>
				<br>

				<div style="text-align: center"><a href="https://github.com/veda-s4dhak/FollowCam">FollowCam Github</a><br></div>
				<br>

				The multi-rotor system shown below can track the human form autonomously. The system uses image processing in order to detect and track the human form. Once the image processing is confident that a user is in the field of vision, then the control system is activated and begins to send commands to the motors to rotate accordingly. A PID controller (Proportional, Intergral and Derivative) is used to control the amount of power going to each motor.<br>
				<br>

				The system is designed by students Anish Agarwal, Victor Ojukwu, Stephen Ting, Zeki Sherif and Shiva Talwar at the University of Waterloo with the help of Prof. Daniel Davison.<br>
				<br> 
				
				The major creation of this project was the design of a compact and light-weight embedded system which can do both image processing and real-time controls analysis. The design which we created integrated a single board computer, the Raspberry PI and two standard microcontrollers. The Raspberry PI was used for image processing and the two microcontrollers were responsible for control theory analysis and outputting to the motors. The custom designed embedded system is shown in the 4 figures below. The pictures below show the system.<br>
				<br> 

				The reset of the quadcopter contained stock parts consisting of Electronic Speed Controllers, Brushless DC Motors (<a href="http://www.hobbyking.com/hobbyking/store/__66423__Multistar_V2_2206_2150KV_Motor_The_34_Baby_Beast_34_V2_.html">"The Baby Beast"</a>), a Lithium Polymer Battery, Carbon Fibre frame and 5 inch propellers. Different configurations were tried to produce the optimal design. Video demonstrations of the working system are at the bottom of the page.<br>
				<br> 
				<br>

				<div style="text-align: center">
					<img style="margin: 10px;" src="images/pcb_pic_1.png" alt="drdc" width="300" align="middle">
					<img style="margin: 10px;" src="images/pcb_pic_4.png" alt="drdc" width="300" align="middle"><br>
					<img style="margin: 10px;" src="images/pcb_pic_2.png" alt="drdc" width="300" align="middle">
					<img style="margin: 10px;" src="images/pcb_pic_3.png" alt="drdc" width="300"  align="middle"><br>
				</div>

				<br><br>   
				<div style="text-align: center;">
					<iframe class="youtube-embed" src="https://www.youtube.com/embed/D9XE87QOBpg" frameborder="0" allowfullscreen></iframe>
				</div>	

				<br>   
				<div style="text-align: center;">
					<iframe class="youtube-embed" src="https://www.youtube.com/embed/N3HvmY-s_i8" frameborder="0" allowfullscreen></iframe>
				</div>

				<br>
				<div style="text-align: center;">
					<iframe class="youtube-embed" src="https://www.youtube.com/embed/aA82wMc2FgU" frameborder="0" allowfullscreen></iframe>
				</div>

				<br><br>

				<!--MAIN-->

			</div>

		<div id="footer" style="background-color: #FFF;">
			<div id="footer_text" style="background-color: #FFF; font-size: 10px;">© Copyright 2016 Anish Agarwal</div>
		</div>

		</div>
	</body>
</html>