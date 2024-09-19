<?php if (!empty($all_product_info)) { ?>
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title" style="color: black;">Profit / Loss Report
                <?php if ($start_date != "" && $end_date != "") { ?>
                    (<?php echo date('d F, Y', strtotime($start_date)) . " - " . date('d F, Y', strtotime($end_date)); ?>)
                <?php } ?>
            </h3>
			<p style="">
				<button id="print_button" title="Click to Print" type="button"
						onClick="window.print()" class="">Print
				</button>
			</p>
        </div>


        <div class="box-body table-responsive" style="width: 98%; overflow-x: scroll; color: black;">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th style="text-align: center;">#</th>
                        <th style="text-align: center;">Medicine</th>
                        <th style="text-align: center;">Sold Quantity</th>
                        <th style="text-align: center;">Purchase Price <br> (per unit)</th>
                        <th style="text-align: center;">Selling Price <br> (per unit)</th>
                        <th style="text-align: center;">Profit  / Loss<br> (per unit)</th>
<!--                        <th style="text-align: center;">Total Profit  / Loss</th>-->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total_qty = 0;
                    $total_price = 0;
                    $total_balance = 0;
                    $total_income = 0;
                    $total_expense = 0;
                    for ($i = 1; $i <= $c; $i++) {
                        $total_qty += ${'sold_qty' . $i};
//                        $total_price += ${'profit_loss_total' . $i};
                        ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $i; ?></td>
                            <td style="text-align: center;"><?php echo ${'name' . $i}; ?></td>
                            <td style="text-align: center;"><?php echo ${'sold_qty' . $i}; ?></td>
                            <td style="text-align: center;"><?php echo '$'.${'purchase_price' . $i}; ?></td>
                            <td style="text-align: center;"><?php echo '$'.${'selling_price' . $i}; ?></td>
                            <td style="text-align: center;">
                                <?php
                                if (${'profit_loss_unit' . $i} > 0) {
                                    echo '$'.${'profit_loss_unit' . $i} . ' [Profit]';
                                } else {
                                    echo '$'.${'profit_loss_unit' . $i} * (-1) . ' [Loss]';
                                }
                                ?>
                            </td>
<!--                            <td style="text-align: center;">-->
<!--                                --><?php
//                                if (${'profit_loss_total' . $i} > 0) {
//                                    echo ${'profit_loss_total' . $i} . ' [Profit]';
//                                } else {
//                                    echo ${'profit_loss_total' . $i} * (-1) . ' [Loss]';
//                                }
//                                ?>
<!--                            </td>-->
                        </tr>
                    <?php } ?>
<!--                    <tr style="font-weight: bolder;">-->
<!--                        <td style="text-align: right;" colspan="2">Total</td>-->
<!--                        <td style="text-align: center;">--><?php //echo $total_qty; ?><!--</td>-->
<!--                        <td style="text-align: center;" colspan="2"></td>-->
<!--						<td></td>-->
<!--                        <td style="text-align: center;">--><?php //echo $total_price; ?><!--  [Balance]</td>-->
<!--                    </tr>-->
                </tbody>
            </table>
        </div>
    </div>
<?php } ?>

<style>
	@media print {
		a[href]:after {
			content: none !important;
		}

		#print_button {
			display: none;
		}

		#no_print1 {
			display: none;
		}
		#no_print2 {
			display: none;
		}
		#no_print3 {
			display: none;
		}
		#no_print4 {
			display: none;
		}
	}

</style>
