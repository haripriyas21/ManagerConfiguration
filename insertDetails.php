<?php
require_once 'database_connections.php';
// Fetching and decoding the inserted data
$data = json_decode(file_get_contents("php://input"));
// Escaping special characters from submitting data & storing in new variables.
$name = mysqli_real_escape_string($con, $data->org_name);
$cname = mysqli_real_escape_string($con, $data->config_name);
$value = mysqli_real_escape_string($con, $data->config_value);


// mysqli insert query
$query = "INSERT into org_details (org_name,config_name,config_value) VALUES ('$name','$cname','$value',)";
// Inserting data into database
mysqli_query($con, $query);
echo true;
?>
