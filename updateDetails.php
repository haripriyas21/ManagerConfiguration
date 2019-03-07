<?php

require_once 'database_connections.php';
// Fetching the updated data & storin in new variables
$data = json_decode(file_get_contents("php://input"));
// Escaping special characters from updated data
$id = mysqli_real_escape_string($con, $data->id);
$name = mysqli_real_escape_string($con, $data->org_name);
$cname = mysqli_real_escape_string($con, $data->config_name);
$value = mysqli_real_escape_string($con, $data->config_value);
// mysqli query to insert the updated data
$query = "UPDATE org_details SET config_name='$cname',config_value='$value'WHERE org_name=$name";
mysqli_query($con, $query);
echo true;
?>
