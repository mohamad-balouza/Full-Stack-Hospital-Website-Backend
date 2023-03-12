<?php
include ('connection.php');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

$query = $mysqli->prepare("select hospital_users.id, users.id, users.name, hospitals.id, hospitals.name, hospital_users.date_joined, hospital_users.date_left
from hospital_users 
inner join hospitals on hospital_users.hospital_id = hospitals.id
inner join users on hospital_users.user_id = users.id
where users.usertype_id = 1
");

