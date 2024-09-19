
<div class="box-body table-responsive" style="width: 100%; color: black;">
	<div class="row">
		<div class="form-group col-sm-3 col-xs-12">
			<label for="old_due">Previous Due</label>
			<input type="text" name="old_due" id="old_due" value="<?php echo $old_due; ?>" class="form-control" readonly>
		</div>
		<div class="form-group col-sm-3 col-xs-12">
			<label for="paid">Pay Amount</label>
			<input type="text" name="paid" id="paid" class="form-control">
		</div>
		<div class="form-group col-sm-3 col-xs-12">
			<label for="final_due">Final Due</label>
			<input type="text" name="final_due" id="final_due" class="form-control" readonly>
		</div>
		<div class="form-group col-sm-3 col-xs-12">
			<button type="button" class="pull-left btn btn-primary rounded-0" id="pay_btn"
					style="margin-top: 22px; width: 70%;">Pay</button>
		</div>
	</div>
	<table id="example2" class="table table-bordered table-hover">
		<thead>
		<tr>
			<th colspan="8">
				<p style="text-align: center; font-weight: bold;">Supplier Name: <?php echo $supplier_name; ?></p>
			</th>
		</tr>
		<tr>
			<th style="text-align: center;">#</th>
			<th style="text-align: center;">Date</th>
			<th style="text-align: center;">Particular</th>
			<th style="text-align: center;">Supplier</th>
			<th style="text-align: center;">Total</th>
			<th style="text-align: center;">Paid</th>
			<th style="text-align: center;">Due</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$count = 0;
		foreach ($all_value as $single_value) {
			$count++;
			?>
			<tr>
				<td style="text-align: center;"><?php echo $count; ?></td>
				<td>
					<?php echo date('M d, Y', strtotime($single_value->date)); ?>
				</td>
				<td><?php echo $single_value->particulars; ?></td>
				<td><?php echo $single_value->supplier_name; ?></td>
				<td style="text-align: right;">
					<?php if($single_value->particulars =="Purchase Medicine"){?>
						<?php echo '$'.($single_value->purchase_due+$single_value->purchase_paid); ?>
					<?php }else{echo '$'.$single_value->purchase_price;}?>
				</td>
				<td style="text-align: right;">$<?php echo $single_value->purchase_paid; ?></td>
				<td style="text-align: right;">$<?php echo $single_value->purchase_due; ?></td>

			</tr>
		<?php } ?>
		<tr>
			<td colspan="8">
				<p style="text-align: right; font-weight: bold;">Total Due: $<?php echo $old_due; ?></p>
			</td>
		</tr>
		</tbody>
	</table>
	</div>

<script type="text/javascript">
	$("#paid").on("change paste keyup", function () {
		var paid = $('#paid').val();
		var old_due = $('#old_due').val();
		if (paid >= 0) {
			var final_due = old_due - paid;
			$('#final_due').val(final_due);
		} else {
			$('#final_due').val(old_due);
		}
	});

	$('#pay_btn').on('click', function (e) {
		var s_supplier = $('#s_supplier').val();
		var paid = $('#paid').val();
		var final_due = $('#final_due').val();
		var post_data = {
			'paid': paid, 's_supplier': s_supplier, 'final_due': final_due
		};
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>Insert/insert_purchase_payment",
			data: post_data,
			success: function (data) {
				$('#show_purchase').html(data);
			}
		});
	});
</script>

