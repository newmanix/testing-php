<?php
//contact2.php

if(isset($_POST['password']))
{
	if($_POST['password']=='abc123')
	{//correct!
		echo 
		'
		<html>
			<body>
				<h1>Password correct!</h1>
				<p>Welcome to our website!</p>
			</body>
		</html>
		';
	}else{//failed!
		echo 
		'
		<html>
			<body>
				<h1>Password Failed</h1>
				<p>The password you entered is not correct!</p>
			</body>
		</html>
		';
	}

}else{
	echo 
	'
	<html>
		<head>
			<title>Password</title>
		</head>
		<h1>Password</h1>
		<body>
			<form action="password_form.php" method="post">
			Password: <input type="text" name="password" /><br />
			<input type="submit" value="Enter Password!" />
			</form>
		</body>
	</html>
	';
}

?>