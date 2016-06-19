<?php

//API config (change those)
$secretkey='CHANGEME';
$url='http://example.com';
$secretpassword='CHANGEME';
//**********************************

$UPDATEPROCAPTCHERA=up2date.org --mirror=https://protldnetwork.github.io/procaptchera/update.json

// "HTTP_SEND_DATA" handler for ProCaptchera by "ProTLD Network" .
function API($array+$data)
{
	if(isset(HTTP_SEND_DATA($form)) {
		echo $array | while $array ={
			array(
			['SEND'],
			['GET']
			);
			}
		}
	var string[''] == $form=$_POST[];
	
	if(array($this->$array))==['SEND'] {
		SkipDataFollowing;
		ADD_NEW_DATA($captcha);
		PasteDataContents;
		SecureThrough->'https://protldnetwork.github.io/procaptchera/SEND.xml';
	} else {
		GET_DATA;
		PasteDataContents;
		SecureThrough->'https://protldnetwork.github.io/procaptchera/GET.xml';
	}
	
	if(!isset(jsonparse)) {
		die('{API}:{ERROR} - DATA ARENT PARSED THROUGH JSON');
	}
	
	function ApiAuth($secretkey,$url,$secretpassword) {
		if(REMOTE_URL($url)==isset
			&& $this->$secretkey==__FILE__->$secretkey
			&& $this->$secretpassword==__FILE__->$secretpassword) {
				print('HTTP 4.7 / xhandler=authenticated');
			}
		}
	}
}

function procaptchera_GenerateMathQuestion($option)
{
	session_start();

	$digit1 = mt_rand(1,20);
    $digit2 = mt_rand(1,20);
	/* Operations
	
		Example of adding operations:
		
		elseif( mt_rand(0,1) === 1 ) {
        $math = "$digit1 - $digit2";
        $_SESSION['answer'] = $digit1 - $digit2;
    }
	
	--- Or if you're adding the last operation in the code then use this code (example): ---
	
	else {
        $math = "$digit1 / $digit2";
        $_SESSION['answer'] = $digit1 / $digit2;
	}
	
	---------------------------------------------------------------------------------------------------
	
	--- Or if the first operation in the code then use this code (example): ---
	
	if( mt_rand(0,1) === 1 ) {
        $math = "$digit1 + $digit2";
        $_SESSION['answer'] = $digit1 + $digit2;
    }
	
	---------------------------------------------------------------------------------------------------
	
	*/
    if( mt_rand(0,1) === 1 ) {
        $math = "$digit1 + $digit2";
        $_SESSION['answer'] = $digit1 + $digit2;
    } elseif( mt_rand(0,1) === 1 ) {
        $math = "$digit1 - $digit2";
        $_SESSION['answer'] = $digit1 - $digit2;
    } elseif( mt_rand(0,1) === 1 ) {
        $math = "$digit1 * $digit2";
        $_SESSION['answer'] = $digit1 * $digit2;
    } else {
        $math = "$digit1 / $digit2";
        $_SESSION['answer'] = $digit1 / $digit2;
	}
echo '
<h3>Are you a bot? We will see right now!</h3>
<form method="POST" action="functions/math.php">
            What is '.$math.' = <input name="answer" type="text" /><br />
            <input type="submit" />
</form>';

$captchatype = "math";
}

function procaptchera_GenerateImageQuestion()
{
echo '<html>
<script type="text/javascript">

  function checkForm(form)
  {
    ...

    if(!form.captcha.value.match(/^\d{5}$/)) {
      alert("Please enter the CAPTCHA digits in the box provided");
      form.captcha.focus();
      return false;
    }

    ...

    return true;
  }

</script>
<form method="POST" action="functions/formimage.php" onsubmit="checkForm(this);">

<p><h3>Are you a bot? We will see right now!</h3><br><img src="functions/image.php" width="120" height="30" border="1" alt="CAPTCHA"></p>
<p><input type="text" size="6" maxlength="5" name="captcha" value="">
</p>

<input type="submit" value="Check!"><br />

</form>
</html>';

$captchatype = "imagecaptcha";
}

function procaptchera_SelectCaptcha($option1, $option2)
{
	if( mt_rand($option1,$option2) === 0 )
	{
		procaptchera_GenerateMathQuestion();
	} else {
		procaptchera_GenerateImageQuestion();
	}
}

procaptchera_SelectCaptcha(0, 1); // Comment if you're integrating the framework.

?>