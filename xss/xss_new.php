<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars('xss_new1.php') ?>"> <script>alert('hacked')</script>
		<input type="submit"/>
	</form>
</body>
</html>