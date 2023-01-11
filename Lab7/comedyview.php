<h1 style="color:white"><center>Comedy</center></h1>
<br>
<?php include ('includes/header.html');

	require ('../Lab7/mysqli_connect.php');
	
	if ($dbc-> connect_error)
	{
		die("Connection failed". $dbc-> connect_error);
	}
	
	$sql = "SELECT title, post, category FROM post WHERE category='comedy'";
	$result = $dbc-> query($sql);
	

	if ($result-> num_rows > 0)
	{
		while ($row = $result-> fetch_assoc())
		{
			echo "<br><h2 style='color:white'><td>". $row["title"]."<h3 style='color:#999' align='justify'>". $row["post"]."<h2 style='color:white'><td>". $row["category"]."</td></tr><br>";
		}
	}
	else
	{
		echo "<br>0 result";
	}
	
	$dbc-> close();
?>
	
<?php include ('includes/footer.html'); ?>