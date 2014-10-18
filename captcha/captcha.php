<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
		<?php
		
		$captcha = str_shuffle("abc");
			echo "$captcha";
			//if($_SERVER['REQUEST_METHOD'] == 'POST' )
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				if($captcha == $_POST['captcha']){
				$succes = "login successfully";
			}
			else{
				$fail = "login fail";
			}
			
			
		?>
		
		<form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
			<input type="text" name="captcha">
			<input type="submit">
			
			
		</form>
		
		<?php echo "$succes";
				echo "$fail";
			?>
</body>
</html>