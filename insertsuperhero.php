<?php
$SERVER = "eu-cdbr-azure-north-e.cloudapp.net";
$USERNAME = "baa0a9a8041f1c";
$PASSWORD = "ea0c77dc";
$DATABASE = "marvel";

$db = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (!$db) {
    die("Could not connect:". mysqli_connect_error());

}

$sql = "SELECT * FROM superheros";
$result = "";
?>