<?php
/**
 * Created by PhpStorm.
 * User: bmmah
 * Date: 4/23/2019
 * Time: 9:55 PM
 */

//if ($msg == "main") {
//	$msg = "";
//} elseif ($msg == "empty") {
//	$msg = "Please fill out all required fields";
//} elseif ($msg == "created") {
//	$msg = "Created Successfully";
//} elseif ($msg == "edit") {
//	$msg = "Edited Successfully";
//} elseif ($msg == "delete") {
//	$msg = "Deleted Successfully";
//}
foreach ($one_value as $one_info) {
	$record_id = $one_info->id;
	$one_name = $one_info->username;
	$one_password= $one_info->password;
}
?>
<!-- /.Breadcrumb -->
<section id="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">Create Option</a></li>
<!--			<li class="active">--><?php //echo $msg; ?><!--</li>-->
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
						<span class="glyphicon glyphicon-person" aria-hidden="true"></span> Manage Staff</a>
					<a href="<?php echo base_url(); ?>ShowForm/manage_staff/main" class="list-group-item">
						<span class="fa fa-truck-moving" aria-hidden="true"></span> Create Staff</a>
				</div>
			</div>
			<div class="col-md-9">
				<div class="rounded-0 panel panel-default">
					<div class="panel-heading rounded-0 main-color-bg">
						<h3 class="panel-title">Create Staff</h3>
					</div>

					<div class="panel-body">

						<!-- /.rounded-0 panel End -->
						<?php echo form_open_multipart('Insert/edit_staff_info/'.$record_id); ?>
						<div class="box-body">
							<div class="row">
								<div class="col-sm-6">
									<label for="username">Username</label>
									<input type="text" class="form-control" id="username" placeholder=""
										   value="<?php echo $one_name; ?>"name="username">
								</div>
								<div class="col-sm-6">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="password" placeholder=""
										   value="<?php echo $one_password; ?>"  name="password">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4" style="margin-top: 17px;">
									<button type="submit" class="pull-left btn btn-primary">Update</button>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div><!-- /.rounded-0 panel End -->
				<!-- /.rounded-0 panel 2nd -->

			</div>
		</div> <!-- /.row -->
	</div> <!-- /.Container -->
</section>

