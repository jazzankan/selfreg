<?php
/**
 * Created by PhpStorm.
 * User: Anders
 * Date: 2017-07-13
 * Time: 22:32
 */
$form = <<<EOD
<form id="regform" role="form" action="" method="post" accept-charset="UTF-8">
                  <div class = "row">
                    <div class="col-md-6">
                    <label for="firstname">Förnamn</label>
                    <input class="form-control" name="firstname" id="firstname" value="" autofocus="" maxlength="60" type="text">
                    <label for="familyname">Efternamn</label>
                    <input class="form-control" name="familyname" id="familyname" value="" maxlength="60" type="text">
                    <label for="uniqueid">Personnummer</label>
                    <input class="form-control" name="uniqueid" id="uniqueid" value="" maxlength="12" type="text">
                    <label for="phone">Telefon</label>
                    <input class="form-control" name="phone" id="phone" value="" maxlength="16" type="text">
                    </div>
                    <div class="col-md-6">
                    <label for="street">Gatunamn</label>
                    <input class="form-control" name="street" id="street" value="" maxlength="60" type="text">
                    <label for="postalcode">Postnummer</label>
                    <input class="form-control" name="postalcode" id="postalcode" value="" maxlength="8" type="text">
                    <label for="street">Postort</label>
                    <input class="form-control" name="postaladdr" id="postaladdr" value="" maxlength="60" type="text">
                    <label for="email">E-post</label>
                    <input class="form-control" name="email" id="email" value="" maxlength="60" type="text">
                        </div>
                      </div>
                    <input class="btn btn-primary" id="mainsubmit" value="Skicka" type="submit">
                </form>
EOD;
