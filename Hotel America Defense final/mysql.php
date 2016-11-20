<?php

$conn= @mysql_connect("localhost","root","") or die(' error in connecting database!');

$select_data = @mysql_select_db("dbevaluator",$conn) or die (' error in selecting database!');


?>