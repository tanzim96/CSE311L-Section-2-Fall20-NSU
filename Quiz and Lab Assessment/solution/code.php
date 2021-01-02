<?php
$sql_connection = new MySQLi("Localhost","root","","cse311l_section_2_fall_20");


if($sql_connection->connect_error)
{
    echo "Not Connected, error: " .$sql_connection->connect_error;
}
else{
    echo "Connected ";
}

$sql = "SELECT First_name, Last_name,MIN(Salary),MAX(Salary),AVG(Salary) from employees group BY Job_Id";
if(mysqli_query($sql_connection, $sql)){
    echo "Query success ";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($sql_connection);
?>
