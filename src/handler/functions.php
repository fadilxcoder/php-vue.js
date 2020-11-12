<?php

$servername = 'database';
$username   = 'myuser';
$password   = 'secret';
$dbname     = 'mydb';

$connection = new mysqli($servername, $username, $password, $dbname);
global $connection;

$connection->set_charset("utf8");

# Errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

# Database Manipulation
function converter($query)
{
    $arr = array();
    while( $data = $query->fetch_assoc()):
        $arr[] = $data;
    endwhile;
    return $arr;
}

function selectAllWines()
{
    global $connection;
    $sql    = "SELECT * FROM wines ORDER BY publish_date DESC";
    $query  = $connection->query($sql);
    $result = converter($query);
    return $result;
}

echo json_encode(selectAllWines());
