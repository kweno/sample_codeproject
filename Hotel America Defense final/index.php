<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<SCRIPT type="text/javascript">
function protect() {
var testV = 1;
var pass1 = prompt('Please Enter Your Password',' ');
while (testV < 3) {
if (!pass1)
history.go(-1);
if (pass1.toLowerCase() == "letmein") {
alert('You Got it Right!');
window.open('admin.php');
break;
}
testV+=1;
var pass1 =
prompt('Access Denied - Password Incorrect, Please Try Again.','Password');
}
if (pass1.toLowerCase()!="password" & testV ==3)
history.go(-1);
return " ";
}
</SCRIPT>
<?php
session_start();

?>

<script type="text/javascript">
        var GB_ROOT_DIR = "./greybox/";
		
    </script>
    
    

    <script type="text/javascript" src="greybox/AJS.js"></script>
    <script type="text/javascript" src="greybox/AJS_fx.js"></script>
    <script type="text/javascript" src="greybox/gb_scripts.js"></script>
    <link href="greybox/gb_styles.css" rel="stylesheet" type="text/css" media="all" />
    


<script type="text/javascript" src="static_files/help.js"></script>
    <link href="static_files/help.css" rel="stylesheet" type="text/css" media="all" />





<link type="text/css" href="apycom.com-4-steel-blue/menu.css" rel="stylesheet" />
    <script type="text/javascript" src="apycom.com-4-steel-blue/jquery.js"></script>
    <script type="text/javascript" src="apycom.com-4-steel-blue/menu.js"></script>










<link rel="stylesheet" type="text/css" href="jMyCarousel/jMyCarousel/examples/carousel_css/example1.css" />
	<script type="text/javascript" src="jMyCarousel/jMyCarousel/jquery-1.2.1.pack.js"></script>
	<script type="text/javascript" src="jMyCarousel/jMyCarousel/jMyCarousel.js"></script>
    
    
	<!-- Optional -->
	<script type="text/javascript" src="../jquery.mousewheel.js"></script>
	<script type="text/javascript">
		$(function() {
		    $(".jMyCarousel").jMyCarousel({
		        visible: '100%'
		    });
		});
	</script>
    
   
   
    
    
 

        <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
    
<title>Untitled Document</title>






<style type="text/css">
<!--
body {
	background-image: url(pix%20hotel/final.jpg);
}
#apDiv1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 236px;
	top: 0px;
}
#apDiv2 {
	position:absolute;
	width:813px;
	height:10px;
	z-index:2;
	left: 119px;
	top: 206px;
}
#apDiv3 {
	position:absolute;
	width:463px;
	height:177px;
	z-index:1;
	left: 224px;
	top: 2px;
}
#apDiv4 {
	position:absolute;
	width:707px;
	height:115px;
	z-index:1;
	left: -325px;
	top: 715px;
}
#apDiv5 {
	position:absolute;
	width:525px;
	height:1076px;
	z-index:2;
	left: 128px;
	top: 444px;
}
#apDiv6 {
	position:absolute;
	width:730px;
	height:115px;
	z-index:18;
	left: 128px;
	top: 190px;
}
#apDiv7 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:11;
	left: 492px;
	top: 247px;
}
#apDiv8 {
	position:absolute;
	width:811px;
	height:340px;
	z-index:11;
	left: 119px;
	top: 661px;
}
#apDiv9 {
	position:absolute;
	width:195px;
	height:251px;
	z-index:12;
	left: 130px;
	top: 283px;
}
#apDiv10 {
	position:absolute;
	width:200px;
	height:39px;
	z-index:11;
	left: 146px;
	top: 312px;
}
.style1 {
	font-family: "Century Gothic";
	font-size: 30px;
}
#apDiv11 {
	position:absolute;
	width:402px;
	height:131px;
	z-index:12;
	left: 141px;
	top: 359px;
}
.style3 {font-family: "Century Gothic"}
#apDiv12 {
	position:absolute;
	width:222px;
	height:179px;
	z-index:13;
	left: 425px;
	top: 306px;
}
#apDiv13 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:8;
	left: 141px;
	top: 268px;
}
#apDiv14 {
	position:absolute;
	width:121px;
	height:18px;
	z-index:9;
	left: 5px;
	top: 83px;
}
.style4 {
	font-family: "Century Gothic";
	font-size: 10px;
}
#apDiv15 {
	position:absolute;
	width:124px;
	height:18px;
	z-index:14;
	left: 5px;
	top: 100px;
}
#apDiv16 {
	position:absolute;
	width:190px;
	height:280px;
	z-index:1;
	left: 306px;
	top: 5px;
}
.style36 {font-family: tahoma}
.style38 {font-family: Arial, Helvetica, sans-serif}
.style8 {font-size: 13px}
#apDiv17 {
	position:absolute;
	width:499px;
	height:73px;
	z-index:19;
	left: 424px;
	top: 601px;
}
.style9 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
}
#apDiv18 {
	position:absolute;
	width:344px;
	height:294px;
	z-index:20;
	left: 583px;
	top: 655px;
}
#apDiv19 {
	position:absolute;
	width:154px;
	height:264px;
	z-index:21;
	left: 1px;
	top: 69px;
}
#apDiv20 {
	position:absolute;
	width:610px;
	height:42px;
	z-index:12;
	left: 195px;
	top: 935px;
}
.style44 {font-size: 13px; font-family: "Century Gothic"; }
#apDiv21 {
	position:absolute;
	width:376px;
	height:20px;
	z-index:10;
	left: 275px;
	top: 970px;
}
.style43 {
	color: #333333;
	font-size: 13px;
	font-family: "Century Gothic";
}
a:link {
	color: #333333;
	text-decoration: none;
}
a:visited {
	color: #000000;
	text-decoration: none;
}
a:hover {
	color: #666;
	text-decoration: none;
}
a:active {
	color: #000000;
	text-decoration: none;
}
.style47 {font-size: 10px}
#apDiv22 {
	position:absolute;
	width:282px;
	height:282px;
	z-index:10;
	left: 131px;
	top: 303px;
}
-->
</style>

</head>

<body>

<div id="apDiv1">
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','220','height','180','src','pix hotel/try','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','pix hotel/try' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="220" height="180">
    <param name="movie" value="pix hotel/try.swf" />
    <param name="quality" value="high" />
    <embed src="pix hotel/try.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="220" height="180" ></embed>
  </object>
</noscript>
<div id="apDiv3">
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','463','height','175','src','pix hotel/header','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','pix hotel/header' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="463" height="175">
    <param name="movie" value="pix hotel/header.swf" />
    <param name="quality" value="high" />
    <embed src="pix hotel/header.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="463" height="175" ></embed>
  </object>
</noscript>
</div>
</div>


<style type="text/css">
* { margin:0;
    padding:0;
}

div#menu {
    margin:30px auto;
    width:100%;
}
div#copyright {
    margin:0 auto;

    font:0px 'Trebuchet MS';
    color:#FFFFFF;
    text-indent:20px;
    padding:40px 0 0 0;
}
div#copyright a { color:#4682b4; }
div#copyright a:hover { color:#124a6f; }
</style>


<div id="apDiv6">
<div id="menu">
    <ul class="menu">
      <li><a href="index.php" class="parent"><span>Home</span></a></li>
        
  <li><a href="accomodation.php"><span>Accomodation</span></a>
   
      </li>
      
     
      <li><a href="reservation2.php"><span>Reservation</span></a></li>
       
      <li><a href="about_us.php"><span>About Us</span></a>  
       <div><ul>
                <li><a href="map.php"><span>America Hotel Map</span></a></li>
                
                
                 
      </ul></div></li>
        
      <li class="last"><a href="credits.php"><span>Credits</span></a> <div><ul>
                <li><a href="credits.php"><span>Louie Jene Carranto</span></a></li>
                <li><a href="mark.php"><span>Mark Nino Marquez</span></a></li>
                <li><a href="nikki.php"><span>Nikki Pamintuan</span></a></li>
                <li><a href="shiela.php"><span>Shiela Pasamonte</span></a></li>
                <li><a href="kwino.php"><span>Kwino Pineda</span></a></li>
           
                 
      </ul></div></li>
      
   
       
    </ul>
</div>

<div id="copyright"> <a href="http://apycom.com/">Apycom jQuery </a></div>


</div>


<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="style1" id="apDiv10">Login:</div>
<p>&nbsp;</p>

<p>&nbsp;</p>

<div id="apDiv8">
<div class="jMyCarousel">
  <ul>
    <li><a href="pix hotel/grey/pool.jpg" rel="gb_imageset[nice_pics]" title="America Hotel Pool">
    <img src="jMyCarousel/jMyCarousel/examples/carousel_img/1/caro1.jpg" width="200" height="150" /></a></li>
    <li> 
      <a href="pix hotel/grey/crew.jpg" rel="gb_imageset[nice_pics]" title="America Hotel Staff">
        <img src="jMyCarousel/jMyCarousel/examples/carousel_img/1/caro8.jpg" width="200" height="150" /></a></li>
    <li>
      <a href="pix hotel/grey/parking.jpg" rel="gb_imageset[nice_pics]" title="America Hotel Parking Lot">
        <img src="jMyCarousel/jMyCarousel/examples/carousel_img/1/caro7.jpg" width="200" height="150" /></a> </li>
    <li>
      <a href="pix hotel/grey/pool2.jpg" rel="gb_imageset[nice_pics]" title="America Hotel Swimming Pool">
    <img src="jMyCarousel/jMyCarousel/examples/carousel_img/1/caro2.jpg" width="200" height="150" /></a></li>
    <li>
        <a href="pix hotel/grey/resto.jpg" rel="gb_imageset[nice_pics]" title="America Hotel Resto">
        <img src="jMyCarousel/jMyCarousel/examples/carousel_img/1/caro6.jpg" width="200" height="150" /></a></li>
    <li> 
      <a href="pix hotel/grey/lounge.jpg" rel="gb_imageset[nice_pics]" title="America Hotel Lounge">
        <img src="jMyCarousel/jMyCarousel/examples/carousel_img/1/caro5.jpg" width="200" height="150" /></a></li>
  </ul>

</div>
</div>



<div id="apDiv20">
  <table width="546" height="35" border="0" align="center" class="style44">
    <tr>
      <td><div align="center"><span class="style47">|<a href="index.php"> HOME</a> |</span></div></td>
      <td><div align="center"><span class="style47">|<a href="accomodation.php"> ACCOMODATION</a> |</span></div></td>
      <td><div align="center"><span class="style47">| <a href="reservation2.php">RESERVATION</a> |</span></div></td>
      <td><div align="center"><span class="style47">|<a href="about_us.php"> ABOUT US </a>|</span></div></td>
      <td><div align="center"><span class="style47">| <a href="credits.php">CREDITS</a> |</span></div></td>
    </tr>
  </table>
</div>
<div id="apDiv21"><span class="style43">Copyright 2009-2010 America Hotel, Inc.  All rights reserved. </span></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="apDiv12"><img src="pix hotel/in5.jpg" width="300" height="280" />
  <div class="style8" id="apDiv16">
    <p align="justify"><span class="style36"><span class="style38"><strong>America Hotel</strong>, is one of the most   	renowned and recognized hotel in Angeles City.<strong>The   	America Hotel</strong> is a premier hotel in Angeles City Clark Field Pampanga located only 10   	kilometers away from the Diosdado Macapagal International Airport Clark   	Field Pampanga. </span></span></p>
    <p align="justify" class="style38"> The close proximity also makes it as an   	ideal airport hotel for the busy executives. <span class="style9">Aside from   	offering budget accommodations for corporate guests and vacationers, America   	Hotel in Angeles City</span> <span class="style9">also provides </span></p>
    <p align="justify" class="style38">&nbsp;</p>
  </div>
</div>
<div id="apDiv11">
  <form id="form1" name="form1" method="post" action="">
    <label><span class="style3">Username: </span>
    <input name="username" type="text" id="textfield" size="19" />
    <br />
    <br />
    </label>
    <p>
      <label><span class="style3">Password:</span>
      <input type="password" name="password" id="textfield2" />
      </label>
    </p>
    <p>&nbsp;</p>
    <div class="style4" id="apDiv14">Forgot your password?</div>
    <div class="style4" id="apDiv15">Create your account?</div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>
      <label>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" style="border: groove1px solid #cccccc; background-color: #ffffff; value=" value="Login"Submit">
       <input type="submit" name="reg" style="border: groove1px solid #cccccc; background-color: #ffffff; value=" value="Register"Submit">
      </label>
    <input type="button" onclick="return protect()" value="Admin" class="style10">
  </form></p>
</div>
<p>&nbsp;</p>
<div id="apDiv17">
  <p align="justify" class="style9"> guests with the advantage of being   	located proximate to several commercial buildings and shopping centres Clark   	Economic Zone like the SM shopping Mall, Robinsons Angeles, and Nepo Mall.</p>
  </div>
  
  <?php





include('mysql.php');

$dayreg =mysql_query("SELECT * FROM reservation");

		while ($row = mysql_fetch_array($dayreg))
				 {
			
					$datedata = $row["Day"];
				
				 }
		
		
				$today=date(" d ");
				$ans = ($today - $datedata);		 
		
		
				if($ans >=3)
		
						{
		
							$red = mysql_query ("DELETE FROM reservation WHERE Day = '$datedata'");
		
		
						}

if(isset($_POST['reg']))
{
	

echo'<script>window.location="register.php"</script>';

	
}

elseif(isset($_POST['submit']))
	{
	$username =$_POST['username'];
	$password =$_POST['password'];

		if(!empty($username) && !empty($password))
		
	{
			
			$sql = mysql_query("SELECT * FROM users WHERE username = '".$username."' AND 
			user_password = '".$password."' LIMIT 1");
			
		
		
		
			

				
				
				if(mysql_num_rows($sql)>0)	
			{

				$_SESSION['loggedin']= true;
				$_SESSION['username']= $username;
				$_SESSION['password']= $password;
				
					
		echo'<script>window.location="home.php"</script>';
			
			mysql_query("UPDATE users SET status = 'IN'
				WHERE username = '".$username."' AND user_password = '".$password."'");

			
            
          
			}
			

			else
			{
					echo'<script>alert("Fill it up properly"></script>';
				

			}

	
	}
		else
					
			{


			echo'<script>alert("You must enter a username and a password")</script>';
			echo'<script>window.location = "index.php"</script>';

			}
	
}
					
		
		?>
        
        
        
</body>
</html>
