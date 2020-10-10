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

function selectAll()
{
    global $connection;
    $sql    = "SELECT * FROM contacts";
    $query  = $connection->query($sql);
    $result = converter($query);
    return $result;
}

function insert($tbl, $data)
{
    global $connection;
    foreach( array_keys($data) as $key ) 
    {
        $fields[] = "`$key`";
        $values[] = "'" .$data[$key] . "'";
    }
    $fields = implode(",", $fields);
    $values = implode(",", $values);
    $sql = "INSERT INTO `$tbl`($fields) VALUES ($values)";
    $connection->query($sql);
    return true;
}

$method = $_SERVER['REQUEST_METHOD'];

// var_dump(json_decode(file_get_contents('php://input')));
// var_dump($_POST);
// var_dump($_GET);

echo json_encode(selectAll());