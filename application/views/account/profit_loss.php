<?php
/**
 * Created by PhpStorm.
 * User: bmmah
 * Date: 4/2/2019
 * Time: 10:56 PM
 */

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
	<div class="container" id="no_print3">
		<ol class="breadcrumb">
			<li><a href="#" >Account</a></li>
			<li class="active"><?php echo $msg; ?></li>
		</ol>
	</div>
</section>

<!-- /.container -->
<section id="main">
	<div class="container">

		<div class="row">
			<div class="col-md-3" id="no_print2">
				<div class="list-group">
					<a href="#" class="list-group-item active main-color-bg">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Account</a>
					<a href="<?php echo base_url(); ?>ShowForm/profit_loss/main"
					   class="list-group-item">
						<span class="	fa fa-capsules" aria-hidden="true"></span> Profit-Loss</a>
				</div>
			</div>
			<div class="col-md-9" id="no_print1">
				<div class="rounded-0 panel panel-default">
					<div class="panel-heading rounded-0 main-color-bg">
						<h3 class="panel-title"> Profit-Loss</h3>
					</div>

					<div class="panel-body">

						<!-- /.rounded-0 panel End -->
						<?php echo form_open_multipart('Insert/medicine_purchase_info'); ?>
						<div class="box-body">
							<div class="row">
								<!-- <div class="col-sm-4" style="">
									<label for="date_from">Date From</label>
									<input type="date" class="form-control datepicker"
										   placeholder="Insert Date" name="date_from" id="date_from"
										   autocomplete="off">
								</div> -->
								<div class="col-sm-4" style="">
									<label for="date_to">As of Date <small><i>(Choose Date)</i></small></label>
									<input type="date" class="form-control _datepicker"
										   placeholder="Insert Date" name="date_to" id="date_to"
										   autocomplete="off">
								</div>
								<div class="col-sm-4" style="">
									<label for="date_to">Midicine Name</label>
									<select name="product" id="product" class="form-control selectpicker"
											data-live-search="true">
										<option value="">-- Select --</option>
										<?php foreach ($all_value as $info) {
										if($info->medicine_name != '') {?>
											<option value="<?php echo $info->medicine_name_id; ?>"><?php echo $info->medicine_name; ?></option>
										<?php } }?>
									</select>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-4" style="margin-top: 17px;">
									<button type="button" class="pull-left btn btn-primary" id="search_report">Search</button>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div><!-- /.rounded-0 panel End -->
			</div>
			<!-- /.rounded-0 panel 2nd -->
			<div class="col-md-12" >
				<div class="rounded-0 panel panel-default" >
					<div class="panel-heading rounded-0">
<!--							<h3 class="panel-title">Profit-Loss</h3>-->

					</div>
					<div class="panel-body" id="show_report">

					</div>

				</div>
			</div>
		</div> <!-- /.row -->
	</div> <!-- /.Container -->
</section>


<script type="text/javascript">
	$("#search_report").click(function () {
		var date_from = $('#date_from').val();
		var date_to = $('#date_to').val();
		var product = $('#product').val();
		var post_data = {
			'date_from': date_from, 'date_to': date_to, 'medicine_name_id': product
		};
		console.log(post_data);
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>Get_ajax_value/get_product_profit_loss_info",
			data: post_data,
			success: function (data) {
				$('#show_report').html(data);
			}
		});
	});
</script>
