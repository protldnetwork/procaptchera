<?php
if(!isset($_POST['captcha'])) {
	echo "[API_error]: came from *direct_access* while required is *form_access*";
	die();
}
    session_start();
    if($_POST['captcha'] != $_SESSION['digit']) {
		die("Sorry, the CAPTCHA code entered was incorrect!");
	} else {
		echo "Correct Captcha!";
	}
    session_destroy();
?>