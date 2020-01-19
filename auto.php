<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Komis Samochodowy</title>
<link rel="stylesheet" href="auto.css">

</head>
<body>
	<header>
		<h1>SAMOCHODY</h1>
	
	</header>
	<article>
		<h2>Wykaz samochodów</h2>
		<?php
	
	/*$conn = mysqli_connect("localhost", "root", "", "komis");
	mysqli_set_charset($conn, "utf8");
	
	//$tow = $_POST["tow"];
	$q = "SELECT id, marka, model FROM samochody";
 
	$result = mysqli_query($conn, $q);
		echo "<ul>";
	while($row = mysqli_fetch_row($result))
	{
		echo "<li>".$row[0].$row[1].$row[2]."</li>";
	}
		echo "</ul>";*/
		$conn = new mysqli("localhost", "root", "", "komis");
		$conn->set_charset("utf8");
		$q = "SELECT id, marka, model FROM samochody";
		$result = $conn->query($q);
		echo "<ul>";
		while($obj = $result->fetch_object())
		{
			echo "<li>".$obj->id.$obj->marka.$obj->model."</li>";
		}
		echo "</ul>";
		//$result->free(); 
	
	 
	?>
		<h2>Zamówienia</h2>
		<?php
	
		/*$q = " SELECT Samochody_id, Klient FROM zamowienia";
 
	$result = mysqli_query($conn, $q);
		echo "<ul>";
	while($row = mysqli_fetch_row($result))
	{
		echo "<li>".$row[0].$row[1]."</li>";
	}
		echo "</ul>";*/
		$q = " SELECT Samochody_id, Klient FROM zamowienia";
		$result = $conn->query($q);
		echo "<ul>";
		while($obj = $result->fetch_object())
		{
			echo "<li>".$obj->Samochody_id.$obj->Klient."</li>";
		}
		echo "</ul>";
		//$result->free(); 
		
	?>
		
	</article>
	<aside>
	<h2>Pełne dane: Fiat</h2>
	<?php
	/*$q = "SELECT * FROM samochody WHERE marka = 'Fiat' ";
 
	$result = mysqli_query($conn, $q);
		 
	while($row = mysqli_fetch_row($result))
	{
 		foreach($row as $col)
		{
			echo $col."/";
		}
			echo "<br>";
	}
	mysqli_close($conn)	 */
	$q = "SELECT * FROM samochody WHERE marka = 'Fiat'";
	$result = $conn->query($q);
		
		while($obj = $result->fetch_object())
		{
			foreach($obj as $col)
		{
			echo $col."/";
		}
			echo "<br>";
			
			//echo "<li>".$obj->Samochody_id.$obj->Klient."</li>";
		}
		 
		$result->free(); 
	
	$conn->close();
	?>
	
	<!--script3 -->
	</aside>
	<footer>
		<table>
		<tr><td><a href="kwerendy.txt">Kwerendy</a></td> <td><img src="auto.png" alt="komis samochodowy"></td></tr>
		</table>
	</footer>
	
</body>
</html>
