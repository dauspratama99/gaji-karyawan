<!DOCTYPE html>
<?php 
	$user=$this->session->userdata('user');
?>
<html class="fixed">
<head>
	<!-- Basic -->
<meta charset="UTF-8">
<title>PT.WEJE MITRA UTAMA PADANG</title>
<meta name="keywords" content="HTML5 Admin Template" />
<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
<meta name="author" content="JSOFT.net">
	<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Web Fonts  -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
	<!-- Vendor CSS -->
<link rel="stylesheet" href="<?php echo base_url('asset/')?>assets/vendor/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo base_url('asset/')?>assets/vendor/font-awesome/css/font-awesome.css" />
<link rel="stylesheet" href="<?php echo base_url('asset/')?>assets/vendor/magnific-popup/magnific-popup.css" />
<link rel="stylesheet" href="<?php echo base_url('asset/')?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
	<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="<?php echo base_url('asset/')?>assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
<link rel="stylesheet" href="<?php echo base_url('asset/')?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
<link rel="stylesheet" href="<?php echo base_url('asset/')?>assets/vendor/morris/morris.css" />
	<!-- Theme CSS -->
<link rel="stylesheet" href="<?php echo base_url('asset/')?>assets/stylesheets/theme.css" />
	<!-- Skin CSS -->
<link rel="stylesheet" href="<?php echo base_url('asset/')?>assets/stylesheets/skins/default.css" />
	<!-- Theme Custom CSS -->
<link rel="stylesheet" href="<?php echo base_url('asset/')?>assets/stylesheets/theme-custom.css">
	<!-- Head Libs -->
<script src="<?php echo base_url('asset/')?>assets/vendor/modernizr/modernizr.js"></script>
<link href="<?php echo base_url().'asset/'?>datatables-responsive/dataTables.responsive.css" 
rel="stylesheet">  
<link href="<?php echo base_url().'asset/'?>datatables-plugins/dataTables.bootstrap.css" 
rel="stylesheet"> 
</head>

<body>
<section class="body">
	<!-- start: header -->
<header class="header">
<div class="logo-container">
<a href="../" class="logo">
<img src="<?php echo base_url().'images/'.$user.'.jpg'?>"height="35" alt="JSOFT Admin" />
</a>
<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
</div>
</div>
	<!-- start: search & user box -->
<div class="header-right">				
<form action="pages-search-results.html" class="search nav-form">
<h5> PT. WEJE MITRA UTAMA(WMU) PADANG</h5>
</form>							
<span class="separator"></span>
<div id="userbox" class="userbox">
<a href="#" data-toggle="dropdown">
<figure class="profile-picture">
<img src="<?php echo base_url().'images/'.$user.'.jpg'?>"alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
</figure>
<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
<span class="name" ><?php echo $user?></span>			
</div>
<i class="fa custom-caret"></i>
</a>
<div class="dropdown-menu">
<ul class="list-unstyled">
<li class="divider"></li>
<li>
<a role="menuitem" tabindex="-1" href="<?php echo base_url().'asset/'.$user.'.html'?>"><i class="fa fa-user"></i> My Profile</a>
</li>	
<li>
<a role="menuitem" tabindex="-1" href="<?php echo site_url('user/gantipassword')?>""><i class="fa fa-gear"></i> Ganti Password</a>
</li>
<li>
<a role="menuitem" tabindex="-1" href="<?php echo site_url('log/logout')?>""><i class="fa fa-power-off"></i> Logout</a>
</li></ul></div></div></div>
	<!-- end: search & user box -->
</header>
	<!-- end: header -->
<script src="<?php echo base_url('asset/')?>assets/vendor/jquery/jquery.min.js"></script>
<div class="inner-wrapper">
	<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">		
<div class="sidebar-header">
<div class="sidebar-title">WMU</div>
<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
</div>
</div>
				{menu}		
</aside>
	<!-- end: sidebar -->
<section role="main" class="content-body">
<header class="page-header">
<h2>Dashboard</h2>
<div class="right-wrapper pull-right">
<ol class="breadcrumbs">
<li>
<a href="<?php echo site_url('template')?>">
<i class="fa fa-home"></i>
</a>
</li>
<li><span>Dashboard</span></li>
</ol>		
<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
</div>
</header>		
	<!-- start: page -->	
		
		{konten}	

	<!-- end: page -->
</section>
</div>
<aside id="sidebar-right" class="sidebar-right">
<div class="nano">
<div class="nano-content">
<a href="#" class="mobile-close visible-xs">Collapse <i class="fa fa-chevron-right"></i></a>
<div class="sidebar-right-wrapper">
<div class="sidebar-widget widget-calendar">
<h6>Upcoming Tasks</h6>
<div data-plugin-datepicker data-plugin-skin="dark" ></div>
</div></div></div></div>
</aside>
</section>
	<!-- Vendor -->
<script src="<?php echo base_url('asset/')?>assets/vendor/jquery/jquery.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/nanoscroller/nanoscroller.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/magnific-popup/magnific-popup.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>			<!-- Specific Page Vendor -->
<script src="<?php echo base_url('asset/')?>assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/jquery-appear/jquery.appear.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/flot/jquery.flot.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/flot/jquery.flot.categories.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/raphael/raphael.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/morris/morris.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/gauge/gauge.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/snap-svg/snap.svg.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/liquid-meter/liquid.meter.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/jqvmap/jquery.vmap.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
<script src="<?php echo base_url('asset/')?>assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js">
</script>
<script src="<?php echo base_url('asset/')?>assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>	
	<!-- Theme Base, Components and Settings -->
<script src="<?php echo base_url('asset/')?>assets/javascripts/theme.js"></script>	
	<!-- Theme Custom -->
<script src="<?php echo base_url('asset/')?>assets/javascripts/theme.custom.js"></script>	
	<!-- Theme Initialization Files -->
<script src="<?php echo base_url('asset/')?>assets/javascripts/theme.init.js"></script>
	<!-- Examples -->
<script src="<?php echo base_url('asset/')?>assets/javascripts/dashboard/examples.dashboard.js"></script>
<script src="<?php echo base_url().'asset/'?>datatables/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url().'asset/'?>datatables 
plugins/dataTables.bootstrap.min.js"></script> 
<script src="<?php echo base_url('asset/')?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
 
<script> 
    $(document).ready(function() { 
        $('#dataTables-example').DataTable({ 
            responsive: true 
        }); 
 $('#datapicker').datapicker({ 
            autoclose: true 
        }); 
			 $('#datapicker1').datapicker({ 
            autoclose: true 
        });
    }); 
</script> 
</body>
</html>
