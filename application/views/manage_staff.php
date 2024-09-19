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
					<a href="#" class="list-group-item active main-color-bg">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Manage Staff</a>
					<a href="<?php echo base_url(); ?>ShowForm/manage_staff/main" class="list-group-item">
						<span class="far fa-user" aria-hidden="true"></span> Create Staff</a>
				</div>
			</div>
			<div class="col-md-9">
				<div class="rounded-0 panel panel-default">
					<div class="panel-heading rounded-0 main-color-bg">
						<h3 class="panel-title">Create Staff</h3>
					</div>

					<div class="panel-body">

						<!-- /.rounded-0 panel End -->
						<?php echo form_open_multipart('Insert/create_staff'); ?>
						<div class="box-body">
							<div class="row">
								<div class="col-sm-6">
									<label for="username">Username</label>
									<input type="text" class="form-control" id="username" placeholder="" name="username">
								</div>
								<div class="col-sm-6">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="password" placeholder="" name="password">
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
						<h3 class="panel-title">Staff List</h3>
					</div>
					<div class="panel-body">
						<div class="panel-body">
							<table class="table table-striped table-hover table-bordered">
								<thead>
								<tr>
									<th style="text-align: center;">#</th>
									<th style="text-align: center;">Username</th>
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
										<td style="text-align: center;"><?php echo $single_value->username; ?></td>
										<td style="text-align: center;">
											<a style="margin: 5px;" class="btn btn-danger"
											   href="<?php echo base_url(); ?>Delete/manage_staff/<?php echo $single_value->id; ?>">Delete
											</a>
											<a style="margin: 5px;" class="btn btn-success"
											   href="<?php echo base_url(); ?>ShowForm/edit_staff_info/<?php echo $single_value->id; ?>">Edit
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

