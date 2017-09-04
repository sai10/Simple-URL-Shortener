<?php

mysql_connect("localhost","root","") or die('Could not connect: '.mysql_error());
mysql_select_db("url"); 


$de= mysql_real_escape_string($_POST["decode"]);


$sql = "select * from main where shorten='$de'";

$result=mysql_query($sql);

while($row = mysql_fetch_array($result))
{
$res=$row['urladdr'];
header("location:".$res);
}	

?>