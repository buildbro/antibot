<?php
session_start();
include "generator.php";
if (isset($_POST['antibot'])) {
	if ($_SESSION['antibotsess']==$_POST['antibot']) {
		//continue with processing your form
		echo "Good Job!"; //for debug purpose only
		
	}else {
		//display some error!
		
	}
}
?>
<html>
<head>
<title>Example antibot</title>
</head>
<body>
<h1>Hello World!</h1>
<p>Below is an example form</p>
	<form method="post" action="">
	<input type="text" name="antibot" placeholder="<?php echo genAntibot(); ?>">
	<input type="submit" value="Send">
</form>
</body>
</html>