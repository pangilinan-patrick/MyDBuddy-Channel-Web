<?php
$dbconn = pg_connect("host=localhost port=5432 dbname=mydbuddydb user=postgres password=postgres");
if (!$dbconn) {
    // Connection failed
    echo "Error: Unable to connect to the database.";
} else {
    // Connection successful
    echo "Successfully connected to the database.";
}
