<?php
$id = $_GET['id'];
$xml_data = simplexml_load_file('data.xml') or die("Error: Cannot create object");
foreach ($xml_data->children() as $data)
    if ($data->id == $_GET['id']) 
        unlink($data->src);

$xml = new DOMDocument();
$xml->load('data.xml');
$xpath = new DOMXPath($xml);
foreach ($xpath->query("/root/date[id='$id']") as $node) {
    $node->parentNode->removeChild($node);
}
$xml->save('data.xml');
header('location: index.php');