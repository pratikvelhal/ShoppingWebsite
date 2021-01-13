﻿<!DOCTYPE HTML>
<html>
<head>
<title>Online Harware Shopping Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'> -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">

        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
<!-- start menu -->     
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- end menu -->
<!-- top scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>

	<!-- <?php include 'database.php'; ?> -->
	<?php

	$servername = "localhost";

							$username = "root";
							$password = "";
							$dbname = "wtproject";
							$conn = new mysqli($servername, $username, $password, $dbname);
							if ($conn->connect_error) {
    						die("Connection failed: " . $conn->connect_error);
    						$tname = "home";
    						session_start();
							// $_SESSION["loginflag"] = false;
							// $_SESSION["username"] = "";
    						
							} 
							?>
    <div class="header-top">
	 <div class="wrap"> 
		<div class="logo">
			<a href="index.php"><img id="logo" src="images/logo.jpg" alt=""/></a>
	    </div>
	    <div class="cssmenu"; style="float:right;">
		   <ul>
		   	<?php
		   	$username = "";
		   	$loginflag = false;
		   	session_start();
		   	if (isset($_SESSION['loginflag']) && $_SESSION['loginflag'] == true)
		   	{
		   	$username = $_SESSION["username"];
		   	$loginflag = $_SESSION["loginflag"];
		   	if($loginflag == true)
		   	echo '<li>Welcome '.$username.'</li> ';
		}
		   	?>
			 <li><a href="login.php?cart=<?php echo "0";?>">My Account</a></li> 
			 <li><a href="checkout.php?rem=<?php echo "0";?>">CheckOut</a></li> 
			 
		   </ul>
		</div>
		<div class="clear"></div>
 	</div>
   </div>
  
  <div class="header-bottom">
   	<div class="wrap">
   		<!-- start header menu -->
		<ul class="megamenu skyblue">
		    <li><a class="color1" href="index.php">Home</a></li>
			<li class="grid"><a class="color2" href="#">Computer Hardware</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Components</h4>
								<ul>
									<li><a  href="shop.php?id=<?php echo "processor";?>&orderflag=def">Processors</a></li>
									<li><a href="shop.php?id=<?php echo "motherboard";?>&orderflag=def">Motherboards</a></li>
									<li><a href="shop.php?id=<?php echo "ram";?>&orderflag=def">Memory(RAM)</a></li>
									<li><a href="shop.php?id=<?php echo "gfx";?>&orderflag=def">Graphic Cards</a></li>
									
								</ul>	
							</div>
							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4><br></h4>
							<ul>
								<li><a href="shop.php?id=<?php echo "psu";?>&orderflag=def">Power Supply(PSU)</a></li>
									<li><a href="shop.php?id=<?php echo "cabinet";?>&orderflag=def">Cabinets</a></li>
							</ul>	
							</div>
						</div>
					
						<div class="col1">
						 <div class="h_nav">
						   <img src="images/nav1.jpg" alt=""/>
						 </div>
						</div>
						
					</div>
				</div>
				</li>
  			   <li class="active grid"><a class="color4" href="#">Computer Accessories</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Peripherals</h4>
								<ul>
									<li><a href="shop.php?id=<?php echo "keyboard";?>&orderflag=def">Keyboards</a></li>
									<li><a href="shop.php?id=<?php echo "mouse";?>&orderflag=def">Mouse</a></li>
									<li><a href="shop.php?id=<?php echo "headset";?>&orderflag=def">Headsets</a></li>
									<li><a href="shop.php?id=<?php echo "speaker";?>&orderflag=def">Speakers</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Display</h4>
								<ul>
									<li><a href="shop.php?id=<?php echo "lcdmonitor";?>&orderflag=def">LCD Monitors</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>External Storage</h4>
								<ul>
									<li><a href="shop.php?id=<?php echo "pendrive";?>&orderflag=def">Pen Drives</a></li>
									<li><a href="shop.php?id=<?php echo "externalharddisk";?>&orderflag=def">External Hard Disks</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Networking</h4>
								<ul>
									<li><a href="shop.php?id=<?php echo "routers";?>&orderflag=def">Routers</a></li>
									<li><a href="shop.php?id=<?php echo "rangeextender";?>&orderflag=def">Range Extenders</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Other</h4>
								<ul>
									<li><a href="shop.php?id=<?php echo "cpucooler";?>&orderflag=def">CPU Cooler</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
						 <div class="h_nav">
						   <img src="images/nav2.jpg" alt=""/>
						 </div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
					</div>
    			</li>				
				<li><a class="color5" href="#">Laptops</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Laptops</h4>
								<ul>
									<li><a href="shop.php?id=<?php echo "notebook";?>&orderflag=def">Notebooks</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
							<!-- 	<h4>Gaming</h4>
								<ul>
									<li><a href="shop.php">Gaming Laptops</a></li>
								</ul>	 -->
							</div>							
						</div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<img src="images/nav3.jpg" alt=""/>
					</div>
				</div>
				</li>
				<li><a class="color6" href="#">Laptop Accessories</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Peripherals</h4>
								<ul>
									<li><a href="shop.php?id=<?php echo "keyboard";?>&orderflag=def">Keyboards</a></li>
									<li><a href="shop.php?id=<?php echo "mouse";?>&orderflag=def">Mice</a></li>
								</ul>	
							</div>											
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Other</h4>
								<ul>
									<li><a href="shop.php?id=<?php echo "ltable";?>&orderflag=def">Laptop Tables</a></li>
									<li><a href="shop.php?id=<?php echo "lbag";?>&orderflag=def">Cases and Bags</a></li>
								</ul>	
							</div>						
						</div>
						<img src="images/nav4.jpg" alt=""/>
					</div>
				</div>
				</li>
				
				<li><a class="color10" href="#">Gaming</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Peripherals</h4>
								<ul>
									<li><a href="shop.php?id=<?php echo "gmouse";?>&orderflag=def">Mouse</a></li>
									<li><a href="shop.php?id=<?php echo "ghead";?>&orderflag=def">Headsets</a></li>
									<li><a href="shop.php?id=<?php echo "mousepad";?>&orderflag=def">Mouse Pads</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Other</h4>
								<ul>
									<li><a href="shop.php?id=<?php echo "console";?>&orderflag=def">Consoles</a></li>
								</ul>	
							</div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
					<img src="images/nav5.jpg" alt=""/>
				</div>
				</li><li><a class="color7" href="#">Office products</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Equipment</h4>
								<ul>
									<li><a href="shop.php?id=<?php echo "printer";?>&orderflag=def">Printers and Scanners</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Other</h4>
								<ul>
									<li><a href="shop.php?id=<?php echo "calculator";?>&orderflag=def">Calculators</a></li>
									<li><a href="shop.php?id=<?php echo "projector";?>&orderflag=def">Projectors</a></li>
								</ul>	
							</div>							
						</div>
						<img src="images/nav6.jpg" alt=""/>
					</div>
					
    				</div>
				</li>
				
		   </ul>
		   <div class="clear"></div>
     	</div>
       </div>
       <div class="index-banner">
       	  <div class="wmuSlider example1" style="height: 560px;">
			  <div class="wmuSliderWrapper">
				  <article style="position: relative; width: 100%; opacity: 1;"> 
				   	<div class="banner-wrap">
					   	<div class="slider-left">
							<img src="images/ban1.jpg"/> 
						</div>
						 <div class="slider-right">
						    <h1>HARDWARE SOLUTIONS</h1></div>
						 <div class="clear"></div>
					 </div>
					</article>
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	 <div class="banner-wrap">
					   	<div class="slider-left">
							<img src="images/ban2.jpg"/> 
						</div>
						 <div class="slider-right">
						    <h2>ALL UNDER ONE ROOF</h2>
						 </div>
						 <div class="clear"></div>
					 </div>
				   </article>
				</div>
                <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a>
                <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                	<li><a href="#">3</a></li>
                	<li><a href="#">4</a></li>
                  </ul>
                 <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a><ul class="wmuSliderPagination"><li><a href="#" class="wmuActive">0</a></li><li><a href="#" class="">1</a></li><li><a href="#" class="">2</a></li><li><a href="#" class="">3</a></li><li><a href="#" class="">4</a></li></ul></div>
            	 <script src="js/jquery.wmuSlider.js"></script> 
				 <script type="text/javascript" src="js/modernizr.custom.min.js"></script> 
						<script>
       						 $('.example1').wmuSlider();         
   						</script> 	           	      
             </div>
             <div class="main">
                <div class="wrap">
            
				  <div class="content-bottom">
				   <div class="box1">
				   	<?php 
				   	$tname = "home";
					  	$itr = 0;
					  	$sql="SELECT id from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==0)
        $param1= $row["id"];
    	$itr++;
    	
    }} ?>
				    <div class="col_1_of_3 span_1_of_3"><a href="single.php?mainid=<?php echo"$tname";?>&subid=<?php echo"$param1";?>">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1">
					  		<?php 
					  		$tname = "home";
					  	$itr = 0;
					  	$sql="SELECT name from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==0)
        echo $row["name"];
    	$itr++;
    }} ?>
					  	</h3>
					  	
				         <div class="grid_img">
						   <div class="css3"><img src="<?php 
						$tname = "home";
					  	$itr = 0;
					  	$sql="SELECT picpath from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==0)
        echo $row["picpath"];
    	$itr++;
    }} ?>" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs 480</div>
					   </div>
					    </div>
					  
						 <ul class="list" style="height: 20px; width:100%">
						
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
			    		<?php 
				   	$tname = "home";
					  	$itr = 0;
					  	$sql="SELECT id from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==1)
        $param1= $row["id"];
    	$itr++;
    }} ?>
				    <div class="col_1_of_3 span_1_of_3"><a href="single.php?mainid=<?php echo"$tname";?>&subid=<?php echo"$param1";?>">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php 
					  	$tname="home";
					  	$itr = 0;
					  	$sql="SELECT name from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==1)
        echo $row["name"];
    	$itr++;
    }} ?></h3>
					  	
					    <div class="grid_img">
						   <div class="css3"><img src="<?php 
						$tname = "home";
					  	$itr = 0;
					  	$sql="SELECT picpath from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==1)
        echo $row["picpath"];
    	$itr++;
    }} ?>" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs480</div>
					   </div>
					    </div>
					
						 <ul class="list" style="height: 20px; width:100%">
						  
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
			    		<?php 
				   	$tname = "home";
					  	$itr = 0;
					  	$sql="SELECT id from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==2)
        $param1= $row["id"];
    	$itr++;
    }} ?>
				    <div class="col_1_of_3 span_1_of_3"><a href="single.php?mainid=<?php echo"$tname";?>&subid=<?php echo"$param1";?>">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php 
					  	$tname="home";
					  	$itr = 0;
					  	$sql="SELECT name from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==2)
        echo $row["name"];
    	$itr++;
    }} ?></h3>
					  	
				         <div class="grid_img">
						   <div class="css3"><img src="<?php 
						$tname = "home";
					  	$itr = 0;
					  	$sql="SELECT picpath from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==2)
        echo $row["picpath"];
    	$itr++;
    }} ?>" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs480</div>
					   </div>
					    </div>
					  
						 <ul class="list" style="height: 20px; width:100%">
						  
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				  <div class="clear"></div>
			  </div>
			  <div class="box1">
			  		<?php 
				   	$tname = "home";
					  	$itr = 0;
					  	$sql="SELECT id from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==3)
        $param1= $row["id"];
    	$itr++;
    }} ?>
				  <div class="col_1_of_3 span_1_of_3"><a href="single.php?mainid=<?php echo"$tname";?>&subid=<?php echo"$param1";?>">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php 
					  	$tname="home";
					  	$itr = 0;
					  	$sql="SELECT name from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==3)
        echo $row["name"];
    	$itr++;
    }} ?></h3>
					  	
				         <div class="grid_img">
						   <div class="css3"><img src="<?php 
						$tname = "home";
					  	$itr = 0;
					  	$sql="SELECT picpath from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==3)
        echo $row["picpath"];
    	$itr++;
    }} ?>" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs480</div>
					   </div>
					    </div>
					 

						 <ul class="list" style="height: 20px; width:100%">
						 
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
			    		<?php 
				   	$tname = "home";
					  	$itr = 0;
					  	$sql="SELECT id from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==4)
        $param1= $row["id"];
    	$itr++;
    }} ?>
				    <div class="col_1_of_3 span_1_of_3"><a href="single.php?mainid=<?php echo"$tname";?>&subid=<?php echo"$param1";?>">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php 
					  	$tname="home";
					  	$itr = 0;
					  	$sql="SELECT name from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==4)
        echo $row["name"];
    	$itr++;
    }} ?></h3>
					  	
				         <div class="grid_img">
						   <div class="css3"><img src="<?php 
						$tname = "home";
					  	$itr = 0;
					  	$sql="SELECT picpath from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==4)
        echo $row["picpath"];
    	$itr++;
    }} ?>" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs480</div>
					   </div>
					    </div>
					  
						 <ul class="list" style="height: 20px; width:100%">
						
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
			    		<?php 
				   	$tname = "home";
					  	$itr = 0;
					  	$sql="SELECT id from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==5)
        $param1= $row["id"];
    	$itr++;
    }} ?>
				   <div class="col_1_of_3 span_1_of_3"><a href="single.php?mainid=<?php echo"$tname";?>&subid=<?php echo"$param1";?>">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php 
					  	$tname="home";
					  	$itr = 0;
					  	$sql="SELECT name from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==5)
        echo $row["name"];
    	$itr++;
    }} ?></h3>
					  	
				         <div class="grid_img">
						   <div class="css3"><img src="<?php 
						$tname = "home";
					  	$itr = 0;
					  	$sql="SELECT picpath from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==5)
        echo $row["picpath"];
    	$itr++;
    }} ?>" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs480</div>
					   </div>
					    </div>
					 
						 <ul class="list" style="height: 20px; width:100%">
						  
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				  <div class="clear"></div>
			    </div>
			  </div>
			 </div>
        </div>
        <div class="footer">
       	  <div class="footer-top">
       		<div class="wrap">
       			   <div class="col_1_of_footer-top span_1_of_footer-top">
				  	 <ul class="f_list">
				  	 	<li><img src="images/f_icon.png" alt=""/><span class="delivery">Free delivery on all orders over Rs 500</span></li>
				  	 </ul>
				   </div>
				   <div class="col_1_of_footer-top span_1_of_footer-top">
				  	<ul class="f_list">
				  	 	<li><img src="images/f_icon1.png" alt=""/><span class="delivery">Customer Service :<span class="orange"> +91 9702916148</span></span></li>
				  	 </ul>
				   </div>
				   <div class="col_1_of_footer-top span_1_of_footer-top">
				  	<ul class="f_list">
				  	 	<li><img src="images/f_icon2.png" alt=""/><span class="delivery">Fast delivery & free returns</span></li>
				  	 </ul>
				   </div>
				  <div class="clear"></div>
			 </div>
       	 </div>
       </div>
       <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
        <?php $conn->close();?>
</body>
</html>