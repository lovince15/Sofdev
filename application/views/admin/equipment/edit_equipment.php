<?php include_once dirname(__FILE__). '/../newheader.php';?>
<?php include_once dirname(__FILE__). '/../index.php';?>
<?php include_once dirname(__FILE__). '/../newfooter.php';?>
	<div class="row">
		<div class= "col-md-4 col-md-offset-0">
			<form action="<?php echo base_url('admin_controller/updating_equipment')?>" method="POST">
				<h3>Update Equipmenth</h3>
				<hr>
				<input type="hidden" name="id" value="<?php echo $equipment_result->id ?>">
				<label>Equipment Name</label>
				<input type="text" class="form-control" name="equipment_name" placeholder="Equipment Name"
				 value="<?php echo $equipment_result->equipment_name?>">
				<?php echo form_error('equipment_name');?>
				<hr>
				<button class="btn btn-primary">Save</button>
				<a class="btn btn-success" href="<?php echo base_url('admin_controller/listing_equipment');  ?>">Back</a>
			</form>
		</div>
	</div>
