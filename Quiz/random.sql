<?php

$sql_connection = new MySQLi("Localhost","root","","cse311l_section_2_fall_20");


if($sql_connection->connect_error)
{
    echo "Not Connected, error: " .$mysqli_connection->connect_error;
}
else{
    echo "Connected";
}


?>