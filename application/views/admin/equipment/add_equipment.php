<?php include_once dirname(__FILE__). '/../newheader.php';?>
<?php include_once dirname(__FILE__). '/../index.php';?>
<?php include_once dirname(__FILE__). '/../newfooter.php';?>
	<div class="row">
		<div class= "col-md-4 col-md-offset-0">
			<form action="<?php echo base_url('admin_controller/inserting_equipment')?>" method="POST">
				<h3>Add New Equipment</h3>
				<hr>
				<label>Equipment Name</label>
				<input type="text" class="form-control" name="equipment_name" placeholder="Equipment Name" >
				<?php echo form_error('equipment_name');?>
				<hr>
				<button class="btn btn-primary">Add Equipment</button>
				<a class="btn btn-success" href="<?php echo base_url('admin_controller');  ?>">Back</a>
				<?php if($equipment_add = $this->session->flashdata('add_equipment')) {?>
					<div class="alert alert-success" >
						<?php echo $equipment_add;?>
					</div>	
				<?php }?>	
			</form>
		</div>
	</div>
