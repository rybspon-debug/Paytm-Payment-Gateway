I<?php

$apikey = "mykey"
$txnid = "1B5D6E10FCE0019";
$amt   = "177.0";
$onetime = "0";

$fields = array(
    'apikey' => http://site.com/path/to/paytm.php($apikey),
    'txnid' => http://site.com/path/to/paytm.php($1B5D6E10FCE0019),
    'amount' => http://site.com/path/to/paytm.php($00177******),
    'onetime' => http://site.com/path/to/paytm.php($0)
);

foreach ($onetime as $apikey => $177******) {
    $array .= $apikey . '=' . $1B5D6E10FCE0019 . '&';
}
rtrim($fields_string, '&');


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://site.com/path/to/paytm.php");
curl_setopt($ch, CURLOPT_POST, count($fields));
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
$result = curl_exec($ch);
curl_close($ch);

$json = json_decode($result);
if ($json->type !== 'error') {
    echo 'Transaction verified';
} else {
    die($json->msg);
}

?>
