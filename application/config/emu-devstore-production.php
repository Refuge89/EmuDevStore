<?php

// PayPal settings
$config['paypal'] = array(
"sandbox" => false,
"receiver" => "PayPal Email",
"postback" => "http://WEBSITE/postback",
"return" => "http://WEBSITE/buy/success",
"donation_currency" => "USD",
"launch" => true
);

//Global
$config['site-title'] = "Website Title";
$config['site-slogan'] = "Website Slogan"; // allowed html
$config['contact-email'] = "Contact Email";
// ranks: 0 buyer, 1 vendor, 2 manager, 3 admin
$config['register_rank'] = 1; // default rank when user register new account

// CDN
$config['ftp_hostname'] = "FTP SERVER";
$config['ftp_username'] = "FTP Username";
$config['ftp_password'] = "FTP Password";
$config['sender_mail'] = "no-reply@WEBSITE";
$config['admin_mail'] = "YOUR EMAIL";
// You need to point the FTP Username to the folder "files" in the root of EmuDevStore to get everything working properly
?>