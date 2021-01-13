
<!DOCTYPE HTML>
<html>
<head>
<title>Online Hardware Shopping Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/jquery.easydropdown.js"></script>
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
							$tname=$_GET['id'];
							$selectOption =  $_POST['taskOption'];
							?>
  <div class="header-top">
	 <div class="wrap"> 
		<div class="logo">
			<a href="index.php"><img id="logo" src="images/logo.jpg" alt=""/></a>
	    </div>
	    <div class="cssmenu"; style="float:right;">
		   <ul>
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
									<li><a  href="shop.php?id=<?php echo "processor";?>">Processors</a></li>
									<li><a href="shop.php?id=<?php echo "motherboard";?>">Motherboards</a></li>
									<li><a href="shop.php?id=<?php echo "ram";?>">Memory(RAM)</a></li>
									<li><a href="shop.php?id=<?php echo "gfx";?>">Graphic Cards</a></li>
									
								</ul>	
							</div>
							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4><br></h4>
							<ul>
								<li><a href="shop.php?id=<?php echo "psu";?>">Power Supply(PSU)</a></li>
									<li><a href="shop.php?id=<?php echo "cabinet";?>">Cabinets</a></li>
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
									<li><a href="shop.php?id=<?php echo "keyboard";?>">Keyboards</a></li>
									<li><a href="shop.php?id=<?php echo "mouse";?>">Mouse</a></li>
									<li><a href="shop.php?id=<?php echo "headset";?>">Headsets</a></li>
									<li><a href="shop.php?id=<?php echo "speaker";?>">Speakers</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Display</h4>
								<ul>
									<li><a href="shop.php?id=<?php echo "lcdmonitor";?>">LCD Monitors</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>External Storage</h4>
								<ul>
									<li><a href="shop.php?id=<?php echo "pendrive";?>">Pen Drives</a></li>
									<li><a href="shop.php?id=<?php echo "externalharddisk";?>">External Hard Disks</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Networking</h4>
								<ul>
									<li><a href="shop.php?id=<?php echo "routers";?>">Routers</a></li>
									<li><a href="shop.php?id=<?php echo "rangeextender";?>">Range Extenders</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Other</h4>
								<ul>
									<li><a href="shop.php?id=<?php echo "cpucooler";?>">CPU Cooler</a></li>
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
									<li><a href="shop.php?id=<?php echo "notebook";?>">Notebooks</a></li>
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
									<li><a href="shop.php?id=<?php echo "keyboard";?>">Keyboards</a></li>
									<li><a href="shop.php?id=<?php echo "mouse";?>">Mice</a></li>
								</ul>	
							</div>											
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Other</h4>
								<ul>
									<li><a href="shop.php?id=<?php echo "ltable";?>">Laptop Tables</a></li>
									<li><a href="shop.php?id=<?php echo "lbag";?>">Cases and Bags</a></li>
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
									<li><a href="shop.php?id=<?php echo "gmouse";?>">Mouse</a></li>
									<li><a href="shop.php?id=<?php echo "ghead";?>">Headsets</a></li>
									<li><a href="shop.php?id=<?php echo "mousepad";?>">Mouse Pads</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Other</h4>
								<ul>
									<li><a href="shop.php?id=<?php echo "console";?>">Consoles</a></li>
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
									<li><a href="shop.php?id=<?php echo "printer";?>">Printers and Scanners</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Other</h4>
								<ul>
									<li><a href="shop.php?id=<?php echo "calculator";?>">Calculators</a></li>
									<li><a href="shop.php?id=<?php echo "projector";?>">Projectors</a></li>
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
       <div class="login">
         <div class="wrap">
     	    <!-- <div class="rsidebar span_1_of_left">
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
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Green</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Black</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Yellow</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Orange</label>
							</div>
						</div>
		       </section>
		</div> -->
		<div class="cont span_2_of_3"; style="margin-left:150px;">
		  <div class="mens-toolbar" style="margin-left:-23px;">
              <div class="sort">
               	<div class="sort-by">
		            <label>Sort By</label>
		            <form action = "shop.php?id=<?php echo "$tname";?>&hello=true ">
		            <select name="taskOption">		<option value="DEFAULT">
		                    Default
		                            <option value="DESC">
		                    Price : High to Low               </option>
		                            <option value="ASC">
		                    Price : Low to High               </option>
		            </select>
		        </form>
		            <a href="shop.php?id=<?php echo "$tname";?>&hello=true" ><img src="images/arrow2.gif" alt="" class="v-middle"></a>
               </div>
    		</div>
	          <div class="pager">   
	           <div class="limiter visible-desktop">
	                
	             </div>
	       		<ul class="dc_pagination dc_paginationA dc_paginationA06" style="float:right;">
				    <li><a href="#" class="previous">Pages</a></li>
				    <li><a href="#">1</a></li>
			  	</ul>
		   		<div class="clear"></div>
	    	</div>
     	    <div class="clear"></div>
	       </div>
			    <div class="box1">
			    	<?php 
					  	$itr = 0;
					  	$sql="SELECT id from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==0)
        $param1= $row["id"];
    	$itr++;
    }} ?>
				   <div class="col_1_of_single1 span_1_of_single1"><a href="single.php?mainid=<?php echo"$tname";?>&subid=<?php echo"$param1";?>">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php 
					  	$itr = 0;
					  	$sql="SELECT name from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==0)
        echo $row["name"];
    	$itr++;
    }} ?></h3>
					  	
				         <div class="grid_img">
						   <div class="css3"><img src="<?php 
					  	$itr = 0;
					  	$sql="SELECT picpath from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==0)
        echo $row["picpath"];
    	$itr++;
    }} ?>" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs. <?php 
					  	$itr = 0;
					  	$sql="SELECT cost from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==0)
        echo $row["cost"];
    	$itr++;
    }} ?></div>
					   </div>
					    </div>
					 
				      
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				    <?php 
					  	$itr = 0;
					  	$sql="SELECT id from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==1)
        $param1= $row["id"];
    	$itr++;
    }} ?>
				   <div class="col_1_of_single1 span_1_of_single1"><a href="single.php?mainid=<?php echo"$tname";?>&subid=<?php echo"$param1";?>">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php 
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
					  	$itr = 0;
					  	$sql="SELECT picpath from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==1)
        echo $row["picpath"];
    	$itr++;
    }} ?>" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs. <?php 
					  	$itr = 0;
					  	$sql="SELECT cost from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==1)
        echo $row["cost"];
    	$itr++;
    }} ?></div>
					   </div>
					    </div>
					 
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				   <?php 
					  	$itr = 0;
					  	$sql="SELECT id from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==2)
        $param1= $row["id"];
    	$itr++;
    }} ?>
				   <div class="col_1_of_single1 span_1_of_single1"><a href="single.php?mainid=<?php echo"$tname";?>&subid=<?php echo"$param1";?>">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php 
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
					  	$itr = 0;
					  	$sql="SELECT picpath from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==2)
        echo $row["picpath"];
    	$itr++;
    }} ?>" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs. <?php 
					  	$itr = 0;
					  	$sql="SELECT cost from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==2)
        echo $row["cost"];
    	$itr++;
    }} ?></div>
					   </div>
					    </div>
					   
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				  <div class="clear"></div>
			  </div>
			  <div class="box1">
				 <?php 
					  	$itr = 0;
					  	$sql="SELECT id from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==3)
        $param1= $row["id"];
    	$itr++;
    }} ?>
				   <div class="col_1_of_single1 span_1_of_single1"><a href="single.php?mainid=<?php echo"$tname";?>&subid=<?php echo"$param1";?>">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php 
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
					  	$itr = 0;
					  	$sql="SELECT picpath from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==3)
        echo $row["picpath"];
    	$itr++;
    }} ?>" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs. <?php 
					  	$itr = 0;
					  	$sql="SELECT cost from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==3)
        echo $row["cost"];
    	$itr++;
    }} ?></div>
					   </div>
					    </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				    <?php 
					  	$itr = 0;
					  	$sql="SELECT id from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==4)
        $param1= $row["id"];
    	$itr++;
    }} ?>
				   <div class="col_1_of_single1 span_1_of_single1"><a href="single.php?mainid=<?php echo"$tname";?>&subid=<?php echo"$param1";?>">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php 
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
					  	$itr = 0;
					  	$sql="SELECT picpath from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==4)
        echo $row["picpath"];
    	$itr++;
    }} ?>" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs. <?php 
					  	$itr = 0;
					  	$sql="SELECT cost from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==4)
        echo $row["cost"];
    	$itr++;
    }} ?></div>
					   </div>
					    </div>
					  
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				    <?php 
					  	$itr = 0;
					  	$sql="SELECT id from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==5)
        $param1= $row["id"];
    	$itr++;
    }} ?>
				   <div class="col_1_of_single1 span_1_of_single1"><a href="single.php?mainid=<?php echo"$tname";?>&subid=<?php echo"$param1";?>">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php 
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
					  	$itr = 0;
					  	$sql="SELECT picpath from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==5)
        echo $row["picpath"];
    	$itr++;
    }} ?>" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs. <?php 
					  	$itr = 0;
					  	$sql="SELECT cost from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==5)
        echo $row["cost"];
    	$itr++;
    }} ?></div>
					   </div>
					    </div>
					   
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				  <div class="clear"></div>
			  </div>
			  <div class="box1">
				    <?php 
					  	$itr = 0;
					  	$sql="SELECT id from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==6)
        $param1= $row["id"];
    	$itr++;
    }} ?>
				   <div class="col_1_of_single1 span_1_of_single1"><a href="single.php?mainid=<?php echo"$tname";?>&subid=<?php echo"$param1";?>">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php 
					  	$itr = 0;
					  	$sql="SELECT name from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==6)
        echo $row["name"];
    	$itr++;
    }} ?></h3>
		

				         <div class="grid_img">
						   <div class="css3"><img src="<?php 
					  	$itr = 0;
					  	$sql="SELECT picpath from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==6)
        echo $row["picpath"];
    	$itr++;
    }} ?>" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs. <?php 
					  	$itr = 0;
					  	$sql="SELECT cost from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==6)
        echo $row["cost"];
    	$itr++;
    }} ?></div>
					   </div>
					    </div>
					   
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				    <?php 
					  	$itr = 0;
					  	$sql="SELECT id from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==7)
        $param1= $row["id"];
    	$itr++;
    }} ?>
				   <div class="col_1_of_single1 span_1_of_single1"><a href="single.php?mainid=<?php echo"$tname";?>&subid=<?php echo"$param1";?>">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php 
					  	$itr = 0;
					  	$sql="SELECT name from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==7)
        echo $row["name"];
    	$itr++;
    }} ?></h3>
					  	
				         <div class="grid_img">
						   <div class="css3"><img src="<?php 
					  	$itr = 0;
					  	$sql="SELECT picpath from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==7)
        echo $row["picpath"];
    	$itr++;
    }} ?>" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs. <?php 
					  	$itr = 0;
					  	$sql="SELECT cost from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==7)
        echo $row["cost"];
    	$itr++;
    }} ?></div>
					   </div>
					    </div>
					   
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				    <?php 
					  	$itr = 0;
					  	$sql="SELECT id from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==8)
        $param1= $row["id"];
    	$itr++;
    }} ?>
				   <div class="col_1_of_single1 span_1_of_single1"><a href="single.php?mainid=<?php echo"$tname";?>&subid=<?php echo"$param1";?>">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php 
					  	$itr = 0;
					  	$sql="SELECT name from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==8)
        echo $row["name"];
    	$itr++;
    }} ?></h3>
			
				         <div class="grid_img">
						   <div class="css3"><img src="<?php 
					  	$itr = 0;
					  	$sql="SELECT picpath from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==8)
        echo $row["picpath"];
    	$itr++;
    }} ?>" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs. <?php 
					  	$itr = 0;
					  	$sql="SELECT cost from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==8)
        echo $row["cost"];
    	$itr++;
    }} ?></div>
					   </div>
					    </div>
					   
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				  <div class="clear"></div>
			  </div>
			  <div class="box1">
				   <?php 
					  	$itr = 0;
					  	$sql="SELECT id from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==9)
        $param1= $row["id"];
    	$itr++;
    }} ?>
				   <div class="col_1_of_single1 span_1_of_single1"><a href="single.php?mainid=<?php echo"$tname";?>&subid=<?php echo"$param1";?>">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php 
					  	$itr = 0;
					  	$sql="SELECT name from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==9)
        echo $row["name"];
    	$itr++;
    }} ?></h3>
				
				         <div class="grid_img">
						   <div class="css3"><img src="<?php 
					  	$itr = 0;
					  	$sql="SELECT picpath from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==9)
        echo $row["picpath"];
    	$itr++;
    }} ?>" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs. <?php 
					  	$itr = 0;
					  	$sql="SELECT cost from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==9)
        echo $row["cost"];
    	$itr++;
    }} ?></div>
					   </div>
					    </div>
					   
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				    <?php 
					  	$itr = 0;
					  	$sql="SELECT id from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==10)
        $param1= $row["id"];
    	$itr++;
    }} ?>
				   <div class="col_1_of_single1 span_1_of_single1"><a href="single.php?mainid=<?php echo"$tname";?>&subid=<?php echo"$param1";?>">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php 
					  	$itr = 0;
					  	$sql="SELECT name from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==10)
        echo $row["name"];
    	$itr++;
    }} ?></h3>
				
				         <div class="grid_img">
						   <div class="css3"><img src="<?php 
					  	$itr = 0;
					  	$sql="SELECT picpath from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==10)
        echo $row["picpath"];
    	$itr++;
    }} ?>" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs. <?php 
					  	$itr = 0;
					  	$sql="SELECT cost from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==10)
        echo $row["cost"];
    	$itr++;
    }} ?></div>
					   </div>
					    </div>
					  
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				   <?php 
					  	$itr = 0;
					  	$sql="SELECT id from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==11)
        $param1= $row["id"];
    	$itr++;
    }} ?>
				   <div class="col_1_of_single1 span_1_of_single1"><a href="single.php?mainid=<?php echo"$tname";?>&subid=<?php echo"$param1";?>">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php 
					  	$itr = 0;
					  	$sql="SELECT name from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==11)
        echo $row["name"];
    	$itr++;
    }} ?></h3>
			
				         <div class="grid_img">
						   <div class="css3"><img src="<?php 
					  	$itr = 0;
					  	$sql="SELECT picpath from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==11)
        echo $row["picpath"];
    	$itr++;
    }} ?>" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price">Rs. <?php 
					  	$itr = 0;
					  	$sql="SELECT cost from $tname ";
					  	 $result = $conn->query($sql);
					  		 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if($itr==11)
        echo $row["cost"];
    	$itr++;
    }} ?></div>
					   </div>
					    </div>
					   
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag </a>
								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				  <div class="clear"></div>
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
				  	 	<li><img src="images/f_icon.png" alt=""/><span class="delivery">Free delivery on all orders over Rs 500*</span></li>
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
</body>
</html>