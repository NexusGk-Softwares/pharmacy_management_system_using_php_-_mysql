
<!-- /.Breadcrumb -->
<!-- /.container -->
<section id="main">
	<div class="container">
			<div class="col-md-9" >
				<div class="rounded-0 panel panel-default">
					<div class="panel-heading rounded-0 main-color-bg">
						<h3 class="panel-title"> Sales Medicine  Invoice</h3>
					</div>

					<div class="panel-body">
						<div class="box-header"  style="color: black; text-align: center;">
							<p style="padding: 5px; text-align: left;"><button id="print_button" title="Click to Print" type="button"
								onClick="window.print()" class="btn btn-flat fa fa-print">Print</button></p>
						</div>
						<div class="row">
													<div class="form-group col-xs-4 col-xs-12"><b>
															INVOICE ID: </b> <?php echo $invoice; ?>
													</div>
													<div class="form-group col-xs-5 col-xs-12"><b>
															Customer Email:</b> <?php echo $email; ?>
													</div>
													<div class="form-group col-xs-3 col-xs-12"><b>
															Date:</b> <?php echo $date; ?>
													</div>
													<div class="form-group col-xs-12 col-xs-12"><b>
															Medicine Name and Price:</b> <?php echo $medicine_name; ?><br><br>
													</div>

							<div class="form-group col-xs-3 col-xs-12"><b>
									Amount:</b> <?php echo $amount; ?>
							</div>
							<div class="form-group col-xs-3 col-xs-12"><b>
									Discount:</b> <?php echo $discount; ?>
							</div>

							<div class="form-group col-xs-3 col-xs-12"><b>
									Sub Total:</b> <?php echo $sub_total; ?>
							</div>
							<div class="form-group col-xs-3 col-xs-12"><b>
									Pay:</b> <?php echo $pay; ?>
							</div>
						</div>

						<!-- /.rounded-0 panel End -->
					</div>
				</div><!-- /.rounded-0 panel End -->
			</div>
			<!-- /.rounded-0 panel 2nd -->
<!--			<div class="col-md-12">-->
<!--				<div class="rounded-0 panel panel-default">-->
<!--					<div class="panel-heading rounded-0">-->
<!--						<h3 class="panel-title">Sales Medicine</h3>-->
<!--					</div>-->
<!--					-->
<!---->
<!---->
<!---->
<!--				</div>-->
<!--			</div>-->

	</div> <!-- /.Container -->
</section>

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
