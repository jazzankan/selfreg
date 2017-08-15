<?php
/**
 * Created by PhpStorm.
 * User: Anders
 * Date: 2017-08-14
 * Time: 20:22
 */
$today = date("Y-m-d");
$expiration = date("Y-m-d", strtotime($today. ' + 1 year'));

echo $expiration;

$jsonupdate = <<<EOD
{"barcodes": ["$barcode"] "emails": [ "{$email}" ], "names": [ "{$familyname}, {$firstname}" ], "addresses":[{"lines": ["{$street}","{$postalcode} {$postaladdr}"], "type":"a"}],

"phones":[{"number":"{$phone}","type":"t"}], "patronType": $ptype, "expirationDate": "$expiration", "uniqueIds": [ "{$uniqueid}" ] }
EOD;
