<?php

// Production config
if(!file_exists("is-development"))
{
	require("application/config/emu-devstore-production.php");
}

// Development config
else
{
	// PayPal settings
	$config['paypal'] = array(
		"sandbox" => false,
		"receiver" => "PayPal Email",
		"postback" => "https://WEBSITE/postback",
		"return" => "https://WEBSITE/buy/success",
		"donation_currency" => "USD",
		"launch" => true
	);

	//Global
	$config['site-title'] = "Website Title";
	$config['contact-email'] = "mail@example.com";

	// CDN
	$config['ftp_hostname'] = "FTP SERVER";
	$config['ftp_username'] = "FTP Username";
	$config['ftp_password'] = "FTP Password";
	$config['sender_mail'] = "no-reply@WEBSITE";
	$config['admin_mail'] = "YOUR EMAIL";
	// You need to point the FTP Username to the folder "files" in the root of EmuDevStore to get everything working properly
}