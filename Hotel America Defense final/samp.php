<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script language="JavaScript" src="calendar_us.js"></script>
	<link rel="stylesheet" href="calendar.css">













</head>

<body>


<form method="post" name="testform">
  <div id="room">
    <p>Room:
      <select name="room">
       <option value=" ">
        <option value="De luxe double bed">De luxe Double Bed
        <option value="De luxe single double bed">De luxe single double bed
        <option value="preidential">Presidential Suite
      </select>
    </p>
    <p>&nbsp;  </p>
  </div>


  <p>Person:
    <select name="person">
		  <option value=" ">
      <option value=0>0
      <option value=1>1
      <option value=2>2
    </select>


    <!-- calendar attaches to existing form element -->
  </p>
  <p>Check in:
    	<input type="text" name="testinput" />
    	</br>
    
        <script language="JavaScript">
	new tcal ({
		// form name
		'formname': 'testform',
		// input name
		'controlname': 'testinput'
	});

			

	    </script>
    
      </br>
      </br>
      </br>
      </br>
      </br>
  </p>
  <p>
 
	Check out:
    <input type="text" name="testinput2" />
    
    <script language="JavaScript">
	new tcal ({
		// form name
		'formname': 'testform',
		// input name
		'controlname': 'testinput2'
	});

	  </script>
      </p>
      
      <input type="submit" value="submit" name="submit"/>
</form>


<?php



include('mysql.php');




if(isset ($_POST['submit']))
			{
			
			
			$room = mysql_escape_string($_POST['room']);
				$person = mysql_escape_string($_POST['person']);
					$ti = mysql_escape_string($_POST['testinput']);
									$ti2 = mysql_escape_string($_POST['testinput2']);
		
			
			
			$sql = mysql_query("INSERT INTO reservation (id,room,person,checkin,checkout)
								VALUES ('0','".$room."','".$person."','".$ti."','".$ti2."') ");

}

else

{

echo"adasdasd";

}


?>
</body>
</html>
