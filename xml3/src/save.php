<?php
if(isset($_POST['upload'])){
    $id=$_POST['id'];
    $title=$_POST['title'];
    $target="./images/".basename($_FILES['image']['name']);

    $data=array(
        'id'=>$id,
        'title'=>$title,
        'image'=>$target,
    );
    $xml=simplexml_load_file('data.xml');
    $date=$xml->addChild('date');
    $date->addChild('id',$id);
    $date->addChild('title',$title);
    $date->addChild('src',$target);
    $date->addChild('view', 'view.php?id='.$id);
    $date->addChild('edit','edit.php?id='.$id);
    $date->addChild('delete','delete.php?id='.$id);
    $date->addChild('confirm','return confirm("Are you sure you want to delete this?")');
    $date->addChild('back','index.php');
    file_put_contents('data.xml',$xml->asXML());

    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        header('location:index.php');
    }else{
        echo "Vai, vai, vai!";
    }
}