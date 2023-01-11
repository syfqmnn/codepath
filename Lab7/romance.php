<?php
$page_title = "romance";
include ('includes/header.html');

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$errors = array();

if (empty($_POST['Title']))
	{$errors[] = 'Please put your title.';
	}
	else
	{
		$t3 = trim($_POST['Title']);
	}
if (empty($_POST['Post']))
	{$errors[] = 'Please put your post';
	}
	else
	{
		$p4 = trim($_POST['Post']);
	}
	
if (empty($_POST['Category']))
	{$errors[] = 'Please put your category';
	}
	else
	{
		$c3 = trim($_POST['Category']);
	}
	
if (empty($errors)) 
	{
		require ('../Lab7/mysqli_connect.php');

		$q = "INSERT INTO post (Title, Post, Category) 
		VALUES ('$t3', '$p4', '$c3');";
		
		$r = @mysqli_multi_query($dbc,$q);

		if ($r)
		{
			echo 
			"	<br>
				<center><b style='color:white'>Done Submit</b>
				<br/>
				<br/>Title : <b style='color:white'>$t3</b><br/>
				<br/>Post : <b style='color:white'>$p4</b><br/>
				<br/>Category : <b style='color:white'>$c3</b><br/>
				</center>";
		}		
			else
			{
				echo '<h1 style="color:white">Error</h1>
				<p class="error" >Uh-oh! Something went wrong. We could not display your post.</p>';

				echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
			}
			
		mysqli_close($dbc);
			
	exit();
	}
	else
		{
			echo '<h1 style="color:white">Error</h1>
			<p class="error" >The following error occurred:<br />';
			foreach ($errors as $msg) 
			{
				echo " - $msg<br />\n";
			}
			echo '</p><p style="color:white">Please try again.</p><p><br /></p>';
		
		}
}

?>

<form action="romance.php" method="post" style="color:white" align="center">

        <label><h1>Romance</h1></label>
		<br>
		Title 
		<br>
		<textarea name="Title" rows="2" cols="40"></textarea>
		<br>
		<br>
        Post
		<br>
		<textarea name="Post" rows="5" cols="40"></textarea>
		<br>
		<br>
		Category
		<br>
		<textarea name="Category" rows="2" cols="40"></textarea>
		<br>
		<br>
        <input type="submit" name="submit" value="Submit" style="color:black"/></p>
	</form>
<?php include ('includes/footer.html'); ?>