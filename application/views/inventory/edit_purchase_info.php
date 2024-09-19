<?php
foreach ($one_value as $one_info) {
	$purchase_id= $one_info->purchase_id;
	$medicine_name_id = $one_info->medicine_name_id;
	$medicine_presentation_id = $one_info->medicine_presentation_id;
	$generic_id = $one_info->generic_id;
	$supplier_id = $one_info->supplier_id;
	$medicine_name = $one_info->medicine_name;
	$generic = $one_info->generic_name;
	$presentation = $one_info->medicine_presentation;
	$supplier = $one_info->supplier_name;
	$qty = $one_info->qty;
	$unit_price = $one_info->unit_price;
	$purchase_price = $one_info->purchase_price;
	$unit_sales_price = $one_info->unit_sales_price;
	$unit = $one_info->unit;
	$purchase_paid= $one_info->purchase_paid;
	$purchase_due = $one_info->purchase_due;
	$ex_date = $one_info->expiredate;
}
?>
<!-- /.Breadcrumb -->
<section id="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">Inventory</a></li>
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
					   class="list-group-item active">
						<span class="	fa fa-capsules" aria-hidden="true"></span> Insert Medicine Info.</a>
					<a href="<?php echo base_url(); ?>ShowForm/medicine_purchase_statement/main" class="list-group-item">
						<span class="fa fa-plus-circle" aria-hidden="true"></span> Purchase Statement</a>
					<a href="<?php echo base_url(); ?>ShowForm/supplier_payment/main" class="list-group-item">
						<span class="fa fa-pills" aria-hidden="true"></span> Supplier Payment</a>
					<!--                    <a href="--><?php //echo base_url(); ?><!--ShowForm/create_product_name/main" class="list-group-item">-->
					<!--                        <span class="fa fa-plus" aria-hidden="true"></span> Ledger</a>-->
				</div>
			</div>
			<div class="col-md-9">
				<div class="rounded-0 panel panel-default">
					<div class="panel-heading rounded-0 main-color-bg">
						<h3 class="panel-title">Update Medicine Purchase Information</h3>
					</div>

					<div class="panel-body">

						<!-- /.rounded-0 panel End -->
						<?php echo form_open_multipart('Insert/edit_medicine_purchase_info/' . $purchase_id); ?>
						<div class="box-body">
							<div class="row">
								<div class="col-sm-3" style="">
									<label for="date">Date</label>
									<input type="text" class="form-control new_datepicker" id="date"
										   value="<?php echo date('Y-m-d'); ?>" placeholder="Date" name="date" autocomplete="off">
								</div>
								<div class="col-sm-3" style="">
									<label for="medicine_name">Medicine Name</label>
									<select name="medicine_name" id="medicine_name" class="form-control selectpicker"
											data-live-search="true">
										<?php foreach ($all_medicine as $info) { ?>
											<option value="<?php echo $info->medicine_name."###".$info->medicine_name_id; ?>" <?= isset($medicine_name_id) && $medicine_name_id == $info->medicine_name_id ? 'selected' : "" ?>><?php echo $info->medicine_name; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-sm-3" style="">
									<label for="generic">Generic</label>
									<select name="generic" id="generic" class="form-control selectpicker"
											data-live-search="true">
										<?php foreach ($all_generic as $info) { ?>
											<option value="<?php echo $info->generic_name."###".$info->generic_id; ?>" <?= isset($generic_id) && $generic_id == $info->generic_id ? 'selected' : "" ?>><?php echo $info->generic_name; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-sm-3" style="">
									<label for="presentation">Presentation</label>
									<select name="presentation" id="presentation" class="form-control selectpicker"
											data-live-search="true">
										<?php foreach ($all_presen as $info) { ?>
											<option value="<?php echo $info->medicine_presentation."###".$info->medicine_presentation_id; ?>" <?= isset($medicine_presentation_id) && $medicine_presentation_id == $info->medicine_presentation_id ? 'selected' : "" ?>><?php echo $info->medicine_presentation; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-sm-3" style="">
									<label for="supplier">Supplier Company</label>
									<select name="supplier" id="supplier" class="form-control selectpicker"
											data-live-search="true">
										<?php foreach ($all_sup as $info) { ?>
											<option value="<?php echo $info->supplier_name."###".$info->supplier_id; ?>" <?= isset($supplier_id) && $supplier_id == $info->supplier_id ? 'selected' : "" ?>><?php echo $info->supplier_name; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3">
									<label for="qty">Total Quantity</label>
									<input type="text" class="form-control" id="qty" name="qty" value="<?php echo $qty; ?>">
								</div>
								<div class="col-sm-3" style="">
									<label for="unit_price">Unit Price</label>
									<input type="text" class="form-control" id="unit_price"  name="unit_price"
										   value="<?php echo $unit_price; ?>">
								</div>
								<div class="col-sm-3">
									<label for="purchase_price">Total Amount</label>
									<input type="text" class="form-control" id="purchase_price" placeholder="$"
										   name="purchase_price" value="<?php echo $purchase_price; ?>">
								</div>
								<div class="col-sm-3">
									<label for="unit_sales_price">Selling Price</label>
									<input type="text" class="form-control" id="unit_sales_price" placeholder="$"
										   name="unit_sales_price" value="<?php echo $unit_sales_price; ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3">
									<label for="unit">Unit</label>
									<input type="text" class="form-control" id="unit" placeholder="gm / ml"
										   value="<?php echo $unit; ?>"   name="unit">
								</div>
								<div class="col-sm-3">
									<label for="purchase_paid">Purchase Paid</label>
									<input type="text" class="form-control" id="purchase_paid" placeholder="$"
										   name="purchase_paid" value="<?php echo $purchase_paid; ?>">
								</div>
								<div class="col-sm-3">
									<label for="purchase_due">Purchase Due</label>
									<input type="text" class="form-control" id="purchase_due" placeholder="$"
										   name="purchase_due" value="<?php echo $purchase_due; ?>">
								</div>
								<div class="col-sm-3">
									<label for="ex_date">Expire Date</label>
									<input type="date" class="form-control new_datepicker" id="ex_date"
										   placeholder="Date" name="ex_date" autocomplete="off" value="<?php echo $ex_date; ?>">
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
			</div>
			<!-- /.rounded-0 panel 2nd -->
			<div class="col-md-12">

			</div>
		</div> <!-- /.row -->
	</div> <!-- /.Container -->


	<script type="text/javascript">

		$("#purchase_paid").on("change paste keyup", function () {
			var purchase_paid = $('#purchase_paid').val();
			var purchase_price = $('#purchase_price').val();
			var total = parseFloat(purchase_price) - parseFloat(purchase_paid);
			$('#purchase_due').val(total);
		});
		$("#unit_price").on("change paste keyup", function () {
			var qty = $('#qty').val();
			var unit_price = $('#unit_price').val();
			//var total = parseFloat(purchase_price) - parseFloat(purchase_paid);
			var amount =qty * unit_price;
			$('#purchase_price').val(amount);
		});
	</script>
