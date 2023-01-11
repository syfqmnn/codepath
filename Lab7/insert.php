<?php
	$dbc = mysqli_connect('localhost', 'root', '');
	
	if(!$dbc)
		(
			echo 'Not Connected To Server';
		}
	
	if(!mysqli_select_db($dbc,'sitename'))
		(
			echo 'Database Not Selected';
		}
		
	$Title = $_POST['title'];
	$Post = $_POST['post'];
	$Cat = $_POST['category']

	$sql = "INSERT INTO users (Title, Post, Category) VALUES ('$Title', '$Post', '$Category')";

	id(!mysql_query($dbc.$sql))
	{
		echo 'Not Inserted';
	}
	else
	(
		echo 'Inserted';
	)

?>