<?php 

// your cPanel username. Replace root with your cPanel username

$cpanel_user = 'waqasmalik10';

// your cPanel password. Replace ‘password; with your cPanel password.

$cpanel_pass = 'GouengiSun10!';

// your cPanel skin. Replace x2 with your cpanel skin in use.

$cpanel_skin = '';

// your cPanel domain

$cpanel_host = 'al-burraq.com';

// subdomain name that you desire to be created

$subdomain = 'mysubdomain';

// Checks that port 2082 is open for your cPanel. This is open by default.

$sock = fsockopen($cpanel_host,2082);
if(!$sock) {
print('Socket error');
exit();
}
else
{
	print('socket');
	exit();
}

// Authenticates username and password for cPanel

$pass = base64_encode("$cpanel_user:$cpanel_pass");
$in = "GET /frontend/$cpanel_skin/subdomain/doadddomain.html?rootdomain=$cpanel_host&domain=$subdomainrn";
$in .= "HTTP/1.0rn";
$in .= "Host:$cpanel_hostrn";
$in .= "Authorization: Basic $passrn";
$in .= "rn";

// Creates a subdomain after authentication of credentials.

fputs($sock, $in);
while (!feof($sock)) {
$result .= fgets ($sock,128);
}
fclose($sock);

echo $result;


?>