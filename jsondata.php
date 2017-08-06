<?php
/**
 * Created by PhpStorm.
 * User: Anders
 * Date: 2017-07-11
 * Time: 21:44
 */
$today = date("Y-m-d");
$expiration = date("Y-m-d", strtotime($today. ' + 21 days'));

$jsondata = <<<EOD
{ "emails": [ "{$email}" ], "names": [ "{$familyname}, {$firstname}" ], "addresses":[{"lines": ["{$street}","{$postalcode} {$postaladdr}"], "type":"a"}],

"phones":[{"number":"{$phone}","type":"t"}], "patronType": 14, "expirationDate": "{$expiration}", "uniqueIds": [ "{$uniqueid}" ] }
EOD;
