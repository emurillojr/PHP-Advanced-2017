<?php
//
require_once './models/dbconnect.php';
require_once './models/addressCrud.php';
$address = getAllAddresses();
include_once './templates/view-address.html.php';
?>