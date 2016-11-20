  <?php
  include 'mysql.php';



session_start();

if($_SESSION['loggedin'] == true)
{

	unset($_SESSION);
	session_destroy();
	
}


echo'<script>alert("Bye Bye Administrator!")</script>';
			echo'<script>window.location = "admin.php"</script>';



?>