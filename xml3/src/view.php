<?php
$xml_data=simplexml_load_file("data.xml") or die("Error:Object creation failure");
?>

<table>
    <tr>
        <th>Name</th>
        <th>Image</th>
    </tr>
    <?php
    foreach($xml_data->children() as $data)
        if($data->id==$_GET['id']){
            echo "<tr>";
            echo "<td>".$data->title."</td>";
            echo "<td><img src=".$data->src." height='100' width='100'>"."</td>";
            echo "</tr>";
        }
    ?>
</table>
<br><br>
<a href="index.php">Back</a>