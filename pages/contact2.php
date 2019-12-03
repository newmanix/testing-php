<?php
//contact2.php

if(isset($_POST['email']))
{
	echo 
	'
	<html>
		<body>
			<h1>Thank you!</h1>
			<p>We will be in touch within 24 hours.</p>
		</body>
	</html>
	';

}else{
	echo 
	'
	<html>
		<head>
			<script>
				function checkform(thisForm)
				{
					if(thisForm.name.value == "")
					{
						document.getElementById("feedback").innerHTML = "Please provide your name.";
						thisForm.name.focus();
						return false;
					}
					return true;
				}
			</script>
		</head>
		<body>
			<form action="contact2.php" method="post" onsubmit="return checkform(this)">
			Name: <input type="text" name="name" id="name" /><br />
			<div id="feedback"></div>
			Email: <input type="text" name="email" /><br />
			Message: <input type="text" name="message" /><br />
			<input type="submit" value="Contact us!" />
			</form>
		</body>
	</html>
	';

}

?>