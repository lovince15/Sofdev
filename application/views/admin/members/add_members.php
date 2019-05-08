<?php include_once dirname(__FILE__). '/../newheader.php';?>
<?php include_once dirname(__FILE__). '/../index.php';?>
<?php include_once dirname(__FILE__). '/../newfooter.php';?>
	<div class="row">
		<div class= "col-md-4 col-md-offset-0">
			<form action="<?php echo base_url('admin_controller/inserting_member')?>" method="POST">
				<h3>Add New Members</h3>
				<hr>
				<label>Name</label>
				<input type="text" class="form-control" name="member_name" placeholder=" Name" >
				<?php echo form_error('member_name');?>
				<hr>
				<hr>
				<label>Gender</label>
				<input type="text" class="form-control" name="member_gender" placeholder=" Gender" >
				<?php echo form_error('member_name');?>
				<hr>
				<hr>
				<label>Email</label>
				<input type="text" class="form-control" name="member_email" placeholder=" Email" >
				<?php echo form_error('member_name');?>
				<hr>
				<hr>
				<label>Contact</label>
				<input type="text" class="form-control" name="member_contact" placeholder=" Contact" >
				<?php echo form_error('member_name');?>
				<hr>

				<button class="btn btn-primary">Add Member</button>
				<a class="btn btn-success" href="<?php echo base_url('admin_controller');  ?>">Back</a>
				<?php if($members_add = $this->session->flashdata('add_members')) {?>
					<div class="alert alert-success" >
						<?php echo $members_add;?>
					</div>	
				<?php }?>	
			</form>
		</div>
	</div>

