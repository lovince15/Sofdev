<?php include_once dirname(__FILE__). '/../newheader.php';?>
<?php include_once dirname(__FILE__). '/../index.php';?>
<?php include_once dirname(__FILE__). '/../newfooter.php';?>
	<div class="row">
		<div class= "col-md-4 col-md-offset-0">
			<form action="<?php echo base_url('admin_controller/updating_facility')?>" method="POST">
				<h3>Update Facility</h3>
				<hr>
				<input type="hidden" name="id" value="<?php echo $facility_result->id ?>">
				<label>Facility Name</label>
				<input type="text" class="form-control" name="facility_name" placeholder="Facility Name"
				 value="<?php echo $facility_result->facility_name?>">
				<?php echo form_error('facility_name');?>
				<hr>
				<button class="btn btn-primary">Save</button>
				<a class="btn btn-success" href="<?php echo base_url('admin_controller/listing_facility');  ?>">Back</a>
			</form>
		</div>
	</div>

