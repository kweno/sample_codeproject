  <?php
  include 'mysql.php';
  $del=$_POST['del'];
      
		if ($del =="")
		{
		echo '<script>alert ("Please enter the Id number to DELETE files");window.location ="resume.php"</script>';
		}
		else
		{
		mysql_query ("DELETE FROM bcs WHERE id = '".$del."'");
		echo '<script>alert ("You succesfully deleted an item");window.location ="resume.php"</script>';
	}
		mysql_close($conn);
		?>