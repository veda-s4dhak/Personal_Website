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
				<div class="main_heading"><b>Design of a Simple Programmable Flight Controller for Aerial RC Vehicles</b></div>
				<br>

				<div class="section_heading" style="padding-bottom: 10px;">Contents</div>
				<ul style="margin-top: 0px;">
					<li>Purpose</li>
					<li>Why?</li>
					<li>Components Needed</li>
					<li>System Schematic</li>
					<li>Operating Principle</li>
					<li>Code Template</li>
					<li>Conclusion</li>
				</ul>

				<div class="section_heading" style="padding-bottom: 10px;">Purpose</div>
				In this tutorial you will learn about how to design a simple programmable flight controller for Aerial RC Vehicles. This programmable flight controller will give you an easy to use interface with which you can fit extra sensors and actuators, and program software to make the RC vehicle being used more intelligent and aware.<br>
				<br>

				<div class="section_heading" style="padding-bottom: 10px;">Why?</div>
				Having a programmable flight controller is useful if you want to learn how embedded systems work, want to learn Control Theory, need to integrate more electronics or if you want to design autonomous commands for your multirotor like I have done. Using the system described in this tutorial I was able to design a quadrotor that detects and tracks humans autonomously. Demonstrations of the human tracking system can be see at the following page: <a href="http://anishagarwal.org/maht.php">Quad-rotor Autonomous Human Tracking</a>. There are other programmable flight controllers on the market for example, ArduPilot, however, in my experience the system outlined in this tutorial is easer to use and less expensive. I believe that a simple programmable flight controller can be a powerful tool and I hope 
				this page can help you build your own.<br>
				<br>
				
				<div class="section_heading" style="padding-bottom: 10px;">Components Needed</div>
				For this tutorial, we will be using an <b>Arduino Pro Mini in the 5V/16MHz configuration</b>. This arduino is good because of its small size, and it has all of the peripherals needed particularly 6 PWM (Pulse-Width Modulated) outputs, SPI, I2C, UART, Digital I/Os and Analog I/Os. All in all its a lot of useful electronics fitted into a small package. Note that the Arduino Pro Mini comes without <b>headers</b> and so you will have to solder headers into it. To program the Arduino Pro Mini we will need a <b>USB to USB Mini-B cable</b> and an <b>FTDI connector</b>.<br>
				<br>
				We will also need some <b>female-to-female jumper wires</b>. We will need a <b>KK 2.1.5</b> which is a standard multi-purpose flight controller. The KK2.1.5 can be used for RC Planes, Multi-rotor or other RC vehicles. Note that the KK 2.1.5 is a 5V system which makes it much easier to interface with the Arduino Pro Mini.<br> 
				<br>
				Lastly we will also need an <b>RC Receiver/Transmitter pair</b>. This pair is what you use to manually control the RC Craft currently.<br> 
				<br>
				Links for all parts mentioned are given below.<br>
				<ul>
					<li><a href="https://www.sparkfun.com/products/11113">Arduino Pro Mini</a></li>
					<li><a href="https://www.sparkfun.com/products/116">Male Headers</a> (you will need to solder these into the Arduino Pro Mini)</li>
					<li><a href="https://www.sparkfun.com/products/13243"> USB to USB Mini-B Cable</a></li>
					<li><a href="https://www.sparkfun.com/products/9716">FTDI Connector</a></li>
					<li><a href="https://www.sparkfun.com/products/12796">Female-to-Female Jumper Wires</a></li>
					<li><a href="http://www.hobbyking.com/hobbyking/store/__54299__Hobbyking_KK2_1_5_Multi_rotor_LCD_Flight_Control_Board_With_6050MPU_And_Atmel_644PA.html">KK 2.1.5 Flight Controller</a></li>
					<li><a href="http://www.hobbyking.com/hobbyking/store/__62710__Turnigy_TGY_i6_AFHDS_Transmitter_and_6CH_Receiver_Mode_2_.html">Turningy iA6 Transmitter/Receiver</a></li>
				</ul>

				<div class="section_heading" style="padding-bottom: 10px;">Schematic</div>
				Before explaining how everything functions together, it will be easier if we build the circuit first so that it is understood how everything connects together. The figure below shows the pin names for each of the pins on the KK 2.1.5 board. These pin names will be referred to with regards to the pin connections.<br>
				<br>
				<div style="text-align: center;"><img src="/images/kk_2.1.5_pin_reading.png" height="60%" width="60%" align="middle"></div>
				<br>
				The pinout for the Arduino Pro Mini board is shown below. We will refer to these pin assignments in the tutorial.<br>
				<br>
				<div style="text-align: center;"><img src="/images/prominipdf.png" height="90%" width="90%" align="middle"></div>
				<br>
				The pin out for the ia6 receiver is shown in picture below. These pinouts will be referred to with regards to the pin connections in the schematic.<br>
				<br>
				<div style="text-align: center;"><img src="/images/transmitter_pin_reading.png" height="60%" width="60%" align="middle"></div>
				<br>
				The main schematic is shown below. Pins 7d, 7e, 7f and 7g correspond to the outputs from the receiver. Pins 3a, 3b, 3c and 3d correspond to the inputs into the KK 2.1.5 flight controller. Pins 2,3,4 and 5 on the arduino are the input pins and pins 6, 9, 10 and 11 are the pulse-width-modulated output pins. Note that the receiver, arduino and the KK 2.1.5 are all connected to the same VCC and GND. This is because all three components function at the same voltage of 5V. Thus when you power any one of the three components, if they are connected as above, then the other two components will also have power, given that the power source has enough current output (approx. 100 to 150mA).<br>
				<br>
				<div style="text-align: center;"><img src="/images/flight_controller_schematic.png" height="60%" width="60%" align="middle"></div>
				<br>

				<div class="section_heading" style="padding-bottom: 10px;">Operating Principle</div>
				In the system that we have described above, essentially we are using the arduino as a middle man between the receiver and the KK 2.1.5. In a normal RC system (without the Arduino) the receiver would connect straight into the KK. The receiver would take the commands coming from the user via the transmitter, and would send them straight into the flight controller. The flight controller would then output appropriate signals to the actuators (motors, servos, etc.) based on the commands it was sent from the receiver.<br>
				<br>
				In the system described above however, we have put an arduino in the middle. In this system the commands from the user come into the receiver, which then sends it to the arduino. Based on the software which we program into the Arduino, it will output the appropriate commands to the actuators (motors, servos, etc.). This allows a wide flexibility on what should be outputted based on the incoming commands. Furthermore, extra sensors such as LiDARs, UltraSonics sensors, barometer, IMUs, etc. can be connected to the arduino to get further data and make the output to the actuators more intelligent.<br>
				<br>
				For example, if you connect a GPS to the arduino. Then based on the data the arduino gets from the receiver and the GPS, the arduino can send corresponding commands to the KK which will then send the output to the actuators to make the system move to certain GPS coordinates.<br>
				<br>
				Its important to note that we can also do the entire system
				with the Arduino and the receiver and to leave the KK out. The reason why we use the KK is because it provides us with optimized self-balancing algorithims, so that we don't need to recreate the basic quadcopter balancing algorithims, and can focus on more important commands.<br>
				<br>
				Furthermore, by having a redundant KK mircocontroller, we can implement a transistor switch on the KKs power through the Arduino. This will allow us to power-off, reset and power-on the KK microcontroller in-mid flight. This feature is useful as a failsafe on the quadcopter. The DIY implementation for this transistor switch is provided at the following link: <a href="http://anishagarwal.org/mtst.php">Transistor Switch</a><br>
				<br>
				The KK 2.1.5 has a lot more valuable features which makes it a recomended addition. (Note: The code below has been provided only for the configuration where the KK 2.1.5 has been included).<br>
				<br>

				<div class="section_heading" style="padding-bottom: 10px;">Code Template</div>
				This section provides a sample template of code that can be used to make the system described above function. The code can be uploaded to the arduino via the USB to USB Mini-B cable and FTDI connector mentioned above. This code is only provided as a template and will work only for manual control. Further code will need to be designed by you for sensor integration, and more intelligent algorithims.<br>
				<br>

				<!--==========================Code==========================-->

				#include "Servo.h"<br>
				#include "Wire.h"<br>
				<br>
				//Input Pin Declarations<br>
				int const AIL_RX_PIN = 2;<br>
				int const ELE_RX_PIN = 3;<br>
				int const THR_RX_PIN = 4;<br>
				int const RUD_RX_PIN = 5;<br>
				<br>
				//Output Pin Declarations<br>
				int const AIL_TX_PIN = 6;<br>
				int const ELE_TX_PIN = 9;<br>
				int const THR_TX_PIN = 10;<br>
				int const RUD_TX_PIN = 11;<br>
				<br>
				//Input Variable Declarations<br>
				int ail_input;<br>
				int ele_input;<br>
				int thr_input;<br>
				int rud_input;<br>
				<br>
				//Output Variable Declarations<br>
				int ail_output;<br>
				int ele_output;<br>
				int thr_output;<br>
				int rud_output;<br>
				<br>
				//Delay Declaration<br>
				int const DELAY = 0;<br>
				<br>
				//PWM Declarations<br>
				Servo ail,ele,thr,rud;<br>
				<br>
				void setup()<br>
				{<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;//Initialize serial port to 9600 baud rate<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;Serial.begin(9600);<br>
				  <br>
				  &nbsp;&nbsp;&nbsp;&nbsp;//Initializing the I/O pins<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;init_pins();<br>
				  <br>
				  &nbsp;&nbsp;&nbsp;&nbsp;Serial.println("Done init.");<br>
				}<br>
				<br>
				void loop()<br>
				{<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;read_incoming();<br>
				  <br>
				  &nbsp;&nbsp;&nbsp;&nbsp;set_outputs();<br>
				  <br>
				  &nbsp;&nbsp;&nbsp;&nbsp;send_outputs();<br>
				  <br>
				  &nbsp;&nbsp;&nbsp;&nbsp;print_data();<br>
				  <br>
				  &nbsp;&nbsp;&nbsp;&nbsp;print_line();<br>
				  <br>
				  &nbsp;&nbsp;&nbsp;&nbsp;delay(DELAY);<br>
				}<br>
				<br>
				//Reads the incoming signals<br>
				void read_incoming()<br>
				{<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;ail_input = pulseIn(AIL_RX_PIN, HIGH);<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;ele_input = pulseIn(ELE_RX_PIN, HIGH);<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;thr_input = pulseIn(THR_RX_PIN, HIGH);<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;rud_input = pulseIn(RUD_RX_PIN, HIGH);<br>
				}<br>
				<br>
				//Sets the Outputs<br>
				void set_outputs()<br>
				{<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;ail_output = ail_input;<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;ele_output = ele_input;<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;thr_output = thr_input;<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;rud_output = rud_input;<br>
				}<br>
				<br>
				//Sends the outputs via PWM signals<br>
				void send_outputs()<br>
				{<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;ail.writeMicroseconds(ail_output);<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;ele.writeMicroseconds(ele_output);<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;thr.writeMicroseconds(thr_output);<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;rud.writeMicroseconds(rud_output);<br>
				}<br>
				<br>
				void print_data()<br>
				{<br>
					&nbsp;&nbsp;&nbsp;&nbsp;Serial.print("AIL IN ");<br>
					&nbsp;&nbsp;&nbsp;&nbsp;Serial.print(ail_input);<br>
					&nbsp;&nbsp;&nbsp;&nbsp;Serial.print("ELE IN ");<br>
					&nbsp;&nbsp;&nbsp;&nbsp;Serial.print(ele_input);<br>
					&nbsp;&nbsp;&nbsp;&nbsp;Serial.print("THR IN ");<br>
					&nbsp;&nbsp;&nbsp;&nbsp;Serial.print(thr_input);<br>
					&nbsp;&nbsp;&nbsp;&nbsp;Serial.print("RUD IN ");<br>
					&nbsp;&nbsp;&nbsp;&nbsp;Serial.print("rud_input");<br>
				}<br>
				<br>
				void print_line()<br>
				{<br>
					&nbsp;&nbsp;&nbsp;&nbsp;Serial.println();<br>
				}<br>
				<br>
				//This function initializes each of the I/O pins<br>
				void init_pins()<br>
				{<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;pinMode(AIL_RX_PIN, INPUT);<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;pinMode(ELE_RX_PIN, INPUT);<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;pinMode(THR_RX_PIN, INPUT);<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;pinMode(RUD_RX_PIN, INPUT);<br>
				  <br>
				  &nbsp;&nbsp;&nbsp;&nbsp;ail.attach(AIL_TX_PIN);<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;ele.attach(ELE_TX_PIN);<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;thr.attach(THR_TX_PIN);<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;rud.attach(RUD_TX_PIN);<br>
				}<br>
				<br>

				<!--==========================Code==========================-->
				
				<div class="section_heading" style="padding-bottom: 10px;">Conclusion</div>
				At this point, I hope you are sucessfully able to build the system. If it is not working for some reason, recheck the connections, recheck the code, reupload the code. This is a very flexible system, you can use it for any kind of multirotor, rc plane, rc car or rc boat. Currently I am using it on my quadrotor to design some control algorithims, its been very useful. I hope this tutorial was able to help you. <br>
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