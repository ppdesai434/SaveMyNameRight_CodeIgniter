<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		
		<div class="col-md-12">
			<?php if (!isset($course['id'])):?>
				<h1>Create Course</h1>
			<?php else : ?>
			<h1>Edit Course</h1>
			<?php endif; ?>
			<?php
			if (!isset($course['id'])){
				$course['id']='';
				$course['cid']='';
				$course['name']='';
				$course['profname']='';
				$course['sem']='';
				$course['year']='';
				
			}
                    echo form_open('course/newcourse');
                    echo"<table class='table'>";
					echo form_hidden('id',$course['id']);
                    echo"<tr><td>";
					echo form_label('Name:');
					echo "</td><td>";
                    $data_name = array(
                        'name' => 'name',
                        'id' => 'name',
                        'type' => 'text',
                        'size'=>'40',
                        'class'=>'input-group',
                        'value'=>$course['name']
                       
                    );

                    echo form_input($data_name);
                    echo "</td><td>";
                    echo form_error('name');
                    echo"</td></tr>";

                    echo"<tr><td>";
					echo form_label('College:');
					echo "</td><td colspan='2'>";
                    $data_col = array();
                    $select_col='';
                        foreach ($col as $temp) {
						$data_col[$temp['id']]=$temp['name'];
						if($temp['id']==$course['cid']){
							$select_col=$temp['id'];
							}
                        }
                    
                    echo form_dropdown('college', $data_col,$select_col);
                    
                    echo"</td></tr>";

                  	echo"<tr><td>";
					echo form_label('Professor Name:');
					echo "</td><td>";
                    $data_pname = array(
                        'name' => 'profname',
                        'id' => 'profname',
                        'type' => 'text',
                        'size'=>'40',
                        'class'=>'input-group',
                        'value'=>$course['profname']
                       
                    );

                    echo form_input($data_pname);
                    echo "</td><td>";
                    echo form_error('profname');
                    echo"</td></tr>";

                    echo"<tr><td>";
					echo form_label('Semester:');
					echo "</td><td>";
                    $data_sem = array(
                        'name' => 'sem',
                        'id' => 'sem',
                        'type' => 'text',
                        'size'=>'40',
                        'class'=>'input-group',
                        'value'=>$course['sem']
                       
                    );

                    echo form_input($data_sem);
                    echo "</td><td>";
                    echo form_error('sem');
                    echo"</td></tr>";

                    echo"<tr><td>";
					echo form_label('Year:');
					echo "</td><td>";
                    $data_year = array(
                        'name' => 'year',
                        'id' => 'year',
                        'type' => 'month',
                        'size'=>'40',
                        'class'=>'input-group',
                        'value'=>$course['year']
                       
                    );

                    echo form_input($data_year);
                    echo "</td><td>";
                    echo form_error('name');
                    echo"</td></tr>";

                    
                    
                    echo"<tr><td colspan='2' align='center'>";?>
                    <?php if (empty($course['id'])):?>
					<button type="submit" class="btn">Create</button>
					<?php  else : ?>
					<button type="submit" class="btn">Update</button>
					<?php endif;?>
                    <?php 
                    echo"</td></tr>";
                    echo form_hidden('createdby',$_SESSION['user_id']);
                    echo"</table>";
                    ?>
		</div>
	</div><!-- .row -->
</div><!-- .container -->