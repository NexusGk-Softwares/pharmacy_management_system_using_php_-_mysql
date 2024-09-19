<?php
if ($msg == "main") {
	$msg = "";
} elseif ($msg == "empty") {
	$msg = "Please fill out all required fields";
} elseif ($msg == "created") {
	$msg = "Created Successfully";
} elseif ($msg == "edit") {
	$msg = "Edited Successfully";
} elseif ($msg == "delete") {
	$msg = "Deleted Successfully";
}
?>
<!-- /.Breadcrumb -->
<section id="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">Create Option</a></li>
			<li class="active"><?php echo $msg; ?></li>
		</ol>
	</div>
</section>

<!-- /.container -->
<section id="main">
	<div class="container">

		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a href="index.html" class="list-group-item active main-color-bg">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Create Option</a>
					<a href="<?php echo base_url(); ?>ShowForm/create_medicine_presentation/main" class="list-group-item">
						<span class="	fa fa-capsules" aria-hidden="true"></span> Medicine Presentation</a>
					<a href="<?php echo base_url(); ?>ShowForm/create_generic_name/main" class="list-group-item">
						<span class="fa fa-plus-circle" aria-hidden="true"></span> Generic Name </a>
					<a href="<?php echo base_url(); ?>ShowForm/create_medicine_name/main" class="list-group-item">
						<span class="fa fa-pills" aria-hidden="true"></span> Medicine Name</a>
<!--					<a href="--><?php //echo base_url(); ?><!--ShowForm/create_product_category/main" class="list-group-item">-->
<!--						<span class="fa fa-tasks" aria-hidden="true"></span> Product Category</a>-->
<!--					<a href="--><?php //echo base_url(); ?><!--ShowForm/create_product_name/main" class="list-group-item">-->
<!--						<span class="fa fa-plus" aria-hidden="true"></span> Product Name</a>-->
					<a href="<?php echo base_url(); ?>ShowForm/create_supplier/main" class="list-group-item">
						<span class="fa fa-truck-moving" aria-hidden="true"></span> Supplier</a>
				</div>
			</div>
			<div class="col-md-9">
				<div class="rounded-0 panel panel-default">
					<div class="panel-heading rounded-0 main-color-bg">
						<h3 class="panel-title">Create Product Name</h3>
					</div>

					<div class="panel-body">

						<!-- /.rounded-0 panel End -->
						<?php echo form_open_multipart('Insert/product_name'); ?>
						<div class="box-body">
							<div class="row">
								<div class="col-sm-6" style="">
									<label for="product_category">Product Category</label>
									<select name="product_category" id="product_category" class="form-control selectpicker"
											data-live-search="true">
										<option value="">-- Select --</option>
										<?php foreach ($all_product_cat as $info) { ?>
											<option value="<?php echo $info->product_category; ?>"><?php echo $info->product_category; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-sm-6">
									<!--									<div class="form-group" style="width: 400px;">-->
									<label for="product_name">Product Name</label>
									<input type="text" class="form-control" id="product_name" placeholder="" name="product_name">
									<!--									</div>-->
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4" style="margin-top: 17px;">
									<button type="submit" class="pull-left btn btn-primary">Create</button>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div><!-- /.rounded-0 panel End -->
				<!-- /.rounded-0 panel 2nd -->
				<div class="rounded-0 panel panel-default">
					<div class="panel-heading rounded-0">
						<h3 class="panel-title">Product Name List</h3>
					</div>
					<div class="panel-body">
						<div class="panel-body">
							<table class="table table-striped table-bordered table-hover">
								<thead>
								<tr>
									<th style="text-align: center;">#</th>
									<th style="text-align: center;">Product Category</th>
									<th style="text-align: center;">Medicine Name</th>
									<th style="text-align: center;">Action</th>
								</tr>
								</thead>
								<!-- /.Row from DB-->
								<tbody>
								<?php
								$count = 0;
								foreach ($all_value as $single_value) {
									$count++;
									?>
									<tr>
										<td style="text-align: center;"><?php echo $count; ?></td>
										<td style="text-align: center;"><?php echo $single_value->product_category; ?></td>
										<td style="text-align: center;"><?php echo $single_value->product_name; ?></td>
										<td style="text-align: center;">
											<a style="margin: 5px;" class="btn btn-danger btn-sm rounded-0"
											   href="<?php echo base_url(); ?>Delete/product_name/<?php echo $single_value->record_id; ?>">Delete
											</a>
										</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /.row -->
	</div> <!-- /.Container -->
</section>

