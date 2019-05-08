<?php include_once dirname(__FILE__). '/../newheader.php';?>
<?php include_once dirname(__FILE__). '/../index.php';?>
<?php include_once dirname(__FILE__). '/../newfooter.php';?>
	<div class="row">
		<div class= "col-md-4 col-md-offset-0">
			<form action="<?php echo base_url('admin_controller/updating_trainer')?>" method="POST">
				<h3>Update Trainer</h3>
				<hr>
				<input type="hidden" name="id" value="<?php echo $trainer_result->id ?>">
				<label>Trainer Name</label>
				<input type="text" class="form-control" name="trainer_name" placeholder="Trainer Name"
				 value="<?php echo $trainer_result->trainer_name?>">
				<?php echo form_error('trainer_name');?>
				<hr>
				<button class="btn btn-primary">Save</button>
				<a class="btn btn-success" href="<?php echo base_url('admin_controller/listing_trainer');  ?>">Back</a>
			</form>
		</div>
	</div>
