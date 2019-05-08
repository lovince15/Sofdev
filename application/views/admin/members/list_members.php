<?php include_once dirname(__FILE__). '/../newheader.php';?>
<?php include_once dirname(__FILE__). '/../index.php';?>
<?php include_once dirname(__FILE__). '/../newfooter.php';?>

	<div class="row">
		<div class="col-md-6 col-md-offset-0">
			<div class="table-responsive">
				<table id="Table" class="table table-bordered table-striped">
					<form><?php if($flash_member = $this->session->flashdata('flash_member')) {?>
					<div class="alert alert-success" >
						<?php echo $flash_member;?>
					</div>	
				<?php }?></form>
					<h2>List of Members</h2>
					<thead>
						<tr>
							<th>Serial Number</th>
							<th>Member Name</th>
							<th>Member Gender</th>
							<th>Member Email</th>
							<th>Member Contact</th>
							<th>Date Created</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 	$i = 1;
								foreach ($member_data as $member_result) {?>
						<tr>
							<td><?php echo $i++ ?></td>
							<td><?php echo $member_result->member_name?></td>
							<td><?php echo $member_result->member_gender?></td>
							<td><?php echo $member_result->member_email?></td>
							<td><?php echo $member_result->member_contact?></td>
							<td><?php echo $member_result->date_created?></td>
							<td><?php echo anchor('admin_controller/editing_member/'.$member_result->id,'Edit',['class'=>'btn btn-success']);?>  
								<?php echo anchor('admin_controller/deleting_member/'.$member_result->id,'Delete',['class'=>'btn btn-danger	']);?></td>

						</tr>
						<?php }?>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>

