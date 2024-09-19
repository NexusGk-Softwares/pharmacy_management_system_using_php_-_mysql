<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: bmmah-->
<!-- * Date: 3/22/2019-->
<!-- * Time: 10:31 PM-->
<!-- */-->
<div class="panel-body">
							<table class="table table-striped table-bordered table-hover">
								<thead>
								<tr>
									<th style="text-align: center;">#</th>
									<th style="text-align: center;">Details</th>
									<th style="text-align: center;">Supplier Name</th>
									<th style="text-align: center;">Unit Price</th>
									<th style="text-align: center;">Quantity</th>
									<th style="text-align: center;">Total Amount</th>
<!--									<th style="text-align: center;">Selling Price</th>-->
									<th style="text-align: center;">Paid</th>
									<th style="text-align: center;">Due</th>
									<th style="text-align: center;">Expire Date</th>
								</tr>
								</thead>
								<!-- /.Row from DB-->
								<tbody>
								<?php
								$total_qty = 0;
								$total_price = 0;
								$total_paid = 0;
								$total_due = 0;
								for ($i = 1; $i <= $count_it; $i++) {
									$one_time = 0;
									foreach (${"product_result" . $i} as $single_value) {
										$total_qty += $single_value->qty;
										$total_price += $single_value->purchase_price;
										$total_paid += $single_value->purchase_paid;
										$total_due += $single_value->purchase_due;
										$one_time++;
										?>
										<tr>
											<td style="text-align: center;"><?php echo $i; ?></td>
											<td style="text-align: left;">
												Medicine:	<?php echo $single_value->medicine_name; ?>  <br>
												Generic:	<?php echo $single_value->generic_name; ?></br>
												Presentation:	<?php echo $single_value->medicine_presentation; ?>
											</td>
											<td style="text-align: center;"><?php echo $single_value->supplier_name; ?></td>
											<td style="text-align: center;"><?php echo '$'.$single_value->unit_price; ?></td>
											<td style="text-align: center;"><?php echo $single_value->qty; ?></td>
											<td style="text-align: center;"><?php echo '$'.$single_value->purchase_price; ?></td>
<!--											<td style="text-align: center;">--><?php //echo $single_value->unit_sales_price; ?><!--</td>-->
											<td style="text-align: center;"><?php echo '$'.$single_value->purchase_paid; ?></td>
											<td style="text-align: center;"><?php echo '$'.$single_value->purchase_due; ?></td>
											<td style="text-align: center;"><?php echo $single_value->expiredate; ?></td>
										</tr>
										<?php
									}
								}
								?>
								<tr style="font-weight: bolder;">
									<td style="text-align: right;" colspan="4">Total</td>
									<td style="text-align: center;" colspan=""><?php echo $total_qty; ?></td>
									<td style="text-align: center;"colspan=""><?php echo '$'.$total_price; ?>/-</td>
									<td style="text-align: center;"colspan=""><?php echo '$'.$total_paid; ?>/-</td>
									<td style="text-align: center;"colspan=""><?php echo '$'.$total_due; ?>/-</td>

<!--									<td style="text-align: center;" colspan="3"></td>-->
								</tr>
								</tbody>
							</table>
						</div>
