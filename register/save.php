<?php

$json_string = json_encode($_POST);
$file_handle = fopen('posts.json', 'a');
fwrite($file_handle, "\r\n");
fwrite($file_handle, $json_string);
fwrite($file_handle, "\r\n");
fclose($file_handle);

if($_POST)
{
	$to_Email   	= "sreehari.r96@gmail.com"; //Replace with recipient email address

	$subject        = $_SERVER['SERVER_NAME'].' SOMEONE REGISTERED'; //Subject line for emails
	
	
	//check if its an ajax request, exit if not
  //   if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	
		// //exit script outputting json data
		// $output = json_encode(
		// array(
		// 	'type'=>'error', 
		// 	'text' => 'Request must come from Ajax'
		// ));
		
		// die($output);
  //   } 
	
	// check $_POST vars are set, exit if any missing
	// if(!isset($_POST["userName"]) || !isset($_POST["userEmail"]) || !isset($_POST["userFiction"]) || !isset($_POST["userCollege"]) || !isset($_POST["userPhone"]) || !isset($_POST["userFacebook"]) || !isset($_POST["userCity"]))
	// {
	// 	$output = json_encode(array('type'=>'error', 'text' => 'Input fields are empty!'));
	// 	die($output);
	// }

	//Sanitize input data using PHP filter_var().
	// $user_Name        = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
	// $user_Email       = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
	// $user_Fiction     = filter_var($_POST["userFiction"], FILTER_SANITIZE_STRING);
	// $user_College        = filter_var($_POST["userCollege"], FILTER_SANITIZE_STRING);
	// $user_Phone       = filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);
	// $user_Facebook     = filter_var($_POST["userFacebook"], FILTER_SANITIZE_STRING);
	// $user_City     = filter_var($_POST["userCity"], FILTER_SANITIZE_STRING);
	
	// $user_Fiction = str_replace("\&#39;", "'", $user_Fiction);
	// $user_Fiction = str_replace("&#39;", "'", $user_Fiction);
	
	//additional php validation
	// if(strlen($user_Name)<4) // If length is less than 4 it will throw an HTTP error.
	// {
	// 	$output = json_encode(array('type'=>'error', 'text' => 'Name is too short or empty!'));
	// 	die($output);
	// }
	// if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) //email validation
	// {
	// 	$output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid email!'));
	// 	die($output);
	// }
	// if(strlen($user_Fiction)<5) //check emtpy fiction
	// {
	// 	$output = json_encode(array('type'=>'error', 'text' => 'Too short FICTION! Please enter something.'));
	// 	die($output);
	// }

	// if(strlen($user_College)<1) //check emtpy college
	// {
	// 	$output = json_encode(array('type'=>'error', 'text' => 'Enter Valid College Name'));
	// 	die($output);
	// }

	// if(strlen($user_Phone)<7) //check emtpy phone
	// {
	// 	$output = json_encode(array('type'=>'error', 'text' => 'Too short Phone Number'));
	// 	die($output);
	// }

	// if(strlen($user_Facebook)<5) //check emtpy fb id
	// {
	// 	$output = json_encode(array('type'=>'error', 'text' => 'Too short Facebook ID'));
	// 	die($output);
	// }

	// if(strlen($user_City)<2) //check emtpy city
	// {
	// 	$output = json_encode(array('type'=>'error', 'text' => 'Not a City'));
	// 	die($output);
	// }
	
	//proceed with PHP email.
	$headers = 'From: '.'EXPLARA'.'' . "\r\n" .
	'Reply-To: '."NOBODY".'' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	 $debug = 'REGISTERATION HAPPENED AT ADHARVA.COM'."\r\n\r\n";
	// $msgforuser = 'Thank You for applying to ADHARVA 2k17 FLASH FICTION CONTEST'."\r\n"."The Below Entry has been submitted to ADHARVA";
	// $sentMail = @mail($to_Email2, $subject, $user_Fiction . "\r\n\n\r\n\n"  .'Name:'.$user_Name. "\r\n" .'Email ID: '.$user_Email. "\r\n".'College:'.$user_College. "\r\n".'Phone Number:'.$user_Phone. "\r\n".'Facebook Username:'.$user_Facebook."\r\n".'City:'.$user_City. "\r\n", $headers);
	// if($sentMail)
	// {
	// 	$debug .= 'Riyanka, ';
	// }
	// else
	// {
	// 	$debug .= 'NOT Riyanka, ';

	// }
	// $sentMail = @mail($to_Email3, $subject, $user_Fiction . "\r\n\n\r\n\n"  .'Name:'.$user_Name. "\r\n" .'Email ID: '.$user_Email. "\r\n".'College:'.$user_College. "\r\n".'Phone Number'.$user_Phone. "\r\n".'Facebook Username'.$user_Facebook."\r\n".'City'.$user_City. "\r\n", $headers);
	// if($sentMail)
	// {
	// 	$debug .= 'Sruthi, ';
	// }
	// else
	// {
	// 	$debug .= 'NOT Sruthi, ';

	// }
	// $sentMail = @mail($user_Email, $subject, $msgforuser ."\r\n\n\r\n\n". $user_Fiction . "\r\n\n\r\n\n"  .'Name:'.$user_Name. "\r\n" .'Email ID: '.$user_Email. "\r\n".'College:'.$user_College. "\r\n".'Phone Number:'.$user_Phone. "\r\n".'Facebook Username:'.$user_Facebook."\r\n".'City:'.$user_City. "\r\n", $headers);
	// if($sentMail)
	// {
	// 	$debug .= 'USER: '.$user_Email."\r\n";
	// }
	// else
	// {
	// 	$debug .= 'NOT USER: '.$user_Email."\r\n";
	// }
	$sentMail = @mail($to_Email, $subject, $debug.'JSON SENT AS EMAIL '."\r\n\r\n".$json_string ."\r\n\n\r\n\n" , $headers);
}
?>