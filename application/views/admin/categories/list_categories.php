<?php include_once dirname(__FILE__). '/../newheader.php';?>
<?php include_once dirname(__FILE__). '/../index.php';?>
<?php include_once dirname(__FILE__). '/../newfooter.php';?>

	<div class="row">
		<div class="col-md-6 col-md-offset-0">
			<div class="table-responsive">
				<table id="Table" class="table table-bordered table-striped">
					<form><?php if($flash_category = $this->session->flashdata('flash_category')) {?>
					<div class="alert alert-success" >
						<?php echo $flash_category;?>
					</div>	
				<?php }?></form>
					<h2>List of Categories</h2>
					<thead>
						<tr>
							<th>Serial Number</th>
							<th>Category Name</th>
							<th>Date Created</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 	$i = 1;
								foreach ($category_data as $category_result) {?>
						<tr>
							<td><?php echo $i++ ?></td>
							<td><?php echo $category_result->category_name?></td>
							<td><?php echo $category_result->date_created?></td>
							<td><?php echo anchor('admin_controller/editing_category/'.$category_result->id,'Edit',['class'=>'btn btn-success']);?> | 
								<?php echo anchor('admin_controller/deleting_category/'.$category_result->id,'Delete',['class'=>'btn btn-danger	']);?></td>

						</tr>
						<?php }?>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>

