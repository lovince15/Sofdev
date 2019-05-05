<?php include_once dirname(__FILE__). '/../newheader.php';?>
<?php include_once dirname(__FILE__). '/../index.php';?>
<?php include_once dirname(__FILE__). '/../newfooter.php';?>
	<div class="row">
		<div class= "col-md-4 col-md-offset-0">
			<form action="<?php echo base_url('admin_controller/inserting_facility')?>" method="POST">
				<h3>Add New Facilities</h3>
				<hr>
				<label>Facility Name</label>
				<input type="text" class="form-control" name="facility_name" placeholder="Facility Name" >
				<?php echo form_error('facility_name');?>
				<hr>
				<button class="btn btn-primary">Add Facility</button>
				<a class="btn btn-success" href="<?php echo base_url('admin_controller');  ?>">Back</a>
				<?php if($facility_add = $this->session->flashdata('add_facility')) {?>
					<div class="alert alert-success" >
						<?php echo $facility_add;?>
					</div>	
				<?php }?>	
			</form>
		</div>
	</div>

