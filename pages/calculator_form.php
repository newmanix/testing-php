<?php
//calculator_form.php

if(isset($_POST['num1']))
{
	$total = (float)$_POST['num1'] + (float)$_POST['num2'];
	echo 
	'
	<html>
		<body>
			<h1>Thank you!</h1>
			<p>Your total is ' . $total . '</p>
		</body>
	</html>
	';

}else{
	echo 
	'
	<html>
		<body>
			<form action="calculator_form.php" method="post">
			First Number: <input type="text" name="num1" /><br />
			Second Number: <input type="text" name="num2" /><br />
			<input type="submit" value="Add Em!" />
			</form>
		</body>
	</html>
	';

}

?>