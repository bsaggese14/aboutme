<!DOCTYPE html>

<html>

	<head>
		<title> Bryan Saggese </title>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="../css/main.css">

	</head>

	<body>

		<div class = "top" id = "topContact">

			<?php include('../includes/nav.php'); ?>

		</div>

		<div id = "middle">

		</div>

		<div id = "content">

			<h2>Get In Touch With Me! </h2>

		    <form method="POST" action = "contact.php"> 
			   <input placeholder = "name" type= "text" name= "name" required ><br><br>
			   <input placeholder = "email" type = "text" name  = "email"> <br><br>
			  <select name="inquiryReason">
			    <option value="other">Other</option>
			    <option value="question">Question</option>
			    <option value="job">Job Offer</option>
			  </select>
			  <br><br>
			  <textarea placeholder = "message" name="message" rows="7" cols="30" required ></textarea><br> 
			  <input type="submit" name = "submit" value="Send email"/> 
		    </form>
		    <?php include("../includes/form.php"); ?>
			<p>Image Credit: <a href = "https://unsplash.com/photos/B6yDtYs2IgY">UnSplash</a></p>

		</div>

	</body>

</html>