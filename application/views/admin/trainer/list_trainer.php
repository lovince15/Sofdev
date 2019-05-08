<?php include_once dirname(__FILE__). '/../newheader.php';?>
<?php include_once dirname(__FILE__). '/../index.php';?>
<?php include_once dirname(__FILE__). '/../newfooter.php';?>

	<div class="row">
		<div class="col-md-6 col-md-offset-0">
			<div class="table-responsive">
				<table id="Table" class="table table-bordered table-striped">
					<form><?php if($trainer_list = $this->session->flashdata('trainer_flash')) {?>
					<div class="alert alert-success" >
						<?php echo $trainer_list;?>
					</div>	
				<?php }?></form>
					<h2>List of Trainers</h2>
					<thead>
						<tr>
							<th>Trainer Number</th>
							<th>Trainer Name</th>
							<th>Date Added</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 	$i = 1;
								foreach ($trainer_data as $trainer_result) {?>
						<tr>
							<td><?php echo $i++ ?></td>
							<td><?php echo $trainer_result->trainer_name?></td>
							<td><?php echo $trainer_result->date_added?></td>
							<td><?php echo anchor('admin_controller/editing_trainer/'.$trainer_result->id,'Edit',['class'=>'btn btn-success']);?> | 
								<?php echo anchor('admin_controller/deleting_trainer/'.$trainer_result->id,'Delete',['class'=>'btn btn-danger	']);?></td>

						</tr>
						<?php }?>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>

