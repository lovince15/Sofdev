<?php include_once dirname(__FILE__). '/../newheader.php';?>
<?php include_once dirname(__FILE__). '/../index.php';?>
<?php include_once dirname(__FILE__). '/../newfooter.php';?>
	<div class="row">
		<div class= "col-md-4 col-md-offset-0">
			<form action="<?php echo base_url('admin_controller/inserting_category')?>" method="POST">
				<h3>Add New Categories</h3>
				<hr>
				<label>Category Name</label>
				<input type="text" class="form-control" name="category_name" placeholder="Category Name" >
				<?php echo form_error('category_name');?>
				<hr>
				<button class="btn btn-primary">Add Category</button>
				<a class="btn btn-success" href="<?php echo base_url('admin_controller');  ?>">Back</a>
				<?php if($category_add = $this->session->flashdata('add_category')) {?>
					<div class="alert alert-success" >
						<?php echo $category_add;?>
					</div>	
				<?php }?>	
			</form>
		</div>
	</div>

