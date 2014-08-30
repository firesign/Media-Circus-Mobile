<!DOCTYPE html>
<html manifest='manifest.appcache'>
<html>
	<head>
		<meta charset="utf-8">
		<title>Media Circus Mobile</title>
	    <meta name="description" content="Media Circus Mobile version 1.0">
	    <meta name="author" content="Michael LeBlanc">
	    
	    <!-- Run in full-screen mode. -->
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    
	    <!-- Make the status bar black with white text. -->
	    <meta name="apple-mobile-web-app-status-bar-style" content="black">
	    
	    <!-- Set viewport. -->
	    <meta name="viewport" content="initial-scale=1">
	    
	    <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:500' rel='stylesheet' type='text/css'>
	    
	    <!--<link rel="stylesheet" href="css/jquery.mobile-1.4.3.min.mbl.css" />-->
	    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.css" />
	    <link rel="stylesheet" href="css/styles.css?v=1.0">
	    
	    <!--IOS7 ICONS-->
	    <link rel="apple-touch-icon" href="img/ios/icon-Small.png" />
	    <link rel="apple-touch-icon" sizes="80x80" href="img/ios/icon-40@2x.png" />
	    <link rel="apple-touch-icon" sizes="120x120" href="img/ios/icon-60@2x.png" />
	    <link rel="apple-touch-icon" sizes="152x152" href="img/ios/icon-76@2x.png" />
	    
	    <!--IOS ICONS-->
	    <link rel="apple-touch-icon" href="img/ios/icon.png" />
	    <link rel="apple-touch-icon" sizes="72x72" href="img/ios/icon-72.png" />
	    <link rel="apple-touch-icon" sizes="114x114" href="img/ios/icon@2x.png" />
	    <link rel="apple-touch-icon" sizes="144x144" href="img/ios/icon-72@2x.png" />
	    
	    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	    <script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script>
	    
	    
	</head>	
	<body>
	
	
				
		<!--Open the cutup_output.txt file on the server-->
		<?php
			$myFile = "cutup_output.txt";
			$fh = fopen($myFile, 'r');
			$theData = fread($fh, filesize($myFile));
			fclose($fh);
		?>
		
		<div data-role="page" id="home" data-theme="b" >
		
			<div data-role="header">
			<div class="center-wrapper">
				<img style="height: 60px;" src="img/ios/icon@2x.png" alt="media circus icon">
			</div>
			</div>
			
			<div role="main">	
				<div id="ticker">
				
					<!--Display the text file as a ticker-->
					
					<script type="text/javascript">
						
						var rawcontent = ". . . . . . . " + "<?php echo $theData ?>" ;	
						var tWidth='90%';                   // width
						var tHeight='22px';                  // height (in pixels)
						var tcolour='#000000';               // background colour:
						var textcolour = '#ccc';
						var moStop=false;                     // pause on mouseover (true or false)
						var fontfamily = "'Source Code Pro', sans-serif";
						var tSpeed=4;                        // scroll speed (1 = slow, 5 = fast)
						
						var content = rawcontent.toUpperCase();
						
						// Simple Marquee / Ticker Script
						// copyright 3rd January 2006, Stephen Chapman
						// permission to use this Javascript on your web page is granted
						// provided that all of the below code in this script (including this
						// comment) is used without any alteration
						var cps=tSpeed; var aw, mq; var fsz = parseInt(tHeight) - 4; 
						
						function startticker(){
							if (document.getElementById) {
								var tick = '<div style="position:relative;width:'+tWidth+';height:'+tHeight+';overflow:hidden;background-color:'+tcolour+'"'; 
								if (moStop) tick += ' onmouseover="cps=0" onmouseout="cps=tSpeed"'; 
								tick +='><div id="mq" style="position:absolute;left:0px;top:0px;font-family:'+fontfamily+';font-size:'+fsz+'px;white-space:nowrap;"><\/div><\/div>'; 
								document.getElementById('ticker').innerHTML = tick; 
									mq = document.getElementById("mq"); 
									mq.style.left=(parseInt(tWidth)+10)+"px"; 
									mq.innerHTML='<span id="tx">'+content+'<\/span>'; 
									aw = document.getElementById("tx").offsetWidth; 
									lefttime=setInterval("scrollticker()",50);
									}} 
								
							function scrollticker(){
								mq.style.left = (parseInt(mq.style.left)>(-10 - aw)) ?parseInt(mq.style.left)-cps+"px" : parseInt(tWidth)+10+"px";
								} 
							
							window.onload=startticker;				
					</script>	
						
				</div>
				
				
				
				<div data-role="collapsible" data-theme="b" data-content-theme="b" data-iconpos="right" data-collapsed-icon="carat-d" data-expanded-icon="carat-u">
				    <h3>About Media Circus</h3>
				    <p><strong>Media Circus</strong> is a scrolling internet-enabled marquee that displays amusing news headlines. </p>
				    
				    <p>It uses <a href="https://twitter.com/#!/generalxcentric">@generalxcentric&rsquo;s</a> daily tweets, which are cutups of contemporary news headlines from the CBC and the Toronto Globe and Mail.</p>	
				    <p>A book featuring 365 tweets from General Eccentric</a> in 2012 is <a href="http://www.blurb.ca/b/4280789-media-circus">available at Blurb.com</a>.</p>
				</div>
				
				<div data-role="collapsible" data-theme="b" data-content-theme="b" data-iconpos="right" data-collapsed-icon="carat-d" data-expanded-icon="carat-u">
				    <h3>Add to Your Home Screen</h3>
				    <p>By adding this web app to your Home Screen, you'll eliminate the top URL entry field and the footer, making it look just like a &lsquo;real&rsquo; app.</p>
				    <p><strong>1. </strong>Tap the middle icon in the footer icon bar - the one with an arrow rising from the top of a square.</p>
				    <p><strong>2. </strong>Choose &ldquo;Add to Home Screen&rdquo;. You're done!</p>
				</div>
				
			</div>
			<div data-role="footer" data-position="fixed">
				<h2 style="font-size: 0.7em;"><a href="http://generaleccentric.net">&copy; 2014 General Eccentric</a></h2>
			</div>
		</div>
	</body>
</html>