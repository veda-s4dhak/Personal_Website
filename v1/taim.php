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
			<div id="main_container" style="background-color: #FFF; idth: 90%; min-width: 300px; max-width: 1000px; margin: 0 auto;">

				<!--MAIN-->
				<div id="top_space" style="height: 10px"></div>
				<br>
				<div class="main_heading"><b>Two-Phase AC Induction Motor</b></div>
				<br>

				<br>
				My combined interest in power electronics, embedded systems and motor design led me to design my own two-phase induction motor. Recently, Tesla motors is receiving a lot of attention for their full electric vehicles. I was very interested in the concept of how these cars converted electrical energy into mechanical energy and as such I decided to build my own two-phase AC induction motor. This project was a very good learning experience and I found design work such as this bring me profound satisfaction.<br> 
				<br>
				The basic design of the two-phase ac induction motor in this project consists of 5 main components: the embedded system, power source, h-bridge, coils and the rotor. The embedded system receives input from the user and turns on the appropriate relays. The power source provides two phase electricity to the motor. The power source uses a transformer rated at 16.5V and 2.42 A which is connected to mains supply. A capacitor was used to generate the 90° phase difference in two phases of the power souce. The power is sent through the relays and into the coils. The relays are arranged to form an H-Bridge for each of the coil pairs. This H-Bridge allows the current to flow through the coil pairs in either direction.  The h-bridge allows the current to flow through one coil pair in both directions. This allows the coil pair to be reversible in polarity. Together coils generate a rotating magnetic field which applies a force on the rotor and causes the rotor to spin. Video demonstrations of the system can be seen below.<br>
				<br> 

				<br>   
				<div style="text-align: center;">
					<iframe class="youtube-embed" src="https://www.youtube.com/embed/QNPkDA1VuIU" frameborder="0" allowfullscreen></iframe>
				</div>	

				<br>   
				<div style="text-align: center;">
					<iframe class="youtube-embed" src="https://www.youtube.com/embed/1rck8Ohm0cQ" frameborder="0" allowfullscreen></iframe>
				</div>

				<br>
				<div style="text-align: center;">
					<iframe class="youtube-embed" src="https://www.youtube.com/embed/sixbarqUY6Y" frameborder="0" allowfullscreen></iframe>
				</div>

				<!--MAIN-->

			</div>
		</div>

		<div id="footer" style="background-color: #FFF;">
			<div id="footer_text" style="background-color: #FFF; font-size: 10px;">© Copyright 2016 Anish Agarwal</div>
		</div>

	</body>
</html>