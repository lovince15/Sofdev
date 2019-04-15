<?php include_once dirname(__FILE__). '/../newheader.php';?>
<?php include_once dirname(__FILE__). '/../index.php';?>
<?php include_once dirname(__FILE__). '/../newfooter.php';?>
	<div class="row">
		<div class= "col-md-4 col-md-offset-0">
			<form action="<?php echo base_url('admin_controller/updating_location')?>" method="POST">
				<h3>Update Location</h3>
				<hr>
				<input type="hidden" name="id" value="<?php echo $edit_result->id ?>">
				<label>Location Name</label>
				<input type="text" class="form-control" name="location_name" placeholder="Location Name"
				 value="<?php echo $edit_result->location_name?>">
				<?php echo form_error('location_name');?>
				<hr>
				<button class="btn btn-primary">Save</button>
				<a class="btn btn-success" href="<?php echo base_url('admin_controller/listing_location');  ?>">Back</a>
			</form>
		</div>
	</div>

