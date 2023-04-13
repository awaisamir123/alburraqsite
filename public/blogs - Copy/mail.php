<?php
$sFrom="info@al-burraq.com";
$sSubject="test";
$sName="qasim khalid";
// $sPhone=trim($_POST['Phone']);
$sMessage="hello";
$headers = 'From:'.$sFrom;
$myMail = "Name: ".$sName."\n"
				  // ."Phone: ".$sPhone."\n"
				  ."Email: ".$sFrom."\n"
				  ."Message: ".$sMessage;
$to="info@al-burraq.com";
$emailresult =mail($to,$sSubject,$myMail,$headers);
var_dump($emailresult);

die();
?>
