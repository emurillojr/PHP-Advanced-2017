<?php

        require_once './models/dbconnect.php';
        
        require_once './models/addressCrud.php';
        
        $address = getAllAddresses();
        
        ?>


<?php
        include_once './templates/view-address.html.php';


?>
<br>
<a href="add.php">Add Address</a>