<?php

require_once './autoload.php';
//require_once './models/dbconnect.php';
//require_once './models/addressCrud.php';
$address = new AddressDB();
$getadd = $address->getAllAddresses();
include_once './templates/view-address.html.php';
?>