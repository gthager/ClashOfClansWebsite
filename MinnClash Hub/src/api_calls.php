<?php

include('../config.php');

$TAG = CLAN_TAG;
$CLASH_API_KEY = CLASH_API_KEY;

$baseURL = 'https://api.clashofclans.com/v1';
function getClanInfo(){
    global $TAG, $baseURL, $CLASH_API_KEY;
    $url = $baseURL . '/clans/' . urlencode($TAG);
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Return the response as a string instead of outputting it
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $CLASH_API_KEY
    ]);
    return curl_exec($curl);
}

?>
