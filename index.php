<!DOCTYPE >
<html>
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
	top: 25%;
	left: 30%;
	
}

</style>
</head>



<div class="header"> PRANK URL SHORTENER<hr /></div>
<div class="content">
<form id="form1" name="form1" method="post" action="shorten.php">
  
  <p><strong> Url:</strong>
    <input type="text" name="url" id="url"  size="100"  />
  </p>
  <p>
    <input type="submit" name="Submit" id="Submit" value="Shorten" />
  </p>
</form>

</div>

<div class="footer">
  <p align="center"><a href="https://github.com/sai10">PRIYANKIT ACHARYA</a></p>
</div>
</body>
</html>