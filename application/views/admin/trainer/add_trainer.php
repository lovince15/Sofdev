<?php include_once dirname(__FILE__). '/../newheader.php';?>
<?php include_once dirname(__FILE__). '/../index.php';?>
<?php include_once dirname(__FILE__). '/../newfooter.php';?>
	<div class="row">
		<div class= "col-md-4 col-md-offset-0">
			<form action="<?php echo base_url('admin_controller/inserting_trainer')?>" method="POST">
				<h3>Add New Trainer</h3>
				<hr>
				<label>Trainer Name</label>
				<input type="text" class="form-control" name="trainer_name" placeholder="Trainer Name" >
				<?php echo form_error('trainer_name');?>
				<hr>
				<button class="btn btn-primary">Add Trainer</button>
				<a class="btn btn-success" href="<?php echo base_url('admin_controller');  ?>">Back</a>
				<?php if($trainer_add = $this->session->flashdata('add_trainer')) {?>
					<div class="alert alert-success" >
						<?php echo $trainer_add;?>
					</div>	
				<?php }?>	
			</form>
		</div>
	</div>
