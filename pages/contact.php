<?php
//contact.php

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
		<body>
			<form action="contact.php" method="post">
			Name: <input type="text" name="name" /><br />
			Email: <input type="text" name="email" /><br />
			Message: <input type="text" name="message" /><br />
			<input type="submit" value="Contact us!" />
			</form>
		</body>
	</html>
	';

}

?>