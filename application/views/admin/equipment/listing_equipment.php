<?php include_once dirname(__FILE__). '/../newheader.php';?>
<?php include_once dirname(__FILE__). '/../index.php';?>
<?php include_once dirname(__FILE__). '/../newfooter.php';?>

	<div class="row">
		<div class="col-md-6 col-md-offset-0">
			<div class="table-responsive">
				<table id="Table" class="table table-bordered table-striped">
					<form><?php if($equipment_list = $this->session->flashdata('equipment_flash')) {?>
					<div class="alert alert-success" >
						<?php echo $equipment_list;?>
					</div>	
				<?php }?></form>
					<h2>List of Equipment</h2>
					<thead>
						<tr>
							<th>Equipment Number</th>
							<th>Equipment Name</th>
							<th>Date Created</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 	$i = 1;
								foreach ($equipment_data as $equipment_result) {?>
						<tr>
							<td><?php echo $i++ ?></td>
							<td><?php echo $equipment_result->equipment_name?></td>
							<td><?php echo $equipment_result->date_created?></td>
							<td><?php echo anchor('admin_controller/editing_equipment/'.$equipment_result->id,'Edit',['class'=>'btn btn-success']);?> | 
								<?php echo anchor('admin_controller/deleting_equipment/'.$equipment_result->id,'Delete',['class'=>'btn btn-danger	']);?></td>

						</tr>
						<?php }?>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>

