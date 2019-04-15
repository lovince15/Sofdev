<?php include_once dirname(__FILE__). '/../newheader.php';?>
<?php include_once dirname(__FILE__). '/../index.php';?>
<?php include_once dirname(__FILE__). '/../newfooter.php';?>

	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="table-responsive">
				<table id="Table" class="table table-bordered table-striped">
					<form><?php if($flash_category = $this->session->flashdata('flash_category')) {?>
					<div class="alert alert-success" >
						<?php echo $flash_category;?>
					</div>	
				<?php }?></form>
					<h2>List of Facilities</h2>
					<thead>
						<tr>
							<th>Facility Number</th>
							<th>Image</th>
							<th>Facility Name</th>
							<th>Price</th>
							<th>Location Name</th>
							<th>Category Name</th>
							<th>Description</th>
							<th>Date Created</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 	$i = 1;
								foreach ($list_data as $list_result) {?>
						<tr>
							<td><?php echo $i++ ?></td>
							<td><img src="<?php echo base_url('templates/img/'.$list_result->image)?>"></td>
							<td><?php echo $list_result->facility_name?></td>
							<td><?php echo $list_result->price?></td>
							<td><?php echo $list_result->location_name?></td>
							<td><?php echo $list_result->category_name?></td>
							<td><?php echo $list_result->description?></td>
							<td><?php echo $list_result->date_created?></td>
							<td><?php echo anchor('admin_controller/editing_facility/'.$list_result->facility_id,'Edit',['class'=>'btn btn-success']);?> | 
								<?php echo anchor('admin_controller/deleting_facility/'.$list_result->facility_id,'Delete',['class'=>'btn btn-danger	']);?></td>

						</tr>
						<?php }?>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>

