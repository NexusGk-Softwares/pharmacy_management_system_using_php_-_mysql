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
			<li><a href="#">Inventory / Purchase Statement </a></li>
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
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Inventory</a>
					<a href="<?php echo base_url(); ?>ShowForm/medicine_purchase_info/main"
					   class="list-group-item">
						<span class="	fa fa-capsules" aria-hidden="true"></span> Insert Medicine P. Info.</a>
					<a href="<?php echo base_url(); ?>ShowForm/medicine_purchase_statement/main" class="list-group-item active">
						<span class="fa fa-plus-circle" aria-hidden="true"></span> Purchase Statement</a>
					<a href="<?php echo base_url(); ?>ShowForm/supplier_payment/main" class="list-group-item">
						<span class="fa fa-pills" aria-hidden="true"></span> Supplier Payment</a>
<!--					<a href="--><?php //echo base_url(); ?><!--ShowForm/create_product_name/main" class="list-group-item">-->
<!--						<span class="fa fa-plus" aria-hidden="true"></span> Ledger</a>-->
				</div>
			</div>
			<div class="col-md-9">
				<div class="rounded-0 panel panel-default">
					<div class="panel-heading rounded-0 main-color-bg">
						<h3 class="panel-title"> Medicine Purchase Statement</h3>
					</div>

					<div class="panel-body">

						<!-- /.rounded-0 panel End -->
						<?php echo form_open_multipart('Insert/medicine_purchase_info'); ?>
						<div class="box-body">
							<div class="row">
								<div class="col-sm-6" style="">
									<label for="date_from">Date From</label>
									<input type="date" class="form-control datepicker"
										   placeholder="Insert Date" name="date_from" id="date_from"
										   autocomplete="off">
								</div>
								<div class="col-sm-6" style="">
									<label for="date_to">Date To</label>
									<input type="date" class="form-control _datepicker"
										   placeholder="Insert Date" name="date_to" id="date_to"
										   autocomplete="off">
								</div>
								<div class="col-sm-6" style="">
									<label for="medicine_name">Medicine Name</label>
									<select name="medicine_name" id="medicine_name" class="form-control selectpicker"
											data-live-search="true">
										<option value="">-- Select --</option>
										<?php foreach ($all_value as $info) { ?>
											<option value="<?php echo $info->medicine_name; ?>"><?php echo $info->medicine_name; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-sm-6" style="">
									<label for="supplier">Supplier Company</label>
									<select name="supplier" id="supplier" class="form-control selectpicker"
											data-live-search="true">
										<option value="">-- Select --</option>
										<?php foreach ($all_sup as $info) { ?>
											<option value="<?php echo $info->supplier_name; ?>"><?php echo $info->supplier_name; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-4" style="margin-top: 17px;">
									<button type="button" class="pull-left btn btn-primary" id="search_purchase">Search</button>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div><!-- /.rounded-0 panel End -->
			</div>
			<!-- /.rounded-0 panel 2nd -->
			<div class="col-md-12">
				<div class="rounded-0 panel panel-default">
					<div class="panel-heading rounded-0">
							<h3 class="panel-title">Purchase Statement</h3>
					</div>
					<div class="panel-body" id="show_purchase">

					</div>

				</div>
			</div>
		</div> <!-- /.row -->
	</div> <!-- /.Container -->
</section>


<script type="text/javascript">
	$("#search_purchase").click(function () {
		var date_from = $('#date_from').val();
		var date_to = $('#date_to').val();
		var medicine_name = $('#medicine_name').val();
		//var invoice = $('#invoice').val();
		var supplier = $('#supplier').val();
		var post_data = {
			'date_from': date_from, 'date_to': date_to, 'medicine_name': medicine_name, 'supplier': supplier,
			'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
		};
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>Get_ajax_value/get_purchase_statement",
			data: post_data,
			success: function (data) {
				$('#show_purchase').html(data);
			}
		});
	});
</script>
