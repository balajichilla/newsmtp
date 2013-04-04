<?php
$to="Balaji@smintellisofttech.com";
$fn="Fisrt Name";
$ln="Last Name";
$name=$fn.' '.$ln;
$from="mbmfit-noreply@plugnworks.com";
$subject = "Welcome to Website";
$message = "Dear $name, 


Your Welcome Message.


Thanks

";
include('smtpwork.php');

?>