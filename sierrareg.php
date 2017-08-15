<?php

$firstname = (empty($_POST['firstname']) ? "" : $_POST['firstname']);
$familyname = (empty($_POST['familyname']) ? "" : $_POST['familyname']);
$uniqueid = (empty($_POST['uniqueid']) ? "" : $_POST['uniqueid']);
$phone = (empty($_POST['phone']) ? "" : $_POST['phone']);
$street = (empty($_POST['street']) ? "" : $_POST['street']);
$postalcode = (empty($_POST['postalcode']) ? "" : $_POST['postalcode']);
$postaladdr = (empty($_POST['postaladdr']) ? "" : $_POST['postaladdr']);
$email = (empty($_POST['email']) ? "" : $_POST['email']);
$ptype = (empty($_POST['ptype']) ? 0 : $_POST['ptype']);
$barcode = (empty($_POST['barcode']) ? "" : $_POST['barcode']);

$searchresult = Array();
$created = Array();
$errormsg = "";
$result = "";

require_once 'form.php';

if($firstname != "" && $familyname != "" && $barcode == "") {
    //$form = "";
    require 'jsonsearch.php';
    require 'jsondata.php';
    require_once 'patronapicall.php';
    $searchresult = SearchPatron($jsonsearch);
    var_dump($searchresult);
    if($searchresult['total'] != 0){
       $errormsg = "Du verkar redan vara registrerad! Kontakta biblioteket!";
    }
    else{
        $created = CreatePatron($jsondata);
        var_dump($created);
          if(isset($created['link'])){
              $result  = <<<EOD
                <p>Tack för din registrering!</p>
              <p id="complete">Om du befinner dig vid bibliotekets informationsdiskar kan du kan lämna över direkt till personalen för kontroll och komplettering!</p>
EOD;
          }
          else{
             $errormsg = "Något gick fel. Kontakta biblioteket!";
          }
    }
}

if($firstname != "" && $familyname != "" && $barcode != "") {
    require 'jsonupdate.php';
    //require_once 'patronapicall.php';
    $updated = UpdatePatron($jsonupdate);
    //Här nedanför måste det ändras 
    if($searchresult['total'] != 0){
        $errormsg = "Du verkar redan vara registrerad! Kontakta biblioteket!";
    }
    else{
        $created = CreatePatron($jsondata);
        var_dump($created);
        if(isset($created['link'])){
            $result  = <<<EOD
                <p>Tack för din registrering!</p>
              <p id="complete">Om du befinner dig vid bibliotekets informationsdiskar kan du kan lämna över direkt till personalen för kontroll och komplettering!</p>
EOD;
        }
        else{
            $errormsg = "Något gick fel. Kontakta biblioteket!";
        }
    }
}
/*require_once 'patronapicall.php';
$resp = GetPatron("1049873");
//var_dump($pResponse);
echo $resp['emails'][0];*/

$html = <<<EOD
<!DOCTYPE html>
<html lang="sv"><head>
    <meta charset="UTF-8">
    <title>Registrera dig</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/selfreg.css" rel="stylesheet">
    <link rel="icon" type="image/gif" href="img/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script/selfreg.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
    <div class="headwrap">
        <div class="row header">
            <div class="col-sm-7">
                <h3 class="titlink"><a href="http://www.sh.se/bibliotek">Biblioteket</a> / <a href="https://pay.bibl.sh.se">Ansökan om lånekort</a></h3>
            </div>
            <div class="col-sm-2">
                <a href="https://pay.bibl.sh.se/eng">In English</a>
            </div>
            <div class="col-sm-3">
                <a href="http://www.sh.se"><img src="img/logo.png" class="img-responsive col-sx-pull-9 col-sm-pull-right" alt="logotyp SH" width="165" height="85"></a>
            </div>
        </div>
    </div>
    <div class="row maintext">
        <div class="col-sm-12">
                <div id="reginput">
                {$form}
                </div>
                <div class="errormsg">
                    <p>{$errormsg}</p>
                    </div>
                    <div id ="result">
                    <p>{$result}</p>
                    </div>
                    <p>&nbsp;</p> 
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 termsdiv">
            <p><b>Villkor:</b></p>
            <ul class="terms">
                <li>Fyll bara i om du <b>inte</b> har ett SH-kort.</li>
                <li>Som registrerad kan du få ett lånekort vid bibliotekets informationsdisk.</li>
                <li>Du måste visa legitimation vid uthämtande av lånekort.</li>
                <li>Du måste acceptera bibliotekets låneregler.</li>
                <li>Vid problem, kontakta biblioteket.</li>
            </ul>
        </div>
        <div class="col-sm-4">
            <div class="dibs_brand_assets" style="margin: 12px;">
                <img src="img/lanekort3.png" alt="Lånekort" id="card" width="215">
            </div>
        </div>
    </div>
    <div class="row footer" <p=""><a class="biblfoot" href="http://www.sh.se/bibliotek">Södertörns högskolebibliotek</a><a class="shfoot" href="http://www.sh.se">Södertörns högskola</a><p></p>
</div>
</div>

</body>
</html>
EOD;
echo $html;