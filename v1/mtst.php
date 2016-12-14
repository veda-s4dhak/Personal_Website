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
				<div class="main_heading"><b>Switching a Microcontroller with a Transistor</b></div>
				<br>

				<div class="section_heading" style="padding-bottom: 10px;">Contents</div>
				<ul style="margin-top: 0px;">
					<li>Purpose</li>
					<li>Why?</li>
					<li>Components Needed</li>
					<li>Operating Principle</li>
					<li>Implementation and Analysis</li>
					<li>Conclusion</li>
					<li>Relays vs Transistors</li>
				</ul>

				<div class="section_heading" style="padding-bottom: 10px;">Purpose</div>
				In this tutorial we will learn how to switch a 5V microcontroller on and off with a transistor.
				<br><br>

				<div class="section_heading" style="padding-bottom: 10px;">Why?</div>
				Now you might ask why you would ever need to do such a thing. Personally I am using this system as a failsafe for my autonomous quadcopter. In the quadcopter the microcontroller (also called a flight controller) is responsible for the 
				quadcopter's movements. Incase the quadcopter goes out of control, I would like to be able to switch the microcontroller off so that the quadcopter is disabled. I do this by having the power to the microcontroller to be 
				able to be switched by a transistor. The transistor acts as a failsafe for the 
				system. I'm sure there numerous other applications of such a system, this is simply my use case.
				<br><br>

				<div class="section_heading" style="padding-bottom: 10px;">Relays vs. Transistors</div>
				Before we go on to the next section, its important to note that relays could also be used to switch the microcontroller. There are pros and cons to using a transistor vs relays and this is detailed in the table below. There are certain cases where relays are better used and transistors in some cases.
				<br><br>
				
				For the use case of switching a	microcontroller, I believe it is better to use a transistor because they 
				consume much less power than relays	and because since transistors are solid state they do not wear out as 
				compared to relays. 
				<br><br>
				
				<table style="margin: 0 auto;">
					<tr>
						<td>
							<div style="text-align: center; font-weight: bold;">Relays</div>
						</td>

						<td>
							<div style="text-align: center; font-weight: bold;">Transisitors</div>
						</td>
					</tr>
					<tr>
						<td>
							<ul style="margin-top: 0px;">
								<li>0 Closed Resistance</li>
								<li>Infinite Open Resistance</li>
								<li>Operate in Temperature Extremes</li>
								<li>Operate at 200Hz speeds</li>
								<li>Physically Wear Out (button piting)</li>
								<li>Consume more Power</li>
							</ul>
						</td>

						<td>
							<ul style="margin-top: 0px;">
								<li>Has a voltage drop and leakage current</li>
								<li>(not zero closed resistance or infinite open resistance)</li>
								<li>Operate below 90 degrees celcius</li>
								<li>Operate at MHz speeds</li>
								<li>Dont wear out since they are Solid State</li>
								<li>Can amplify analog signals</li>
								<li>Consume less power</li>
							</ul>
						</td>
					</tr>
				</table>
				
				<div class="section_heading" style="padding-bottom: 10px;">Components Needed</div>
				For this tutorial you will require the following components.
				<ul style="margin-top: 8px;">
					<li><a href="https://www.sparkfun.com/products/11021">Arduino</a> and its designated programming cable</li>
					<li>A 5V Microcontroller you are trying to switch (this could be an Arduino as well but for this tutorial we will use the <a href="http://www.hobbyking.com/hobbyking/store/__54299__Hobbyking_KK2_1_5_Multi_rotor_LCD_Flight_Control_Board_With_6050MPU_And_Atmel_644PA.html">KK2.1.5</a>)</li>
					<li>VN2460N3 n-channel MOSFET Transistor (sections below will explain exactly why we chose this transistor, DIGIKEY LINK: <a href="http://www.digikey.sg/product-detail/en/microchip-technology/VN2460N3-G/VN2460N3-G-ND/4902406">VN2460N3-G-ND</a>)</li>
					<li><a href="https://www.sparkfun.com/products/12794" >Jumper Wires</a></li>
				</ul>

				Note we are using a 5V microcontroller to make things easier because the Arduino is also a 5V microcontroller. Once you understand the theory you could design the system for a microcontroller with any voltage.
				<br><br>

				<div class="section_heading" style="padding-bottom: 10px;">Operating Principle</div>
				The schematic of the system is shown below. The target microcontroller in the diagram refers to the microcontroller that you are trying to switch (in my case this is the KK2.1.5). The control signal will come from one of the arduino output pins. Note that the ground connection for the arduino and the target microcontroller should be the same. This is to ensure both microcontrollers have the same reference voltages.
				<br><br>
				
				<div style="text-align: center;"><img src="/images/microcontroller_switch_schematic.png" align="middle"></div>
				<br>

				When a voltage is applied on the control signal coming from the arduino,  the n-channel MOSFET is turned on (i.e. a voltage, Vgs, is applied at the gate of the MOSFET). This Vgs, allows a certain amount of current to pass through the transistor and flow through into the target microcontroller and turns it on. We want a transistor that will allow about 30mA of current when turned on (this current is the requirement for the KK 2.1.5). Also we want as low of a voltage drop across the transistor so that most of the 5V voltage drop happens across the target microcontroller. <br><br>

				To find a transistor that meets these requirements you will need to read the I-V curves and parameters which are shown on the transistor's datasheet. To learn how to read I-V curves please refer to the following link <a href="https://en.wikibooks.org/wiki/Circuit_Theory/IV_curves">Transistor I-V Curves Tutorial</a>.<br>
				<br>

				<div class="section_heading" style="padding-bottom: 10px;">Implementation and Analysis</div>
				In my case I was driving the control signal with my Arduino Pro Mini and a KK 2.1.5 board was my target microcontroller. The KK 2.1.5 requires at minimum about 4.3V and 30mA which was measured using a variable power supply as shown below (on the left the KK is off at 4.2V, 30mA and on at 4.4V, 30mA). The Arduino has a digital output of 5V when on and 0V when off. Therefore we want a microcontroller than when applied with 5V at the gate with reference to the source, allows a current of 30mA and has a low voltage drop. When applied with 0V the current allowed should be zero. The VN2460N3 logic level transistor was found to be most appropriate after testing a few transistors.<br>
				<br>
				
				You can see in the first picture that the microcontroller is turned off (no writing on the display) at 4.2 V. In the second microcontroller at 4.4V the microcontroller is turned on (there is writing on the display). Note the microcontroller also turns on at 4.3V.<br>
				<br>

				<table>
					<tr>
						<td>
							<div style="text-align: center;"><img src="/images/kk_power_reading_off.png" height="60%" width="60%" align="middle"></div>
						</td>
						
						<td>
							<div style="text-align: center;"><img src="/images/kk_power_reading_on.png" height="60%" width="60%" align="middle"></div>
						</td>
					</tr>
				</table>
				<br>

				Note that each transistor also has a leakage current. Leakage current is the amount of current that leaks through the transistor when it is in the off state. The leakage current specifications can be found in the datasheet. We want to choose a transistor which has a leakage current that is much lower than the amount of current that run the circuit (much lower than 30mA). If there is too much leakage current then that means that the transistor is not able to switch off the circuit and therefore choosing a transistor with the right leakage current is important. <br>
				<br>

				Transistors also have a parasitic capacitance. If a voltage is applied at the gate of a transistor and then taken away, then there may be a parasitic capacitance that will keep the charge on the gate. This will mean that the voltage at the gate will stay at the on state even though the control signal is not applying an on state. This means that the transistor will not turn off. The VN2460N3 transistor that was chosen, loses the charge stored on the gate quickly and therefore it has low parasitic capacitance. In transistors where the parasitic capacitance is high, a resistor should be placed between gate and source which will drain out the charge. Note that if the resistor value is too low, then the charge will drain out too fast and the transistor will never have enough charge to turn on. On the other hand if the resistance is too high then not enough charge will drain and the parasitic capacitance effects will still apply. For logic level transistors a resistance between 50k Ohms and 100k Ohms will work. You can try resistances between this range and go up or down as needed.  
				<br><br>
				
				<div class="section_heading" style="padding-bottom: 10px;">Conclusion</div>
				Based on the above information you should be able to switch a microcontroller on and off electronically. Please note that the transistor that you need to use will be based on the requirements of the main microcontroller you are using and the control signal. This system is very useful, for example if your control signal to the transistor is controlled by a transmitter, then you can have a switch that is wirelessly controlled via radio signals. This is what I have done for my quadcopter, and so I am able to turn it on or off wirelessly.<br>
				<br>
				If you have any questions please send me an email at <a href="mailto:a22agarw@outlook.com">a22agarw@outlook.com</a><br>

				<!--MAIN-->

			</div>
		</div>

		<div id="footer" style="background-color: #FFF;">
			<div id="footer_text" style="background-color: #FFF; font-size: 10px;">© Copyright 2016 Anish Agarwal</div>
		</div>

	</body>
</html>