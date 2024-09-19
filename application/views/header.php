<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <title><?= isset($page_title) ? $page_title : 'Pharmacy' ?> | CI PMS</title>
    <link rel="stylesheet" type="image/png" href="<?php echo base_url(); ?>assets/icon.png">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome.min.css">
    <link href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/bootstrap.min.js">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
<!--	CDN-->
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<!-- Main Body -->

<body>

    <!-- Menu Bar -->
    <!--/.nav-collapse -->
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url(); ?>Main/enter">Dashboard</a></li>
                    <li><a href="<?php echo base_url(); ?>ShowForm/create_medicine_name/main">Create Options</a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>ShowForm/medicine_purchase_info/main">Inventory</a></li>
                    <li><a href="<?php echo base_url(); ?>ShowForm/sell_medicine/main">Sales</a></li>
                    <li><a href="<?php echo base_url(); ?>ShowForm/profit_loss/main">Accounting</a></li>
                    <li><a href="<?php echo base_url(); ?>ShowForm/manage_staff/main">Manage Staff</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="#">Welcome</a></li>
                    <li><a href="<?php echo base_url(); ?>main/logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/.nav End -->

    <header id="header">
        <div class="container">
            <div class="col-md-10">
                <h2>
                    <i class="fa fa-medkit"></i>
                    Pharmacy Management System
                </h2>
            </div>
        </div>
        </div>
    </header>
