<?php
$xml_data = simplexml_load_file("data.xml") or die("Error: Object Creation failure");

if(!empty($_POST['submit'])){?>
    <table>
        <tr>
            <th>Name</th>
            <th>Image</th>
        </tr>
      <?php
      foreach($xml_data->children() as $data)
        if($data->title==$_POST['search']){
            echo "<tr>";
            echo "<td>".$data->title."</td>";
            echo "<td><img src=".$data->src." height='100' width='100'>"."</td>";
            echo "</tr>";
        }
    echo "</table>";
    echo "<br><br> <a href=\"index.php\">Back</a>";
}
else{
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Search: <input type="text" name="search">
            <input type="submit" name="submit">
        </form>
        <br /><br />
        <a href="index.php">Back</a>
<?php } ?>