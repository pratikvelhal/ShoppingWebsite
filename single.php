
<!DOCTYPE HTML>
<html>
<head>
<title>Online Harware Shopping Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
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
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="css/etalage.css">
					<script src="js/jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 300,
								thumb_image_height: 400,
								
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<!----//details-product-slider--->	
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
	<?php
	$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "wtproject";
							$conn = new mysqli($servername, $username, $password, $dbname);
							if ($conn->connect_error) {
    						die("Connection failed: " . $conn->connect_error);

							} 
							$tname=$_GET['mainid'];
							$tname1=$_GET['subid'];
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
		   	if (isset($_SESSION['loginflag']))
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
       <div class="single">
         <div class="wrap">
     	   <!--  <div class="rsidebar span_1_of_left">
				   <section  class="sky-form">
                   	  <h4>Occasion</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Athletic (20)</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes (48)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casual (45)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casual (45)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
						    </div>
						 </div>
                   	  <h4>Category</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Flats (70)</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes (48)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes (48)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Heels (38)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
						    </div>
						</div>
					  <h4>Styles</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Athletic (20)</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Ballerina (5)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Pumps (7)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>High Tops (2)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
						    </div>
						</div>
				  </section>
		          <section  class="sky-form">
					<h4>Brand</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Adidas by Stella McCartney</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Asics</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bloch</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bloch Kids</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Capezio</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Capezio Kids</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Nike</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Zumba</label>
							</div>
						</div>
		         </section>
		         <section  class="sky-form">
					<h4>Heel Height</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Flat (20)</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Under 1in(5)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>1in - 1 3/4 in(5)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>2in - 2 3/4 in(3)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>3in - 3 3/4 in(2)</label>
							</div>
						</div>
		        </section>
		        <section  class="sky-form">
					<h4>Price</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>$50.00 and Under (30)</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$100.00 and Under (30)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$200.00 and Under (30)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$300.00 and Under (30)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$400.00 and Under (30)</label>
							</div>
						</div>
		        </section>
		        <section  class="sky-form">
					<h4>Colors</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Red</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i></label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Black</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Yellow</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Orange</label>
							</div>
						</div>
		        </section>
		</div> -->
		<div class="cont span_2_of_3">
			  <div class="labout span_1_of_a1">
			  	
				<img src="<?php 

					  	$sql= "SELECT picpath from $tname where id ='$tname1'";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["picpath"];
    }} ?>">
			</div>
			<div class="cont1 span_2_of_a1">
				<h3 class="m_3"><?php 

					  	$sql= "SELECT name from $tname where id ='$tname1'";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["name"];
    }} ?></h3>
				
				<div class="price_single">
							  
							  <span class="actual">Rs <?php 

					  	$sql= "SELECT cost from $tname where id ='$tname1'";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["cost"];
    }} ?></span>
							</div>
<!-- 				<ul class="options">
					<h4 class="m_9">Select a Size</h4>
					<li><a href="#">6</a></li>
					<li><a href="#">7</a></li>
					<li><a href="#">8</a></li>
					<li><a href="#">9</a></li>
					<div class="clear"></div>
				</ul> -->
			<!-- 	<div class="btn_form">
				   <form>
					 <input type="submit" value="buy now" title="">
				  </form>
				</div> -->
				<ul class="add-to-links">
    			   <li><img src="images/cartsingle.jpg" alt=""/><a href="singleclone.php?mainid=<?php echo"$tname";?>&subid=<?php echo"$tname1";?>" >  Add To Cart</a></li>
    			</ul>
    			<p class="m_desc">All items purchased from e-shopper are sealed and come with a guaranteed quality and company warranty.<br>Delivered within 3 days of placement of order</p>
    			
              
			</div>
			<div class="clear"></div>
     
     
        <!--  <ul id="flexiselDemo3">
			<li><img src="images/pic11.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
			<li><img src="images/pic10.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
			<li><img src="images/pic9.jpg" /><div class="grid-flex"><a href="#">Zumba</a><p>Rs 850</p></div></li>
			<li><img src="images/pic8.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
			<li><img src="images/pic7.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
		 </ul> -->
	//     <script type="text/javascript">
	// 	 $(window).load(function() {
	// 		$("#flexiselDemo1").flexisel();
	// 		$("#flexiselDemo2").flexisel({
	// 			enableResponsiveBreakpoints: true,
	// 	    	responsiveBreakpoints: { 
	// 	    		portrait: { 
	// 	    			changePoint:480,
	// 	    			visibleItems: 1
	// 	    		}, 
	// 	    		landscape: { 
	// 	    			changePoint:640,
	// 	    			visibleItems: 2
	// 	    		},
	// 	    		tablet: { 
	// 	    			changePoint:768,
	// 	    			visibleItems: 3
	// 	    		}
	// 	    	}
	// 	    });
		
	// 		$("#flexiselDemo3").flexisel({
	// 			visibleItems: 5,
	// 			animationSpeed: 1000,
	// 			autoPlay: true,
	// 			autoPlaySpeed: 3000,    		
	// 			pauseOnHover: true,
	// 			enableResponsiveBreakpoints: true,
	// 	    	responsiveBreakpoints: { 
	// 	    		portrait: { 
	// 	    			changePoint:480,
	// 	    			visibleItems: 1
	// 	    		}, 
	// 	    		landscape: { 
	// 	    			changePoint:640,
	// 	    			visibleItems: 2
	// 	    		},
	// 	    		tablet: { 
	// 	    			changePoint:768,
	// 	    			visibleItems: 3
	// 	    		}
	// 	    	}
	// 	    });
		    
	// 	});
	// </script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	 <div class="toogle">
     	<h3 class="m_3">Product Details</h3>
     	<p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
     </div>					
	 <div class="toogle">
     	<h3 class="m_3">Product Reviews</h3>
     	<p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
     </div>
     </div>
     <div class="clear"></div>
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
				  	 	<li><img src="images/f_icon1.png" alt=""/><span class="delivery">Customer Service :<span class="orange">+91 9702916148</span></span></li>
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
</body>
</html>