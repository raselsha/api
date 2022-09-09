<?php
//AQVGL-5SyLvQsxxZK3pLAF3s4TGIywvj0OxaHPetp_6b7uhBYw1uyAbnOSdGBvvvmGdLaEiogrAkPTfaWjDNnQ-mCwYcYhj6tX8JA_-DJiHolMgVhizGe4TnZhdphswT4atMw6nyrBQvVDsXyLolqb5gj3u5ts8WXLcNn0RwgrDbd4i_d_YoY8gvkFDvUsGdlIokeyDziz4l0m-diBDbYzoVZskKXb8fj4H_89t8WQoQD9g9spdNvcdl0-GU07KQL6cBgUxbFaPSVN1T0NI4n8i9kzDRUb67Hrd1dl233lt6Kw9Vc1FC9JdYTkhToN8nvZM7B3LwcKnJAy4hc2WCS549NFHJLA
$token = 'AQVzqniB1SdIRGkw7htExtya5Yup6Nw_Bwf2LsYlMmm5SjLqUyVWZE8vps995N9WSzUoODFjkRFVm7T6KeERnhpN2gtZHT6dYRe3eDIFKXE3sGdKJmc3tzV1Jw08x8jL3JWd8QwWvtQiC1xODhwlcMjmAx48m8HlygW83mVAlkcAINMTb9ZXG-1tjvC4EENbshzNa461R3dzsPBFZOTTdglmixUo9VIHRjEhiiHryTbPUreoByzL46UtmUZkJWja18kG9NjwOk2GN4Tc-K75HwZvQnvxdTxoPLoym62q-ONwE5lPLXXJiKwaVuKRpsHUg0RICuNUbFjoMjDYpQDbo05O6nDAng';
$url = 'https://api.linkedin.com/v2/ugcPosts';
$header = array();
$header[] = 'Content-length: 0';
$header[] = 'Content-type: application/json';
$header[] = 'Authorization: Bearer '.$token;

$crl = curl_init(); // init curl
curl_setopt($crl,CURLOPT_URL,$url); // hit the url
// curl_setopt($crl, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS,"postvar1=value1&postvar2=value2&postvar3=value3");
curl_setopt($crl,CURLOPT_HTTPHEADER,$header); //set into variable
curl_setopt($crl,CURLOPT_RETURNTRANSFER,true); //set into variable
$result = curl_exec($crl); // assign to a variable
curl_close($crl); // close curl
echo '<pre>';
$result = json_decode($result,true);
print_r($result); // print output
// echo '<table border="1">';
// foreach($result['data'] as $row){
//     echo '<tr>';
//     echo '<td>'.$row['ID'].'</td>';
//     echo '<td>'.$row['name'].'</td>';
//     echo '<td>'.$row['email'].'</td>';
//     echo '<tr>';
// }
// echo '</table>';
?>
<h2><?= $result['localizedFirstName'].' '.$result['localizedLastName'] ?></h2>
<img src="<?= $result['profilePicture']['displayImage']?>" alt="">
