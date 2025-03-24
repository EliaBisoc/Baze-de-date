<?php
require_once "connection.php";
$msg="";
$bulk=new MongoDB\Driver\BulkWrite;

if(isset($_POST['submit'])){
    $target="./images/".basename($_FILES['poza']['name']);
    $data=array(
        '_id' => new MongoDB\BSON\ObjectID,
        'title' => $_POST['nume'],
        'image'=>$target
    );
    $bulk->insert($data);
    $client->executeBulkWrite('fotbalisti.poze', $bulk);
    if(move_uploaded_file($_FILES['poza']['tmp_name'], $target)){
        header('location:index.php');
    }else{
        $msg="Vai! Vai! Vai!";
    }
}