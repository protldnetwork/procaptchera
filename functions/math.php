<?php
session_start();

echo "You entered ".htmlentities($_POST['answer'])." which is ";

if ($_SESSION['answer'] == $_POST['answer'] ) {
	echo 'Correct!';
} else {
	echo 'Wrong. We expected '.$_SESSION['answer'];
}

?>