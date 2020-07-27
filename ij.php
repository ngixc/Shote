<?php
function bacaURL($url){
     $session = curl_init(); // buat session
     // setting CURL
     curl_setopt($session, CURLOPT_URL, $url);
  curl_setopt($session, CURLOPT_RETURNTRANSFER, 1);
     $hasil = curl_exec($session);
     curl_close($session);
     return $hasil;
}
$sumber =  bacaURL('https://ngixc.netlify.app/');
$ambil_kata = explode('<b>', $sumber);
echo $ambil_kata[0];
?>
