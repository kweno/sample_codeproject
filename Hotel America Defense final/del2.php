  <?php
  include 'mysql.php';
  $del=$_POST['del'];
      
		if ($del =="")
		{
		echo '<script>alert ("Please enter the Id number to DELETE files");</script>';
		}
		else
		{
		mysql_query ("DELETE FROM users WHERE user_id = '".$del."'");
		echo '<script>alert ("You succesfully deleted an item");window.location ="adminmain2.php"</script>';
	}
		mysql_close($conn);
		?>