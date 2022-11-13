<?php
    $con = pg_connect("host=localhost dbname=mydbuddydb user=postgres password=Activepostgresqlnow23")
    or die('Could not connect: ' . pg_last_error());

    echo "Connected";
?>