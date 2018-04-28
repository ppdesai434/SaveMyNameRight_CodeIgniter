<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?=$title?></h1>
				<h3><a class='btn-link' href="<?= base_url('newCollege') ?>">Create College</a></h3>
				<?=$message?>
 			</div>

			<?php

						echo "<table class='table'>";
					    echo "<tr><th>ID</th>";
					    echo "<th>Name</th>";
					    echo "<th colspan='2' align='center'>Actions</th>";
					    
					    echo "</tr>";
					  // Fetch one and one row
					    
					  		foreach ($col as $temp)
						    {
							    echo "<tr>";
							    echo "<td>". $temp['id']. "</td>";
							    echo "<td>". $temp['name']. "</td>";
							    ?>
							    <td><a href="<?php echo base_url() ?>editCollege/<?php echo $temp['id'] ?>">Edit</a>
							    <td><a href="<?php echo base_url() ?>deleteCollege/<?php echo $temp['id'] ?>">Delete</a>
							    <?php
							    
							    echo "</tr>";
						    }  	
					    
					  
						echo "</table>";?>
				
			
		</div>
	</div><!-- .row -->
</div><!-- .container -->