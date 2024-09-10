<?php


function send_telegram_msg($message){
	// Put Your Telegram Information Here
	$botToken  = '7407459092:AAFDrCqKa4eCLD3F3bi8cKTdJCqV7GPdVf0';// your tg token bot from botfather (dont put "bot" infront it)
	$chat_id  = ['1490882586'];// your tg userid from userinfobot
	
	
	$website="https://api.telegram.org/bot".$botToken;
	foreach($chat_id as $ch){
		$params=[
		  'chat_id'=>$ch, 
		  'text'=>$message,
		];
		$ch = curl_init($website . '/sendMessage');
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 3);
		curl_setopt($ch, CURLOPT_POST, 3);
		curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($ch);
		curl_close($ch);
	}
	return true;
}
?>