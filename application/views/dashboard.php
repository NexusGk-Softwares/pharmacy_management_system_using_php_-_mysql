
 <!-- /.container -->
 <section id="main">
	 <div class="container">
<div class="row">
   <div class="col-md-12">
    <div class="rounded-0 panel panel-default">
      <div class="panel-heading rounded-0 main-color-bg">
        <h3 class="panel-title">Inventory Overview</h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="well dash-box">
              <h4><span class="glyphicon glyphicon-th" aria-hidden="true" style="color: #005196;"></span> Medicines</h4>
              <h2 class='text-right'><?php echo number_format($medicine_qty); ?></h2>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="well dash-box">
              <h4><span class="glyphicon glyphicon-th-list" aria-hidden="true" style="color: rgb(132, 75, 158);"></span> Medicine Generic</h4>
              <h2 class='text-right'><?php $query = $this->db->query('SELECT * FROM create_generic_name'); echo number_format($query->num_rows());?></h2>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="well dash-box">
                <h4><span class="fas fa-shopping-cart" aria-hidden="true" style="color:#4eb4f0;"></span> Today's Purchase Amount</h4>
                <h2 class="text-right"><?php echo '$'.(number_format($today_purchase_number)); ?></h2>
              </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="well dash-box">
                <h4><span class="glyphicon glyphicon-usd" aria-hidden="true" style="color: #4cae4c;"></span>  Total Purchase Due</h4>
                <h2 class='text-right'><?php echo number_format($today_due); ?></h2>
              </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="well dash-box">
              <h4><span class="far fa-calendar-alt" aria-hidden="true" style="color: #2e6da4;"></span> Sales of the Month</h4>
                <h2 class='text-right'><?php echo '$'.(number_format($monthly_sales_number)); ?> </h2>
              </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="well dash-box">
              <h4><span class="glyphicon glyphicon-equalizer" aria-hidden="true" style="color: orange;"></span> Today's Sale</h4>
              <h2 class='text-right'><?php echo '$'.(number_format($today_sale_number)); ?></h2>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="well dash-box">
              <h4><span class="glyphicon glyphicon-warning-sign" aria-hidden="true" style="color: darkred;"></span> Expired Products</h4>
              <h2 class='text-right'><?php echo number_format($near_expired_product); ?></h2>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="well dash-box">
              <h4><span class="glyphicon glyphicon-user" aria-hidden="true" style="color: rgb(109, 139, 0);"></span> Staffs</h4>
              <h2 class='text-right'><?php $query = $this->db->query('SELECT * FROM staff'); echo number_format($query->num_rows());?></h2>
            </div>
          </div>
        </div>
    </div>
   </div>

	</div >
  </div >
 </section>



