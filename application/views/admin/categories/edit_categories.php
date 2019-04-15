<?php include_once dirname(__FILE__). '/../newheader.php';?>
<?php include_once dirname(__FILE__). '/../index.php';?>
<?php include_once dirname(__FILE__). '/../newfooter.php';?>
	<div class="row">
		<div class= "col-md-4 col-md-offset-0">
			<form action="<?php echo base_url('admin_controller/updating_category')?>" method="POST">
				<h3>Update Category</h3>
				<hr>
				<input type="hidden" name="id" value="<?php echo $category_result->id ?>">
				<label>Category Name</label>
				<input type="text" class="form-control" name="category_name" placeholder="Category Name"
				 value="<?php echo $category_result->category_name?>">
				<?php echo form_error('category_name');?>
				<hr>
				<button class="btn btn-primary">Save</button>
				<a class="btn btn-success" href="<?php echo base_url('admin_controller/listing_category');  ?>">Back</a>
			</form>
		</div>
	</div>

