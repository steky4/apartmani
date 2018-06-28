<?php

	if($_POST){
		$name = $_POST['name'];
		$comment = $_POST['comment'];
		$handle = fopen("comments.php", "a");
		fwrite($handle,.$name.$comment);
		fclose($handle); 
		}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Utisci</title>
	<style type="text/css">
		body{
			background-image: url(pozadina.jpg);
			background-attachment: fixed;
		}
		#kutija{
			height: 90%;
			width: 90%;
			position: absolute;
			background: inherit;
			overflow: hidden;
			left: 5%;
			top: 5%;
			border-radius: 20px;
			box-shadow: 0 0 32px rgba(0,0,0,1);
		}
		#blur{
			height: 160%;
			width: 160%;
			position: absolute;
			background: inherit;
			filter: blur(20px);
			left: -10%;
			top: -10%;
		}
		#komsek{
			height: 70%;
			width: 90%;
			position: absolute;
			left: 10%;
			top: 20%;
		}
		#tekst{
			height: 80%;
			width: 40%;
			background: inherit;
			box-shadow: inset 0 0 32px rgba(0,0,0,1);
			border: none;
			border-radius: 20px;
			color: white;
			padding: 10px;
			font-size: 20px;
			resize: none;
		}
		#dugme{
			height: 8%;
			width: 40%;
			background: inherit;
			box-shadow: 0 0 32px rgba(0,0,0,1);
			border: none;
			border-radius: 20px;
			color: white;
			font-size: 30px;
		}
		#naslov{
			position: absolute;
			width: 80%;
			left: 10%;
			top: 1%;
			height: 7%;
			text-align: center;
			color: white;
			z-index: 1;
			font-size: 40px;
		}
		#ime{
			color: white;
			font-size: 25px;
		}
		#imee{
			position: absolute;
			border-radius: 20px;
			border: none;
			background: inherit;
			box-shadow: inset 0 0 32px rgba(0,0,0,1);
			color: white;
			height: 5%;
			padding-left: 10px;
			font-size: 20px;
		}
		#kom{
			color: white;
			font-size: 25px;
		}
		#dugmenazad{
			position: absolute;
			z-index: 1;
			left: 2%;
			top: 2%;
			color: white;
			font-size: 30px;
		}
		#link{
			color: white;	
		}
		#komentari{
			position: absolute;
			left: 120%;
			top: 10%;
		}
	</style>
</head>
<body>
	<div id="kutija">
		<div id="dugmenazad"><a href="file:///C:/Users/USER/Google%20Drive/Sajtovi/Apartmani/Apartmani%20Dukic%20Canj.html" style="text-decoration: none" id="link">< Nazad na početnu</a></div>
		<div id="naslov"><h1>Utisci</h1></div>
		<div id="blur"></div>
		<div id="komsek">
			<form action="" method="POST" id="komentar">
			<label id="ime">Ime:<br><input type="text" name="name" id="imee" required><br></label>
			<label id="kom">Utisak:<br><textarea cols="45" rows="15" name="comment" id="tekst" required></textarea></label><br>
			<input type="submit" name="Post comment" value="Objavi" id="dugme">
			</form>
			<div id="komentari">
			<h1>Ostali utisci:</h1>
			<?php
				include "comments.php";
			?>
			</div>
		</div>
	</div>
</body>
</html>