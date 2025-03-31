<?php
$xml_data = simplexml_load_file("data.xml") or die("Error: Object Creation failure");
?>

<table>
<tr>
    <th>Name</th>
    <th>Image</th>
    <th colspan="3">Actions</th>
</tr>

<?php
foreach ($xml_data->children() as $data) {
    echo "<tr>";
    echo "<td>" . $data->title . "</td>";
    echo "<td><img src='" . $data->src . "' height='100' width='100'></td>";
    echo "<td>";
    echo "<a href=" . $data->view . ">View</a> ";
    echo "<a href=" . $data->edit . ">Edit</a> ";
    echo "<a href=".$data->delete." onclick=\"return confirm('Are you sure?')\">Delete</a>";
    echo "</td>";
    echo "</tr>";
}
?>

</table>

<br/><br/>
<a href="upload.php">Upload a new record</a><br/><br/>
<a href="search.php">Search</a>