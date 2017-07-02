<?php
$html = <<<EOD
<!DOCTYPE html>
<html lang="sv"><head>
    <meta charset="UTF-8">
    <title>Registrera dig</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/selfreg.css" rel="stylesheet">
    <link rel="icon" type="image/gif" href="img/favicon.ico">
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
    <div class="headwrap">
        <div class="row header">
            <div class="col-sm-7">
                <h3 class="titlink"><a href="http://www.sh.se/bibliotek">Biblioteket</a> / <a href="https://pay.bibl.sh.se">Registrera dig</a></h3>
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
           <h3>Registrera dig som biblioteksanvändare</h3>
                <div id="reginput">
                <form id="regform" role="form" action="" method="post" accept-charset="UTF-8">
                    <label for="firstname">Förnamn</label>
                    <input class="form-control" name="firstname" id="firstname" value="" autofocus="" maxlength="60" type="text">
                    <p>&nbsp;</p>
                    <label for="familyname">Efternamn</label>
                    <input class="form-control" name="familyname" id="familyname" value="" maxlength="10" type="text">
                    <p>&nbsp;</p>
                    <div class=" checkbox move-left">
                        <label>
                            <input class="form-control move-left" required="" id="approved" value="" type="checkbox"> Jag accepterar köpvillkoren nedan
                        </label>
                    </div>
                    <p>&nbsp;</p>
                    <input class="btn btn-primary" value="Skicka" type="submit">
                </form>
                <p>&nbsp;</p>
                 </div>
            <div id="amount">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 kopvillkor">
            <p><b>Köpvillkor:</b></p>
            <ul class="terms">
                <li>Tjänsten är endast avsedd för registrerade användare av Södertörns högskolebibliotek</li>
                <li>Tjänsten avser betalning av avgifter i bibliotekets lånesystem</li>
                <li>Betalning sker hos <a href="http://www.dibs.se" target="_blank">DIBS</a> och godkända kort är Visa och MasterCard</li>
                <li>Liksom vid betalning över disk kan endast hela avgiften betalas - ingen delbetalning</li>
                <li><b>Avgifterna tas bort när du klickar vidare till kvitto efter godkänd betalning</b></li>
                <li>Vid problem, kontakta biblioteket</li>
            </ul>
            <p class="orgnumber">Organisationsnummer: 202100-4896</p>
        </div>
        <div class="col-sm-4">
            <div class="dibs_brand_assets" style="margin: 12px;">
                <img src="https://cdn.dibspayment.com/logo/checkout/combo/vert/DIBS_checkout_kombo_vertical_01.png" alt="DIBS - Payments made easy" width="215">
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