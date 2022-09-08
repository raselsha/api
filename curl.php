<?php
// ==================curl==================
$crl = curl_init(); // init curl
curl_setopt($crl,CURLOPT_URL,'https://www.google.com'); // hit the url
curl_setopt($crl,CURLOPT_RETURNTRANSFER,'https://www.google.com'); //set into variable
$result = curl_exec($crl); // assign to a variable
curl_close($crl); // close curl
print_r($result); // print output

// ==================curl==================



?>
