<?php
$dbconn = pg_connect("host=ec2-52-201-124-168.compute-1.amazonaws.com port=5432 dbname=d8gun8324pr1nq user=uyzfdijdubsqfv password=92e36150109ffc0b2828741b0cd22437e81fb4dc1607d7e93e20a02e81b1edb2");
if (!$dbconn) {
    // Connection failed
    echo "Error: Unable to connect to the database.";
} else {
    // Connection successful
    echo "Successfully connected to the database.";
}
