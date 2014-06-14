<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>General | Melon - Flat &amp; Responsive Admin Template</title>

	<!--=== CSS ===-->

	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- jQuery UI -->
	<!--<link href="plugins/jquery-ui/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />-->
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/>
	<![endif]-->

	<!-- Theme -->
	<link href="assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="assets/css/fontawesome/font-awesome.min.css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="assets/css/fontawesome/font-awesome-ie7.min.css">
	<![endif]-->

	<!--[if IE 8]>
		<link href="assets/css/ie8.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<!--=== JavaScript ===-->

	<script type="text/javascript" src="assets/js/libs/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>

	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/libs/lodash.compat.min.js"></script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="assets/js/libs/html5shiv.js"></script>
	<![endif]-->

	<!-- Smartphone Touch Events -->
	<script type="text/javascript" src="plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="plugins/event.swipe/jquery.event.move.js"></script>
	<script type="text/javascript" src="plugins/event.swipe/jquery.event.swipe.js"></script>

	<!-- General -->
	<script type="text/javascript" src="assets/js/libs/breakpoints.js"></script>
	<script type="text/javascript" src="plugins/respond/respond.min.js"></script> <!-- Polyfill for min/max-width CSS3 Media Queries (only for IE8) -->
	<script type="text/javascript" src="plugins/cookie/jquery.cookie.min.js"></script>
	<script type="text/javascript" src="plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="plugins/slimscroll/jquery.slimscroll.horizontal.min.js"></script>

	<!-- Page specific plugins -->
	<!-- Charts -->
	<script type="text/javascript" src="plugins/sparkline/jquery.sparkline.min.js"></script>

	<script type="text/javascript" src="plugins/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="plugins/daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="plugins/blockui/jquery.blockUI.min.js"></script>

	<!-- Pickers -->
	<script type="text/javascript" src="plugins/pickadate/picker.js"></script>
	<script type="text/javascript" src="plugins/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="plugins/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>

	<!-- Noty -->
	<script type="text/javascript" src="plugins/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="plugins/noty/layouts/top.js"></script>
	<script type="text/javascript" src="plugins/noty/themes/default.js"></script>

	<!-- Slim Progress Bars -->
	<script type="text/javascript" src="plugins/nprogress/nprogress.js"></script>

	<!-- Bootbox -->
	<script type="text/javascript" src="plugins/bootbox/bootbox.js"></script>

	<!-- App -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/plugins.js"></script>
	<script type="text/javascript" src="assets/js/plugins.form-components.js"></script>

	<script>
	$(document).ready(function(){
		"use strict";

		App.init(); // Init layout and core plugins
		Plugins.init(); // Init all plugins
		FormComponents.init(); // Init all form-specific plugins
	});
	</script>

	<!-- Demo JS -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<script type="text/javascript" src="assets/js/demo/ui_general.js"></script>
</head>

<body>

	<!-- Header -->
	<header class="header navbar navbar-fixed-top" role="banner">
		<!-- Top Navigation Bar -->
		<div class="container">

			<!-- Only visible on smartphones, menu toggle -->
			<ul class="nav navbar-nav">
				<li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="icon-reorder"></i></a></li>
			</ul>

			<!-- Logo -->
			<a class="navbar-brand" href="index.html">
				<img src="assets/img/logo.png" alt="logo" />
				<strong>ME</strong>LON
			</a>
			<!-- /logo -->

			<!-- Sidebar Toggler -->
			<a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Toggle navigation">
				<i class="icon-reorder"></i>
			</a>
			<!-- /Sidebar Toggler -->

			<!-- Top Left Menu -->
			<ul class="nav navbar-nav navbar-left hidden-xs hidden-sm">
				<li>
					<a href="#">
						Dashboard
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Dropdown
						<i class="icon-caret-down small"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="icon-user"></i> Example #1</a></li>
						<li><a href="#"><i class="icon-calendar"></i> Example #2</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-tasks"></i> Example #3</a></li>
					</ul>
				</li>
			</ul>
			<!-- /Top Left Menu -->

			<!-- Top Right Menu -->
			<ul class="nav navbar-nav navbar-right">
				<!-- Notifications -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-warning-sign"></i>
						<span class="badge">5</span>
					</a>
					<ul class="dropdown-menu extended notification">
						<li class="title">
							<p>You have 5 new notifications</p>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-success"><i class="icon-plus"></i></span>
								<span class="message">New user registration.</span>
								<span class="time">1 mins</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-danger"><i class="icon-warning-sign"></i></span>
								<span class="message">High CPU load on cluster #2.</span>
								<span class="time">5 mins</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-success"><i class="icon-plus"></i></span>
								<span class="message">New user registration.</span>
								<span class="time">10 mins</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-info"><i class="icon-bullhorn"></i></span>
								<span class="message">New items are in queue.</span>
								<span class="time">25 mins</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="label label-warning"><i class="icon-bolt"></i></span>
								<span class="message">Disk space to 85% full.</span>
								<span class="time">55 mins</span>
							</a>
						</li>
						<li class="footer">
							<a href="javascript:void(0);">View all notifications</a>
						</li>
					</ul>
				</li>

				<!-- Tasks -->
				<li class="dropdown hidden-xs hidden-sm">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-tasks"></i>
						<span class="badge">7</span>
					</a>
					<ul class="dropdown-menu extended notification">
						<li class="title">
							<p>You have 7 pending tasks</p>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="task">
									<span class="desc">Preparing new release</span>
									<span class="percent">30%</span>
								</span>
								<div class="progress progress-small">
									<div style="width: 30%;" class="progress-bar progress-bar-info"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="task">
									<span class="desc">Change management</span>
									<span class="percent">80%</span>
								</span>
								<div class="progress progress-small progress-striped active">
									<div style="width: 80%;" class="progress-bar progress-bar-danger"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="task">
									<span class="desc">Mobile development</span>
									<span class="percent">60%</span>
								</span>
								<div class="progress progress-small">
									<div style="width: 60%;" class="progress-bar progress-bar-success"></div>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="task">
									<span class="desc">Database migration</span>
									<span class="percent">20%</span>
								</span>
								<div class="progress progress-small">
									<div style="width: 20%;" class="progress-bar progress-bar-warning"></div>
								</div>
							</a>
						</li>
						<li class="footer">
							<a href="javascript:void(0);">View all tasks</a>
						</li>
					</ul>
				</li>

				<!-- Messages -->
				<li class="dropdown hidden-xs hidden-sm">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-envelope"></i>
						<span class="badge">1</span>
					</a>
					<ul class="dropdown-menu extended notification">
						<li class="title">
							<p>You have 3 new messages</p>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="photo"><img src="assets/img/demo/avatar-1.jpg" alt="" /></span>
								<span class="subject">
									<span class="from">Bob Carter</span>
									<span class="time">Just Now</span>
								</span>
								<span class="text">
									Consetetur sadipscing elitr...
								</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="photo"><img src="assets/img/demo/avatar-2.jpg" alt="" /></span>
								<span class="subject">
									<span class="from">Jane Doe</span>
									<span class="time">45 mins</span>
								</span>
								<span class="text">
									Sed diam nonumy...
								</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="photo"><img src="assets/img/demo/avatar-3.jpg" alt="" /></span>
								<span class="subject">
									<span class="from">Patrick Nilson</span>
									<span class="time">6 hours</span>
								</span>
								<span class="text">
									No sea takimata sanctus...
								</span>
							</a>
						</li>
						<li class="footer">
							<a href="javascript:void(0);">View all messages</a>
						</li>
					</ul>
				</li>

				<!-- .row .row-bg Toggler -->
				<li>
					<a href="#" class="dropdown-toggle row-bg-toggle">
						<i class="icon-resize-vertical"></i>
					</a>
				</li>

				<!-- Project Switcher Button -->
				<li class="dropdown">
					<a href="#" class="project-switcher-btn dropdown-toggle">
						<i class="icon-folder-open"></i>
						<span>Projects</span>
					</a>
				</li>

				<!-- User Login Dropdown -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<!--<img alt="" src="assets/img/avatar1_small.jpg" />-->
						<i class="icon-male"></i>
						<span class="username">John Doe</span>
						<i class="icon-caret-down small"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="pages_user_profile.html"><i class="icon-user"></i> My Profile</a></li>
						<li><a href="pages_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
						<li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
						<li class="divider"></li>
						<li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
					</ul>
				</li>
				<!-- /user login dropdown -->
			</ul>
			<!-- /Top Right Menu -->
		</div>
		<!-- /top navigation bar -->

		<!--=== Project Switcher ===-->
		<div id="project-switcher" class="container project-switcher">
			<div id="scrollbar">
				<div class="handle"></div>
			</div>

			<div id="frame">
				<ul class="project-list">
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-desktop"></i></span>
							<span class="title">Lorem ipsum dolor</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-compass"></i></span>
							<span class="title">Dolor sit invidunt</span>
						</a>
					</li>
					<li class="current">
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-male"></i></span>
							<span class="title">Consetetur sadipscing elitr</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-thumbs-up"></i></span>
							<span class="title">Sed diam nonumy</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-female"></i></span>
							<span class="title">At vero eos et</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-beaker"></i></span>
							<span class="title">Sed diam voluptua</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-desktop"></i></span>
							<span class="title">Lorem ipsum dolor</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-compass"></i></span>
							<span class="title">Dolor sit invidunt</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-male"></i></span>
							<span class="title">Consetetur sadipscing elitr</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-thumbs-up"></i></span>
							<span class="title">Sed diam nonumy</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-female"></i></span>
							<span class="title">At vero eos et</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<span class="image"><i class="icon-beaker"></i></span>
							<span class="title">Sed diam voluptua</span>
						</a>
					</li>
				</ul>
			</div> <!-- /#frame -->
		</div> <!-- /#project-switcher -->
	</header> <!-- /.header -->

	<div id="container">
		<div id="sidebar" class="sidebar-fixed">
			<div id="sidebar-content">

				<!-- Search Input -->
				<form class="sidebar-search">
					<div class="input-box">
						<button type="submit" class="submit">
							<i class="icon-search"></i>
						</button>
						<span>
							<input type="text" placeholder="Search...">
						</span>
					</div>
				</form>

				<!-- Search Results -->
				<div class="sidebar-search-results">

					<i class="icon-remove close"></i>
					<!-- Documents -->
					<div class="title">
						Documents
					</div>
					<ul class="notifications">
						<li>
							<a href="javascript:void(0);">
								<div class="col-left">
									<span class="label label-info"><i class="icon-file-text"></i></span>
								</div>
								<div class="col-right with-margin">
									<span class="message"><strong>John Doe</strong> received $1.527,32</span>
									<span class="time">finances.xls</span>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<div class="col-left">
									<span class="label label-success"><i class="icon-file-text"></i></span>
								</div>
								<div class="col-right with-margin">
									<span class="message">My name is <strong>John Doe</strong> ...</span>
									<span class="time">briefing.docx</span>
								</div>
							</a>
						</li>
					</ul>
					<!-- /Documents -->
					<!-- Persons -->
					<div class="title">
						Persons
					</div>
					<ul class="notifications">
						<li>
							<a href="javascript:void(0);">
								<div class="col-left">
									<span class="label label-danger"><i class="icon-female"></i></span>
								</div>
								<div class="col-right with-margin">
									<span class="message">Jane <strong>Doe</strong></span>
									<span class="time">21 years old</span>
								</div>
							</a>
						</li>
					</ul>
				</div> <!-- /.sidebar-search-results -->

				<!--=== Navigation ===-->
				<ul id="nav">
					<li>
						<a href="index.html">
							<i class="icon-dashboard"></i>
							Dashboard
						</a>
					</li>
					<li class="current open">
						<a href="javascript:void(0);">
							<i class="icon-desktop"></i>
							UI Features
							<span class="label label-info pull-right">6</span>
						</a>
						<ul class="sub-menu">
							<li class="current">
								<a href="ui_general.html">
								<i class="icon-angle-right"></i>
								General
								</a>
							</li>
							<li>
								<a href="ui_buttons.html">
								<i class="icon-angle-right"></i>
								Buttons
								</a>
							</li>
							<li>
								<a href="ui_tabs_accordions.html">
								<i class="icon-angle-right"></i>
								Tabs &amp; Accordions
								</a>
							</li>
							<li>
								<a href="ui_sliders.html">
								<i class="icon-angle-right"></i>
								Sliders
								</a>
							</li>
							<li>
								<a href="ui_nestable_list.html">
								<i class="icon-angle-right"></i>
								Nestable List
								</a>
							</li>
							<li>
								<a href="ui_typography.html">
								<i class="icon-angle-right"></i>
								Typography / Icons
								</a>
							</li>
							<li>
								<a href="ui_google_maps.html">
								<i class="icon-angle-right"></i>
								Google Maps
								</a>
							</li>
							<li>
								<a href="ui_grid.html">
								<i class="icon-angle-right"></i>
								Grid
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-edit"></i>
							Form Elements
						</a>
						<ul class="sub-menu">
							<li>
								<a href="form_components.html">
								<i class="icon-angle-right"></i>
								Form Components
								</a>
							</li>
							<li>
								<a href="form_layouts.html">
								<i class="icon-angle-right"></i>
								Form Layouts
								</a>
							</li>
							<li>
								<a href="form_validation.html">
								<i class="icon-angle-right"></i>
								Form Validation
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-table"></i>
							Tables
						</a>
						<ul class="sub-menu">
							<li>
								<a href="tables_static.html">
								<i class="icon-angle-right"></i>
								Static Tables
								</a>
							</li>
							<li>
								<a href="tables_dynamic.html">
								<i class="icon-angle-right"></i>
								Dynamic Tables (DataTables)
								</a>
							</li>
							<li>
								<a href="tables_responsive.html">
								<i class="icon-angle-right"></i>
								Responsive Tables
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="charts.html">
							<i class="icon-bar-chart"></i>
							Charts &amp; Statistics
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-folder-open-alt"></i>
							Pages
						</a>
						<ul class="sub-menu">
							<li>
								<a href="login.html">
								<i class="icon-angle-right"></i>
								Login
								</a>
							</li>
							<li>
								<a href="pages_user_profile.html">
								<i class="icon-angle-right"></i>
								User Profile
								</a>
							</li>
							<li>
								<a href="pages_calendar.html">
								<i class="icon-angle-right"></i>
								Calendar
								</a>
							</li>
							<li>
								<a href="pages_invoice.html">
								<i class="icon-angle-right"></i>
								Invoice
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-list-ol"></i>
							4 Level Menu
						</a>
						<ul class="sub-menu">
							<li class="open-default">
								<a href="javascript:void(0);">
									<i class="icon-cogs"></i>
									Item 1
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="open-default">
										<a href="javascript:void(0);">
											<i class="icon-user"></i>
											Sample Link 1
											<span class="arrow"></span>
										</a>
										<ul class="sub-menu">
											<li class="current"><a href="javascript:void(0);"><i class="icon-remove"></i> Sample Link 1</a></li>
											<li><a href="javascript:void(0);"><i class="icon-pencil"></i> Sample Link 1</a></li>
											<li><a href="javascript:void(0);"><i class="icon-edit"></i> Sample Link 1</a></li>
										</ul>
									</li>
									<li><a href="javascript:void(0);"><i class="icon-user"></i>  Sample Link 1</a></li>
									<li><a href="javascript:void(0);"><i class="icon-external-link"></i>  Sample Link 2</a></li>
									<li><a href="javascript:void(0);"><i class="icon-bell"></i>  Sample Link 3</a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);">
									<i class="icon-globe"></i>
									Item 2
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li><a href="javascript:void(0);"><i class="icon-user"></i>  Sample Link 1</a></li>
									<li><a href="javascript:void(0);"><i class="icon-external-link"></i>  Sample Link 1</a></li>
									<li><a href="javascript:void(0);"><i class="icon-bell"></i>  Sample Link 1</a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);">
									<i class="icon-folder-open"></i>
									Item 3
								</a>
							</li>
						</ul>
					</li>
				</ul>
				
				<!-- /Navigation -->
				<div class="sidebar-title">
					<span>Notifications</span>
				</div>
				<ul class="notifications demo-slide-in"> <!-- .demo-slide-in is just for demonstration purposes. You can remove this. -->
					<li style="display: none;"> <!-- style-attr is here only for fading in this notification after a specific time. Remove this. -->
						<div class="col-left">
							<span class="label label-danger"><i class="icon-warning-sign"></i></span>
						</div>
						<div class="col-right with-margin">
							<span class="message">Server <strong>#512</strong> crashed.</span>
							<span class="time">few seconds ago</span>
						</div>
					</li>
					<li style="display: none;"> <!-- style-attr is here only for fading in this notification after a specific time. Remove this. -->
						<div class="col-left">
							<span class="label label-info"><i class="icon-envelope"></i></span>
						</div>
						<div class="col-right with-margin">
							<span class="message"><strong>John</strong> sent you a message</span>
							<span class="time">few second ago</span>
						</div>
					</li>
					<li>
						<div class="col-left">
							<span class="label label-success"><i class="icon-plus"></i></span>
						</div>
						<div class="col-right with-margin">
							<span class="message"><strong>Emma</strong>'s account was created</span>
							<span class="time">4 hours ago</span>
						</div>
					</li>
				</ul>

				<div class="sidebar-widget align-center">
					<div class="btn-group" data-toggle="buttons" id="theme-switcher">
						<label class="btn active">
							<input type="radio" name="theme-switcher" data-theme="bright"><i class="icon-sun"></i> Bright
						</label>
						<label class="btn">
							<input type="radio" name="theme-switcher" data-theme="dark"><i class="icon-moon"></i> Dark
						</label>
					</div>
				</div>

			</div>
			<div id="divider" class="resizeable"></div>
		</div>
		<!-- /Sidebar -->

		<div id="content">
			<div class="container">
				<!-- Breadcrumbs line -->
				<div class="crumbs">
					<ul id="breadcrumbs" class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="index.html">Dashboard</a>
						</li>
						<li class="current">
							<a href="pages_calendar.html" title="">Calendar</a>
						</li>
					</ul>

					<ul class="crumb-buttons">
						<li><a href="charts.html" title=""><i class="icon-signal"></i><span>Statistics</span></a></li>
						<li class="dropdown"><a href="#" title="" data-toggle="dropdown"><i class="icon-tasks"></i><span>Users <strong>(+3)</strong></span><i class="icon-angle-down left-padding"></i></a>
							<ul class="dropdown-menu pull-right">
							<li><a href="form_components.html" title=""><i class="icon-plus"></i>Add new User</a></li>
							<li><a href="tables_dynamic.html" title=""><i class="icon-reorder"></i>Overview</a></li>
							</ul>
						</li>
						<li class="range"><a href="#">
							<i class="icon-calendar"></i>
							<span></span>
							<i class="icon-angle-down"></i>
						</a></li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->

				<!--=== Page Header ===-->
				<div class="page-header">
					<div class="page-title">
						<h3>General</h3>
						<span>Good morning, John!</span>
					</div>

					<!-- Page Stats -->
					<ul class="page-stats">
						<li>
							<div class="summary">
								<span>New orders</span>
								<h3>17,561</h3>
							</div>
							<div id="sparkline-bar" class="graph sparkline hidden-xs">20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
							<!-- Use instead of sparkline e.g. this:
							<div class="graph circular-chart" data-percent="73">73%</div>
							-->
						</li>
						<li>
							<div class="summary">
								<span>My balance</span>
								<h3>$21,561.21</h3>
							</div>
							<div id="sparkline-bar2" class="graph sparkline hidden-xs">20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
						</li>
					</ul>
					<!-- /Page Stats -->
				</div>
				<!-- /Page Header -->

				<!--=== Page Content ===-->
				<!--=== Modals ===-->
				<div class="row">
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Modals</h4>
							</div>
							<div class="widget-content">
								<div class="row">
									<div class="col-md-6">
										<div class="list-group">
											<li class="list-group-item list-group-header">
												<span class="badge">5</span>Advanced Usage with Bootbox
											</li>
											<a href="#" class="list-group-item basic-alert">Basic Alert</a>
											<a href="#" class="list-group-item confirm-dialog">Confirm Dialog</a>
											<a href="#" class="list-group-item multiple-buttons">Multiple Buttons</a>
											<a href="#" class="list-group-item multiple-dialogs">Multiple Dialogs</a>
											<a href="#" class="list-group-item programmatic-close">Programmatic Close</a>
										</div>
										<div class="row">
											<div class="col-md-12">
												<a data-toggle="modal" href="#myModal1" class="btn btn-default btn-block">Modal dialog</a>
											</div>

											<!-- Modal dialog -->
											<div class="modal fade" id="myModal1">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															<h4 class="modal-title">Modal title</h4>
														</div>
														<div class="modal-body">
															One fine body&hellip;
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
															<button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
														</div>
													</div><!-- /.modal-content -->
												</div><!-- /.modal-dialog -->
											</div><!-- /.modal -->

										</div> <!-- /.row -->
									</div> <!-- /.col-md-6 -->

									<div class="col-md-6">
										<strong class="subtitle">Default dialog style</strong>
										<div class="well">
											<div class="modal" style="position: relative; top: auto; left: auto; margin: 0 auto; z-index: 1; width: 100%; box-sizing: border-box; display: inline;">
												<div class="modal-dialog" style="left: 0; width: 100%; padding-top: 0; padding-bottom: 10px;">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															<h4 class="modal-title">Modal title</h4>
														</div>
														<div class="modal-body">
															One fine body&hellip;
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
															<button type="button" class="btn btn-primary">Save changes</button>
														</div>
													</div><!-- /.modal-content -->
												</div><!-- /.modal-dialog -->
											</div><!-- /.modal -->
										</div> <!-- /.well -->
									</div> <!-- /.col-md-6 -->
								</div> <!-- /.row -->
							</div> <!-- /.widget-content -->
						</div> <!-- /.widget .box -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<!-- /Modals -->

				<div class="row">

					<div class="col-md-6">
						<!--=== Notifications ===-->
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Notifications</h4>
							</div>
							<div class="widget-content align-center">
								<div class="alert alert-info fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									Melon is using <a href="http://needim.github.io/noty/" target="_blank">Noty</a> for the notifications.
								</div>

								<p>
									<button class="btn btn-notification" data-layout="top" data-type="alert" data-text="Best check yourself, you're not looking too good.">Alert</button>
									<button class="btn btn-success btn-notification" data-layout="top" data-type="success" data-text="You successfully read this danger alert message.">Success</button>
									<button class="btn btn-danger btn-notification" data-layout="top" data-type="error" data-text="There went something wrong.">Error</button>
								</p>
								<p>
									<button class="btn btn-warning btn-notification" data-layout="top" data-type="warning" data-text="<strong>Warning!</strong><br>Best check yourself, you're not looking too good.">Warning</button>
									<button class="btn btn-primary btn-notification" data-layout="top" data-type="information" data-text="You know that I like you?">Information</button>
									<button class="btn btn-inverse btn-notification" data-layout="top" data-type="confirm" data-text="Do you want to continue?" data-modal="true">Confirm</button>
								</p>
							</div>
						</div>
						<!-- /Notifications -->

						<!--=== Alerts ===-->
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Alerts</h4>

								<div class="toolbar no-padding">
									<div class="btn-group">
										<span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
										<span class="btn btn-xs"><i class="icon-plus"></i> Add</span>
										<span class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
											Manage <i class="icon-angle-down"></i>
										</span>
										<ul class="dropdown-menu pull-right">
											<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
											<li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="widget-content">
								<div class="alert alert-warning fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<strong>Warning!</strong> Your monthly traffic is reaching limit.
								</div>
								<div class="alert alert-success fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<strong>Success!</strong> The customer has been successfully added.
								</div>
								<div class="alert alert-info fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<strong>Info!</strong> You have 17 unread messages.
								</div>
								<div class="alert alert-danger fade in">
									<i class="icon-remove close" data-dismiss="alert"></i>
									<strong>Error!</strong> Your hourly cronjob has failed.
								</div>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
									Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula,
									eget lacinia odio sem nec elit. Cras mattis.</p>
							</div>
						</div>
						<!-- /Alerts -->

						<!--=== Labels ===-->
						<div class="widget box hidden-xs">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Labels</h4>
							</div>
							<div class="widget-content no-padding">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Labels</th>
											<th>Markup</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><span class="label label-default">Default</span></td>
											<td><code>&lt;span class=&quot;label label-default&quot;&gt;Default&lt;/span&gt;</code></td>
										</tr>
										<tr>
											<td><span class="label label-primary">Primary</span></td>
											<td><code>&lt;span class=&quot;label label-primary&quot;&gt;Primary&lt;/span&gt;</code></td>
										</tr>
										<tr>
											<td><span class="label label-success">Success</span></td>
											<td><code>&lt;span class=&quot;label label-success&quot;&gt;Success&lt;/span&gt;</code></td>
										</tr>
										<tr>
											<td><span class="label label-info">Info</span></td>
											<td><code>&lt;span class=&quot;label label-info&quot;&gt;Info&lt;/span&gt;</code></td>
										</tr>
										<tr>
											<td><span class="label label-warning">Warning</span></td>
											<td><code>&lt;span class=&quot;label label-warning&quot;&gt;Warning&lt;/span&gt;</code></td>
										</tr>
										<tr>
											<td><span class="label label-danger">Danger</span></td>
											<td><code>&lt;span class=&quot;label label-danger&quot;&gt;Danger&lt;/span&gt;</code></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- /Labels -->
					</div>

					<div class="col-md-6">

						<!--=== Slim Progress Bars (nprogress) ===-->
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Slim Progress Bars (nprogress)</h4>
							</div>
							<div class="widget-content align-center">
								<p class="padding-top-10px">
									<button class="btn btn-primary btn-nprogress-start">Start</button>
									<button class="btn btn-nprogress-set-40">Set to 40%</button>
									<button class="btn btn-nprogress-inc">Increment by a little</button>
									<button class="btn btn-nprogress-done">Complete</button>
								</p>

								<div id="nprogress-info-msg" class="alert alert-info fade in" style="display: none;">
									<i class="icon-remove close" data-dismiss="alert"></i>
									Now look at the header, you'll see a very slim progress bar. Press "Complete" to hide it again. :-)
								</div>
							</div>
						</div>
						<!-- /Slim Progress Bars (nprogress) -->

						<!--=== Progressbars ===-->
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Progressbars</h4>
							</div>
							<div class="widget-content">
								<div class="alert alert-warning">
									Progress bars use CSS3 gradients, transitions, and animations to achieve all their effects. These features are not supported in IE7-9 or older versions of Firefox. Versions earlier than Internet Explorer 10 and Opera 12 do not support animations.
								</div>
								<h3>Basic</h3>
								<div class="progress">
									<div class="progress-bar progress-bar-info" style="width: 20%"></div>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-success" style="width: 40%"></div>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-warning" style="width: 60%"></div>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-danger" style="width: 80%"></div>
								</div>

								<h3>Striped</h3>
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-info" style="width: 20%"></div>
								</div>
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-success" style="width: 40%"></div>
								</div>
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-warning" style="width: 60%"></div>
								</div>
								<div class="progress progress-striped">
									<div class="progress-bar progress-bar-danger" style="width: 80%"></div>
								</div>

								<h3>Animated</h3>
								<div class="progress progress-striped active">
									<div class="progress-bar progress-bar-info" style="width: 20%"></div>
								</div>
								<div class="progress progress-striped active">
									<div class="progress-bar progress-bar-success" style="width: 40%"></div>
								</div>
								<div class="progress progress-striped active">
									<div class="progress-bar progress-bar-warning" style="width: 60%"></div>
								</div>
								<div class="progress progress-striped active">
									<div class="progress-bar progress-bar-danger" style="width: 80%"></div>
								</div>

								<h3>Stacked</h3>
								<div class="progress">
									<div class="progress-bar progress-bar-success" style="width: 35%"></div>
									<div class="progress-bar progress-bar-warning" style="width: 20%"></div>
									<div class="progress-bar progress-bar-danger" style="width: 10%"></div>
								</div>
							</div>
						</div>
						<!-- /Progressbars -->
					</div>
				</div>

				<!--=== Tooltips & Popovers ===-->
				<div class="row">

					<!--=== Tooltips ===-->
					<div class="col-md-6">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Tooltips</h4>
							</div>
							<div class="widget-content align-center">
								<p class="align-left">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
								<p>
									<button class="btn bs-tooltip" data-placement="top" data-original-title="Tooltip at top">Top</button>
									<button class="btn bs-tooltip" data-placement="left" data-original-title="Tooltip at left">Left</button>
									<button class="btn bs-tooltip" data-placement="right" data-original-title="Tooltip at right">Right</button>
									<button class="btn bs-tooltip" data-placement="bottom" data-original-title="Tooltip at bottom">Bottom</button>
								</p>
							</div>
						</div>
					</div>
					<!-- /Tooltips -->

					<!--=== Popovers ===-->
					<div class="col-md-6">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Popovers</h4>
							</div>
							<div class="widget-content align-center">
								<p class="align-left">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
								<p>
									<button class="btn bs-popover" data-trigger="hover" data-placement="top" data-content="Popover body goes here! Popover body goes here!" data-original-title="Popover at top">Top</button>
									<button class="btn bs-popover" data-trigger="hover" data-placement="left" data-content="Popover body goes here! Popover body goes here!" data-original-title="Popover at left">Left</button>
									<button class="btn bs-popover" data-trigger="hover" data-placement="right" data-content="Popover body goes here! Popover body goes here!" data-original-title="Popover at right">Right</button>
									<button class="btn bs-popover" data-trigger="hover" data-placement="bottom" data-content="Popover body goes here! Popover body goes here!" data-original-title="Popover at bottom">Bottom</button>
								</p>
							</div>
						</div>
					</div>
					<!-- /Popovers -->
				</div> <!-- /.row -->
				<!-- /Tooltips & Popovers -->

				<!--=== Title ===-->
				<div class="row">
					<div class="col-md-12">
						<h5 class="widget-title"><i class="icon-hand-up"></i> Pickers</h5>
					</div>
				</div>
				<!-- /Title -->

				<!--=== Pickers ===-->
				<div class="row">

					<!--=== Date Pickers ===-->
					<div class="col-md-6">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Date Pickers</h4>
							</div>
							<div class="widget-content">
								<form class="form-horizontal row-border" action="#">
									<div class="form-group">
										<label class="col-md-3 control-label">Default datepicker:</label>
										<div class="col-md-9">
											<input type="text" name="regular" class="form-control datepicker">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Fullscreen datepicker:</label>
										<div class="col-md-9">
											<input type="text" name="regular" class="form-control datepicker-fullscreen">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Fullscreen timepicker:</label>
										<div class="col-md-9">
											<input type="text" name="regular" class="form-control timepicker-fullscreen">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Inline fixed:</label>
										<div class="col-md-9">
											<div class="inlinepicker datepicker-fixed"></div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Inline liquid:</label>
										<div class="col-md-9">
											<div class="inlinepicker datepicker-liquid"></div>
										</div>
									</div>
								</form>
							</div> <!-- /.widget-content -->
						</div>
					</div>
					<!-- /Date Pickers -->

					<!--=== Color Pickers ===-->
					<div class="col-md-6">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Color Pickers</h4>
							</div>
							<div class="widget-content">
								<form class="form-horizontal row-border" action="#">
									<div class="form-group">
										<label class="col-md-3 control-label">HEX format:</label>
										<div class="col-md-9">
											<input type="text" name="regular" class="form-control bs-colorpicker" value="#8fff00" data-color-format="hex">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">RGBa format:</label>
										<div class="col-md-9">
											<input type="text" name="regular" class="form-control bs-colorpicker" value="rgb(0,194,255,0.78)" data-color-format="rgba">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Using events:</label>
										<div class="col-md-9">
											<a href="#" class="btn btn-default btn-block" id="colorpicker-event" data-color-format="hex" data-color="#fff">Change background color</a>
										</div>
									</div>
								</form>
							</div> <!-- /.widget-content -->
						</div>
					</div>
					<!-- /Color Pickers -->

				</div>
				<!-- /Page Content -->
			</div>
			<!-- /.container -->

		</div>
	</div>

</body>
</html>