<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>Events!</h1>
			</div>
			<ul>
				<?php
						echo "<table>";
					    echo "<tr><th>ID</th>";
					    echo "<th>Name</th>";
					    echo "<th>Edit</th>";
					    echo "<th>Delete</th>";
					    echo "</tr>";
					  // Fetch one and one row
					    
					  		foreach ($output->result() as $temp)
						    {
							    echo "<tr>";
							    echo "<td>"; echo $temp->id; echo "</td>";
							    echo "<td>"; echo $temp->name; echo "</td>";
							    echo "<td><a href='editconference.php?id=".$temp->id."'>Edit</a></td>";
							    echo "<td><a href='deleteconference.php?id=".$temp->id."'>Delete</a></td>";
							    echo "</tr>";
						    }  	
					    
					  
						echo "</table>";

      			?>
			</ul>
		</div>
	</div><!-- .row -->
</div><!-- .container -->