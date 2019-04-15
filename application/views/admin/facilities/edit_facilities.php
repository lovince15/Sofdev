<?php include_once dirname(__FILE__). '/../newheader.php';
      include_once dirname(__FILE__). '/../index.php';
      include_once dirname(__FILE__). '/../newfooter.php';


?>
	
	<div class="row">
		<div class= "col-md-4 col-md-offset-0">
			<form>
				<?php if ($flash_item = $this->session->flashdata('item_flash')) {?>
				<div class="alert alert-success">
					<?php echo $flash_item;?>
				</div>
			<?php }?>
			</form>
			
				<h3>Edit Facility</h3>
				<hr>
				<form action="<?php echo base_url('admin_controller/updating_facility/'.$edit_data->facility_id)  ?>" method="POST" enctype="multipart/form-data">
  <fieldset>
    
    <div class="form-group">
      <label for="exampleInputEmail1">Facility Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Facility" 
      name="facility_name" value="<?php echo $edit_data->facility_name?>"></input>
    </div>
    <?php echo form_error('facility_name');?>

    <div class="form-group">
      <label for="exampleInputEmail1">Price</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price" 
      name="price" value="<?php echo $edit_data->price?>">
    </div>
    <?php echo form_error('price');?>

    <div class="form-group">
      <label for="exampleSelect1">Select Location</label>
      <select class="form-control"  name="location_id">
        <option value="<?php $edit_data->locations_id?>"><?php echo $edit_data->location_name?></option>
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
        <option value="<?php $edit_data->category_id?>"><?php echo $edit_data->category_name?></option>
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
      <textarea class="form-control" id="exampleTextarea" rows="3" name="description" value="<?php echo $edit_data->description?>"></textarea>
    </div>
    <?php echo form_error('description');?>

    <div class="form-group">
      <label for="exampleInputFile">Upload Image</label>
      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"
      name="upload_file">
    </div>
    <?php echo form_error('upload_file');?>

    <img src="<?php echo base_url('templates/img/'.$edit_data->image);?>">

    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
<script type="text/javascript">
	$(#).keypress(function (e) {
		if (String.fromCharCode.(e.keyCode).match(/[^0-9]/g)) return false; 
	});
</script>
