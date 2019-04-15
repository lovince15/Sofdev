<?php include_once dirname(__FILE__). '/../newheader.php';?>
<?php include_once dirname(__FILE__). '/../index.php';?>
<?php include_once dirname(__FILE__). '/../newfooter.php';?>
	<div class="row">
		<div class= "col-md-4 col-md-offset-0">
			<form>
				<?php if ($flash_facility = $this->session->flashdata('facility_flash')) {?>
				<div class="alert alert-success">
					<?php echo $flash_facility;?>
				</div>
			<?php }?>
			</form>

				<h3>Add New Facility</h3>
				<hr>
				<form action="<?php echo base_url('admin_controller/inserting_facility')  ?>" method="POST" enctype="multipart/form-data">
  <fieldset>
    <div class="form-group">
      <label for="exampleInputEmail1">Facility Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Facility" 
      name="facility_name" value="<?= set_value('facility_name')?>">
    </div>
    <?php echo form_error('facility_name');?>

    <div class="form-group">
      <label for="exampleInputEmail1">Price</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price" 
      name="price" value="<?= set_value('price')?>">
    </div>
    <?php echo form_error('price');?>

    <div class="form-group">
      <label for="exampleSelect1">Select Location</label>
      <select class="form-control"  name="location_id">
        <option value="">Select Location</option>
        <?php foreach ($result['location'] as $list_result) {
        	$id = $list_result->id;
        	$name = $list_result->location_name;?>
        <option value="<?php echo $id?>"><?php echo $name?></option>
        <?php }?>
      </select>
    </div>
    <?= form_error('location_id');?>

       <div class="form-group">
      <label for="exampleSelect1">Select Category</label>
      <select class="form-control" name="category_id">
        <option value="">Select Category</option>
        <<?php foreach ($result['category'] as $list_result) {
        	$id = $list_result->id;
        	$name = $list_result->category_name;?>
        <option value="<?php echo $id  ?>"><?php echo $name?></option>
        <?php }?>
      </select>
    </div>
    <?php echo form_error('category_id');?>

    <div class="form-group">
      <label for="exampleTextarea">Description</label>
      <textarea class="form-control" id="exampleTextarea" rows="3" name="description"></textarea>
    </div>
    <?php echo form_error('description');?>

    <div class="form-group">
      <label for="exampleInputFile">Upload Image</label>
      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"
      name="upload_file">
    </div>
    <?php echo form_error('upload_file');?>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
<script type="text/javascript">
	$(#).keypress(function (e) {
		if (String.fromCharCode.(e.keyCode).match(/[^0-9]/g)) return false; 
	});
</script>
