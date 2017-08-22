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
                    <input class="form-control" name="firstname" id="firstname" value="$firstname" autofocus="" required maxlength="60" type="text">
                    <label for="familyname">Efternamn</label>
                    <input class="form-control" name="familyname" id="familyname" value="$familyname" required maxlength="60" type="text">
                    <label for="uniqueid">Personnummer</label>
                    <input class="form-control" name="uniqueid" id="uniqueid" placeholder="198012242536" value="$uniqueid" required maxlength="12" type="text">
                    <label for="phone">Telefon</label>
                    <input class="form-control" name="phone" id="phone" value="$phone" required maxlength="16" type="text">
                    <div class="update">
                    <label for="ptype">PTYPE</label>
                    <input class="form-control" name="ptype" id="ptype" value="" required maxlength="3" type="text">
                    <label for="barcode">Lånekortsnummer</label>
                    <input class="form-control" name="barcode" id="barcode" value="" required maxlength="10" type="text">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <label for="street">Gatunamn</label>
                    <input class="form-control" name="street" id="street" value="$street" required maxlength="60" type="text">
                    <label for="postalcode">Postnummer</label>
                    <input class="form-control" name="postalcode" id="postalcode" value="$postalcode" required maxlength="8" type="text">
                    <label for="street">Postort</label>
                    <input class="form-control" name="postaladdr" id="postaladdr" value="$postaladdr" required maxlength="60" type="text">
                    <label for="email">E-post</label>
                    <input class="form-control" name="email" id="email" value="$email" required maxlength="60" type="email">
                        </div>
                      </div>
                    <input class="btn btn-primary" id="mainsubmit" value="Skicka" type="submit">
                </form>
EOD;
