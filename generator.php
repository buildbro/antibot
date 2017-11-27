<?php
function generateKey ($length = 1) {
    $characters = '123456789';
    $randomString = '';
    for ($i = 0; $i < $length; $i++){
        $randomString .=$characters[rand(0, strlen($characters)-1)];
    }
    return $randomString;
}

function genAntibot () {
	$cCaptcha = generateKey();
	$_SESSION['antibotsess'] = $cCaptcha;
	$cString = "123456789";
	$cString = str_replace("$cCaptcha", "*", $cString);
	return $cString;
}
?>