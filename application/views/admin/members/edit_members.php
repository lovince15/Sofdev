<?php include_once dirname(__FILE__). '/../newheader.php';?>
<?php include_once dirname(__FILE__). '/../index.php';?>
<?php include_once dirname(__FILE__). '/../newfooter.php';?>
	<div class="row">
		<div class= "col-md-4 col-md-offset-0">
			<form action="<?php echo base_url('admin_controller/updating_member')?>" method="POST">
				<h3>Update Member</h3>
				<hr>
				<input type="hidden" name="id" value="<?php echo $member_result->id ?>">
				<label>Name</label>
				<input type="text" class="form-control" name="member_name" placeholder="Member Name"
				 value="<?php echo $member_result->member_name?>">
				<?php echo form_error('member_name');?>

				<input type="hidden" name="id" value="<?php echo $member_result->id ?>">
				<label>Gender</label>
				<input type="text" class="form-control" name="member_gender" placeholder="Member Gender"
				 value="<?php echo $member_result->member_gender?>">
				<?php echo form_error('member_gender');?>

				<input type="hidden" name="id" value="<?php echo $member_result->id ?>">
				<label>Email</label>
				<input type="text" class="form-control" name="member_email" placeholder="Member Email"
				 value="<?php echo $member_result->member_email?>">
				<?php echo form_error('member_email');?>

				<input type="hidden" name="id" value="<?php echo $member_result->id ?>">
				<label>Contact</label>
				<input type="text" class="form-control" name="member_contact" placeholder="Member Contact"
				 value="<?php echo $member_result->member_contact?>">
				<?php echo form_error('member_contact');?>
				<hr>
				<button class="btn btn-primary">Save</button>
				<a class="btn btn-success" href="<?php echo base_url('admin_controller/listing_member');  ?>">Back</a>
			</form>
		</div>
	</div>

