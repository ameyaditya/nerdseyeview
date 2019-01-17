<?php
	session_start();
	$_message = 1;
	$response = array();
	$response['name'] = $_POST['cName'];
	$response['email'] = $_POST['cEmail'];
	$response['website'] = $_POST['cWebsite'];
	$response['message'] = $_POST['cMessage'];
	$fp = fopen('messages.json', 'a');
	fwrite($fp, json_encode($response));
	fclose($fp);
	header("Location: contact.html");
?>