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

function selectOne($id)
{
    global $connection;
    $sql    = "SELECT * FROM contacts where id = $id";
    $query  = $connection->query($sql);
    $result = converter($query);
    return $result[0];
}

function update($array, $id)
{
    global $connection;
    $sql = "UPDATE contacts SET ";
    foreach($array as $key => $value)
    {
        $sql .= $key."='". $value."', ";
    }
    $sql = rtrim($sql, ", ");
    $sql .= " WHERE `id` = '". $id ."' ";
    echo $sql;
    $connection->query($sql);
}

function deletetOne($id)
{
    global $connection;
    $sql    = "DELETE FROM contacts where id = $id";
    $query  = $connection->query($sql);
    return $query;
}

$method = $_SERVER['REQUEST_METHOD'];

// var_dump(json_decode(file_get_contents('php://input'))); // Form submission - POST data
// var_dump($_POST);
// var_dump($_GET);
// var_dump($method);


switch($method) {
    case('GET'):
        echo json_encode(selectAll());
        break;
    case('POST'):
        $posts = json_decode(file_get_contents('php://input'));
        
        switch($posts->action) {
            case('insertFunction'):
                $arr = [
                    'name' => $posts->name,
                    'email' => $posts->email,
                    'city' => $posts->city,
                    'country' => $posts->country,
                    'job' => $posts->job,
                ];
                
                insert('contacts', $arr);
                echo json_encode(selectAll());
                break;
            case('fetchSingle'):
                echo json_encode(selectOne($posts->id));
                break;
            case('updateFunction'):
                $arr = [
                    'name' => $posts->name,
                    'email' => $posts->email,
                    'city' => $posts->city,
                    'country' => $posts->country,
                    'job' => $posts->job,
                ];
                
                update($arr, $posts->id);
                echo json_encode(selectAll());
                break;
            case('deleteFunction'):
                deletetOne($posts->id);
                echo json_encode(selectAll());
                break;
        }
        
        break;
    default:
        echo json_encode(selectAll());
}
