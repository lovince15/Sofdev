<?php include_once dirname(__FILE__). '/../newheader.php';?>
<?php include_once dirname(__FILE__). '/../index.php';?>
<?php include_once dirname(__FILE__). '/../newfooter.php';?>
	<div class="row">
		<div class= "col-md-4 col-md-offset-0">
			<form action="<?php echo base_url('admin_controller/inserting_location')?>" method="POST">
				<h3>Add New Location</h3>
				<hr>
				<label>Location Name</label>
				<input type="text" class="form-control" name="location_name" placeholder="Location Name" >
				<?php echo form_error('location_name');?>
				<hr>
				<button class="btn btn-primary">Add Location</button>
				<a class="btn btn-success" href="<?php echo base_url('admin_controller');  ?>">Back</a>
				<?php if($brand_add = $this->session->flashdata('add_location')) {?>
					<div class="alert alert-success" >
						<?php echo $brand_add;?>
					</div>	
				<?php }?>	
			</form>
		</div>
	</div>

