<a href="add.php">Upload another image</a>
				<br><br>

			<?php
                        require_once 'connection.php';
						$query=new MongoDB\Driver\Query([]);
						$rows=$client->executeQuery("fotbalisti.poze", $query);
				   ?>
				   <table width="60%" cellpadding="10" cellspace="10">
					   <tr>
						   <td><strong>Poza</strong></td>
						   <td><strong>Nume</strong></td>
					   </tr>
					   <?php foreach($rows as $val):?>
		   <?php if((isset($val->title))&&(isset($val->image))&&($val->title!="")&&($val->image!="")):?>
			   <tr>
				   <td><?php echo $val->title;?></td>
				   <td><img src="<?php echo $val->image;?>" width="100" height="100"></td>
				   <td colspan="3">
				   </td>
			   </tr>
			   <?php endif;?>
			   <?php endforeach;?>
	   </table>
