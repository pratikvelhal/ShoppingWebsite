<!DOCTYPE HTML>
<html>
<head>
<title>Pratik's site</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
              ?>
  <div class="header-top">
   <div class="wrap"> 
    <div class="logo">
      <a href="index.php"><img id="logo" src="images/logo.jpg" alt=""/></a>
      </div>
      <div class="cssmenu">
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
              <!--  <h4>Gaming</h4>
                <ul>
                  <li><a href="shop.php">Gaming Laptops</a></li>
                </ul>  -->
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
           <h4 class="title">
              <?php 
              $tname = 'cart';
              $flag1 = 'false';
            //  $itr = 0;
              $tname = "cart";
              $sql="SELECT * from $tname ";
               $result = $conn->query($sql);
                 if ($result->num_rows == 0) {
    echo "Cart Empty";} 
        else
          {
          echo "Your cart:";
          $flag1 = 'true';

          }
    ?>
      


            </h4>
           <p class="cart">
           <div id="cartTable">
            <?php 
           if($flag1=='true')
           {

            $sql="SELECT * from $tname ";
            $result = $conn->query($sql);
            $times = $result->num_rows;
            //echo "$times";
            $count=0;
            echo "<table>
            <tr>
            <th>Item</th>
            <th>Price</th>
            </tr>";
            $itr = 0;
            while($times > 0)
          {
                 
                 if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    if($itr==$count)
                      echo "<tr>";
                      echo "<td>" .$row["name"]. "</td>";
                      echo "<td> Rs. " .$row["cost"]. "</td>";
                      echo "</tr>";
                    $itr++;
                   
                  }
              } 
            
        $count++;
        $times = $times - 1;
        }
        echo "</table>";
           }
           else
            echo 'You have no items in your shopping cart.';
           ?> </div>
           <br>Click<a href="index.html"> here</a> to continue shopping</p>
           

           <div class="button1">
             <a href="login.php?cart=<?php echo "1";?>"><input type="submit" name="Submit" value="Checkout"></a>
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
</body>
</html>