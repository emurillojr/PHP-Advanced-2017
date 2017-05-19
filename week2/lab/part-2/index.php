<?php
//
require_once './autoload.php';
$address = new AddressDB();
$getadd = $address->getAllAddresses();
include_once './templates/view-address.html.php';
?>