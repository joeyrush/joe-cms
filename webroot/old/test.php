<?php

header( "refresh:7;url=index.html" );


if(!empty($_POST)) :
?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="icon.ico">

	<title>kieran merigo</title>


<style>
	#title
	{
		color:red;
		background-color:blue;
		height:100px;
		width:80%;
		font-family:sans-serif;
		font-size:150px;
	}

	#text
	{
		font-size:30px;
		font-family:times;
		color:white;
		background-color:black;
	}

</style>


</head>

<body>

<p> well done u have found the secret page. u have 7 seconds to browse before returned back </p>

<p id="title">PoRtfillio by joe</p>

<img src="pic.jpg"> <p id="text"> this is me and mi friend kieron </p>

</body>
</html>

<?php else: 

echo 'You tried to access the secret page without finding it the proper way. Sorry u must leave';


endif;
?>