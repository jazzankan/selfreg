<?php
/**
 * Created by PhpStorm.
 * User: Anders
 * Date: 2017-08-19
 * Time: 11:21
 */
$passw = (empty($_POST['password']) ? "" : $_POST['password']);
if($passw == "sodcirk"){
    echo "approved";
};