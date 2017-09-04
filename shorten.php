
<!DOCTYPE>
<head>
<title>PHP url shortener</title>

<style type="text/css">

#form1 p {
text-align:center;
}
.header {
	font-family: "Fertigo Pro", Fontin, Calluna, Steinem;
	font-size: 36px;
	width: 100%;
	text-align: center;
	top: 5%;
	position: absolute;
}
.footer {
	width: 100%;
	text-align: justify;
	top:80%;
	position: absolute;
}
.content {
	position: absolute;
	width: 500px;
	top: 40%;
	left: 32%;
	font-size: 28px;
	
}

</style>
</head>



<div class="header"> Php URL shortener<hr /></div>
<div class="content">

<?php

mysql_connect("localhost","root","") or die('Could not connect: '.mysql_error());
mysql_select_db("url"); 

$urlinput	=	mysql_real_escape_string($_POST['url']); 
$id	=	rand(10000,99999);
$shorturl	=	base_convert($id,20,36);
$sql = "insert into main values('$id','$urlinput','$shorturl')";
mysql_query($sql);

echo "Shortened url is :";
echo "<form action=\"decoder.php\" method=\"post\">";
echo "<button type='submit' name='decode' value='".$shorturl."'	>http://prankArts.com/$shorturl</button>";
echo "</form>";
?>
</div>

<div class="footer">
  <p align="center"><a href="https://github.com/sai10">PRIYANKIT ACHARYA</a></p>
</div>
</body>
</html>