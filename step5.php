<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdComparator Taguchi-Based Ad Optimiser - Step 5 of 5</title>
<link rel="shortcut icon" href="images/logo-midnight.png" type="image/png">

<link href="css/RussianRailGPro.css" rel="stylesheet" type="text/css" />
<link href="css/Raleway-Light.css" rel="stylesheet" type="text/css" />
<link href="css/Raleway-Regular.css" rel="stylesheet" type="text/css" />
<link href="css/Raleway-Medium.css" rel="stylesheet" type="text/css" />
<link href="css/Raleway-Bold.css" rel="stylesheet" type="text/css" />
<link href="css/Raleway-Semibold.css" rel="stylesheet" type="text/css" />
<link href="css/Raleway-ExtraBold.css" rel="stylesheet" type="text/css" />
<link href="css/ProximaNova-Semibold.css" rel="stylesheet" type="text/css" />
<link href="css/ProximaNova-Bold.css" rel="stylesheet" type="text/css" />
<link href="css/ProximaNovaCond-Semibold.css" rel="stylesheet" type="text/css" />

<link href="css/menu-steps.css" rel="stylesheet" type="text/css" />
<link href="css/step5.css" rel="stylesheet" type="text/css" />

<script src="js/jquery-1.8.1.min.js"></script>
	
</head>

<body>
<!------	MAIN ( MENU )	 ------>
<div style="position: relative; overflow: scroll;">
	<div class="main_header">
		<div class="header_menu">
			<div>
				<div class="header_logo">
					<a href="/taguchi-based">
						<div class="logo"><img src="images/logo-white.png" alt="image"/></div>
						<div class="logo"><p>Blair</br>Gorman's</p></div>
						<div class="logo-mobile"><img src="images/logo-mobile.png" alt="image"/></div>
						<div class="logo-mobile"><p>Blair</br>Gorman's</p></div>
					</a>
				</div>
				<div class="menu">
					<ul>
						<a href="/taguchi-based"><li class="disappearance">Home</li></a>
						<a href="/taguchi-based/#about-us"><li class="disappearance">About Us</li></a>
						<a href="/taguchi-based/step1.html"><li class="button_start start_color">Start Test</li></a>
					</ul>
				</div>
			</div>
		</div>
		<div class="header_img"><img src="images/Step-none.png" alt="image"/></div>
	</div>
</div>
<!------	END MAIN ( MENU )	 ------>
<table cellpadding="20" cellspacing="0">
	<tr>
		<td height="350" valign="top">
	<!------	STEPS	 ------>
			<div class="our_steps">
				<div class="steps">
					<div class="step_text"><h2 class="step1">Step 1</h2><p>Lorem ipsum dolor sit amet</p></div>
					<div class="step_text_mobile step1_mobile"><h2>1</h2></div>
					<div class="triangle triangle_step1"></div>
				</div>
				<div class="steps">
					<div class="step_text"><h2 class="step2">Step 2</h2><p>Lorem ipsum dolor sit amet</p></div>
					<div class="step_text_mobile step2_mobile"><h2>2</h2></div>
					<div class="triangle triangle_step2"></div>
				</div>
				<div class="steps">
					<div class="step_text"><h2 class="step3">Step 3</h2><p>Lorem ipsum dolor sit amet</p></div>
					<div class="step_text_mobile step3_mobile"><h2>3</h2></div>
					<div class="triangle triangle_step3"></div>
				</div>
				<div class="steps">
					<div class="step_text"><h2 class="step4">Step 4</h2><p>Lorem ipsum dolor sit amet</p></div>
					<div class="step_text_mobile step4_mobile"><h2>4</h2></div>
					<div class="triangle triangle_step4"></div>
				</div>
				<div class="steps">
					<div class="step_text"><h2 class="step5">Step 5</h2><p>Lorem ipsum dolor sit amet</p></div>
					<div class="step_text_mobile step5_mobile"><h2>5</h2></div>
					<div class="triangle triangle_step5"></div>
				</div>
			</div>
	<!------	END STEPS	 ------>

			<p class="style1"><span class="style3">Step 5 of 5 </span></p>
  
<form name="form1" method="post" action="/taguchi-based/results.php">
	<?php
	 $numElements = $_POST["numElements"];
	 $el = array();
	 $labelA = array();
	 $labelB = array();
	 
	 for( $i=0; $i < $numElements; $i++ )
	 {
		$el[] = $_POST["el".$i ];
		$labelA[] = $_POST["label".$i."A" ];
		$labelB[] = $_POST["label".$i."B" ];
	 }
	 
	 printf("<p class='style2 p_style'>Enter the response rates from the %d test advertisements.<br/><br/>The numbers below are just dummy data to illustrate how this software works ... <br/>please over-write these fictitious numbers with your actual test ad results</p>", $numElements + 1 );

	 $vals = array( 8,6,11,4,13,9,8,10,11,12,11,5, 11, 11, 11, 11 );
	 
	 for($i=0; $i < $numElements + 1; $i++ )
		printf(
			"<p>
				<span class='style2 text-response-ad'>Response from ad %d (%%) :</span>
				<input class='colortext' align='center' name='response$i' type='text' value='%.1f' size='8' maxlength='8'>
			</p>", 
			$i+1, $vals[ $i ] );
	  
	printf("<input class='colortext' align='center' name='numElements' type='hidden' value='$numElements'>");

	for($i=0; $i < $numElements; $i++ )
	  {
	  printf("<input class='colortext' align='center' name='el%d' type='hidden' value='%s'>
	  ", $i, $el[ $i ]);

	  printf("<input class='colortext' align='center' name='label%dA' type='hidden' value='%s'>
	  ", $i, $labelA[ $i ]);  

	  printf("<input class='colortext' align='center' name='label%dB' type='hidden' value='%s'>
	  ", $i, $labelB[ $i ]);  
	  }   
	?>
	<p>&nbsp;</p>
	<p align="center" class="style2">
	  <input class="button_style button_step5" type="submit" name="Submit" value="PERFORM ADD ANALYSIS ">
	</p>
</form>
		</td>
	</tr>
</table>
<!------	FOOTER	 ------>
<div style="background: #f8f8f8; overflow: hidden;">
	<div class="ad">
		<div class="ad_hd">Ad Optimazer Can Help<br/>You to Improve Your:</div>
		<div class="ad_box_main">
			<div class="ad_box">
				<a href="#"><img src="images/lorem-commucation.png" /><p>Lorem ipsum Dolor</p></a>
			</div>
			<div class="ad_box">
				<a href="#"><img src="images/lorem-message.png" /><p>Lorem ipsum Dolor</p></a>
			</div>
			<div class="ad_box">
				<a href="#"><img src="images/lorem-chat.png" /><p>Lorem ipsum Dolor</p></a>
			</div>
			<div class="ad_box">
				<a href="#"><img src="images/lorem-blocnote.png" /><p>Lorem ipsum Dolor</p></a>
			</div>
		</div>
	</div>
</div>
	
<div style="background: #173841;">
	<div class="footer">
		<div class="footer_textinf">
			<div class="footer_logo">
					<a href="/taguchi-based">
						<div class="footer-logo"><img src="images/logo-white.png" alt="image"/></div>
						<div class="footer-logo"><p>Blair</br>Gorman's</p></div>
					</a>
				</div>
			
			<div class="footer_text">
				<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi-<br/>dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita-<br/>tion ullamco laboris nisi ut aliquip ex ea commodo consequat<br/>. Duis aute irure dolor <br/>in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem</span>
				<p>accusantium doloremque laudantium, totam rem aperiam,</p>
			</div>

			<div class="footer_our_menu">
				<div class="footer_menu">
					<ul>
						<h3>Information</h3>
						<li><a href="#">Goverment funding</a></li>
						<li><a href="#">Enrol Now</a></li>
						<li><a href="#">Why Us</a></li>
						<li><a href="#">Student Info</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			
				<div class="footer_menu2">
					<ul>
						<h3>Contact Us</h3>
						<li>Phone <a href="tel:1300555555">1300 555 555</a></li>
						<li>Fax <a href="tel:0396145555">03 9614 5555</a></li>
						<li>Email <a href="mailto:admin@youremail.com">admin@youremail.com</a></li>
						<p>
							<li><a href="#">Postal Address</a></li>
							<li><a href="#">28 Postal Street</a></li>
							<li><a href="#">Suburb, Melbourne</a></li>
							<li><a href="#">Australia</a></li>
						</p>
					</ul>
				</div>
			</div>
			<div style="margin:6% 0 4%; clear:both; overflow:hidden;">
					<div class="footer_info">
						<span style="color:#d9ede4; font-family:'Raleway-Regular';">Copyright &#169; 2016 </span>
						<span style="font-family:'Raleway-Bold';">Blair Gorman's &#160;&#160;</span>
					</div>
					<div class="footer_symbol">
						<span>|</span>
						&#160;&#160; Privacy Policy &#160;&#160;|&#160;&#160; About &#160;&#160;|&#160;&#160; FAQ &#160;&#160;
					</div>
					<div class="footer_symbol footer_symbol-2"><span>|</span>&#160;&#160; Contact Support</div>
				</div>
		</div>
	</div>
</div>
<!------	END FOOTER	 ------>
</body>
</html>
