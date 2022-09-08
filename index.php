<?php

$crl = curl_init(); // init curl
curl_setopt($crl,CURLOPT_URL,'https://softplaner.com/api/'); // hit the url
curl_setopt($crl,CURLOPT_RETURNTRANSFER,true); //set into variable
$result = curl_exec($crl); // assign to a variable
curl_close($crl); // close curl
$result = json_decode($result,true);
//print_r($result); // print output
echo '<table border="1">';
foreach($result['data'] as $row){
    echo '<tr>';
    echo '<td>'.$row['ID'].'</td>';
    echo '<td>'.$row['name'].'</td>';
    echo '<td>'.$row['email'].'</td>';
    echo '<tr>';
}
echo '</table>';
?>