<?php include_once dirname(__FILE__). '/../newheader.php';?>
<?php include_once dirname(__FILE__). '/../index.php';?>
<?php include_once dirname(__FILE__). '/../newfooter.php';?>

	<div class="row">
		<div class="col-md-6 col-md-offset-0">
			<div class="table-responsive">
				<table id="Table" class="table table-bordered table-striped">
					<form><?php if($flash_facility = $this->session->flashdata('flash_facility')) {?>
					<div class="alert alert-success" >
						<?php echo $flash_facility;?>
					</div>	
				<?php }?></form>
					<h2>List of Facilities</h2>
					<thead>
						<tr>
							<th>Serial Number</th>
							<th>Facility Name</th>
							<th>Date Created</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 	$i = 1;
								foreach ($facility_data as $facility_result) {?>
						<tr>
							<td><?php echo $i++ ?></td>
							<td><?php echo $facility_result->facility_name?></td>
							<td><?php echo $facility_result->date_created?></td>
							<td><?php echo anchor('admin_controller/editing_facility/'.$facility_result->id,'Edit',['class'=>'btn btn-success']);?> | 
								<?php echo anchor('admin_controller/deleting_facility/'.$facility_result->id,'Delete',['class'=>'btn btn-danger	']);?></td>

						</tr>
						<?php }?>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>

