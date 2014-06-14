<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Typography / Icons | Melon - Flat &amp; Responsive Admin Template</title>

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
							<li>
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
							<li class="current">
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
						<h3>Typography / Icons</h3>
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
				<div class="row">
					<div class="col-md-6">
						<!--=== Headings ===-->
						<div class="widget">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Headings</h4>
							</div>
							<div class="widget-content">
								<h1>h1. Heading 1</h1>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>

								<h2>h2. Heading 2</h2>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>

								<h3>h3. Heading 3</h3>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>

								<h4>h4. Heading 4</h4>
								<h5>h5. Heading 5</h5>
								<h6>h6. Heading 6</h6>
							</div>
						</div>
						<!-- /Headings -->

						<!--=== Lists ===-->
						<div class="widget">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Lists</h4>
							</div>
							<div class="widget-content">
								<h3>Unordered</h3>
								<ul>
									<li>Lorem ipsum dolor sit amet</li>
									<li>Consectetur adipiscing elit</li>
									<li>Integer molestie lorem at massa</li>
									<li>Facilisis in pretium nisl aliquet</li>
									<li>Nulla volutpat aliquam velit
										<ul>
											<li>Phasellus iaculis neque</li>
											<li>Purus sodales ultricies</li>
											<li>Vestibulum laoreet porttitor sem</li>
											<li>Ac tristique libero volutpat at</li>
										</ul>
									</li>
									<li>Faucibus porta lacus fringilla vel</li>
									<li>Aenean sit amet erat nunc</li>
									<li>Eget porttitor lorem</li>
								</ul>

								<h3>Ordered</h3>
								<ol>
									<li>Lorem ipsum dolor sit amet</li>
									<li>Consectetur adipiscing elit</li>
									<li>Integer molestie lorem at massa</li>
									<li>Facilisis in pretium nisl aliquet</li>
									<li>Nulla volutpat aliquam velit</li>
									<li>Faucibus porta lacus fringilla vel</li>
									<li>Aenean sit amet erat nunc</li>
									<li>Eget porttitor lorem</li>
								</ol>

								<h3>Unstyled</h3>
								<ul class="list-unstyled">
									<li>Lorem ipsum dolor sit amet</li>
									<li>Consectetur adipiscing elit</li>
									<li>Integer molestie lorem at massa</li>
									<li>Facilisis in pretium nisl aliquet</li>
									<li>Nulla volutpat aliquam velit
										<ul>
											<li>Phasellus iaculis neque</li>
											<li>Purus sodales ultricies</li>
											<li>Vestibulum laoreet porttitor sem</li>
											<li>Ac tristique libero volutpat at</li>
										</ul>
									</li>
									<li>Faucibus porta lacus fringilla vel</li>
									<li>Aenean sit amet erat nunc</li>
									<li>Eget porttitor lorem</li>
								</ul>
							</div>
						</div>
						<!-- /Lists -->

						<!--=== Addresses ===-->
						<div class="widget">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Addresses</h4>
							</div>
							<div class="widget-content">
								<address>
									<strong>Twitter, Inc.</strong><br>
									795 Folsom Ave, Suite 600<br>
									San Francisco, CA 94107<br>
									<abbr title="Phone">P:</abbr> (123) 456-7890
								</address>

								<address>
									<strong>Full Name</strong><br>
									<a href="mailto:#">first.last@example.com</a>
								</address>
							</div>
						</div>
						<!-- /Addresses -->
					</div>

					<div class="col-md-6">
						<!--=== Emphasis Classes ===-->
						<div class="widget">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Emphasis Classes</h4>
							</div>
							<div class="widget-content">
								<p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
								<p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>

								<p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
								<p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
								<p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
								<p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
								<p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
							</div>
						</div>
						<!-- /Emphasis Classes -->

						<!--=== Blockquotes ===-->
						<div class="widget">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Blockquotes</h4>
							</div>
							<div class="widget-content">
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
								</blockquote>

								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
									<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
								</blockquote>

								<blockquote class="pull-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
									<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
								</blockquote>
							</div>
						</div>
						<!-- /Blockquotes -->

						<!--=== Description ===-->
						<div class="widget">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Description</h4>
							</div>
							<div class="widget-content">
								<h3>Vertical Description</h3>
								<dl>
									<dt>Description lists</dt>
									<dd>A description list is perfect for defining terms.</dd>
									<dt>Euismod</dt>
									<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
									<dd>Donec id elit non mi porta gravida at eget metus.</dd>
									<dt>Malesuada porta</dt>
									<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
								</dl>

								<h3>Horizontal Description</h3>
								<dl class="dl-horizontal">
									<dt>Description lists</dt>
									<dd>A description list is perfect for defining terms.</dd>
									<dt>Euismod</dt>
									<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
									<dd>Donec id elit non mi porta gravida at eget metus.</dd>
									<dt>Malesuada porta</dt>
									<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
									<dt>Felis euismod semper eget lacinia</dt>
									<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
								</dl>
							</div>
						</div>
						<!-- /Description -->

						<!--=== Wells ===-->
						<div class="widget">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Wells</h4>
							</div>
							<div class="widget-content">
								<div class="well">
									Look, I'm in a well!
								</div>

								<div class="well well-lg">
									Look, I'm in a large well!
								</div>

								<div class="well well-sm">
									Look, I'm in a small well!
								</div>
							</div>
						</div>
						<!-- /Wells -->
					</div>
				</div>

				<div class="row">
					<!--=== Font Awesome Icons ===-->
					<div class="col-md-12">
						<div class="widget box">
							<div class="widget-header">
								<h4><i class="icon-reorder"></i> Font Awesome Icons</h4>
							</div>
							<div class="widget-content">
								<p class="alert alert-info">For the complete list, see the official page: <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">http://fortawesome.github.io/Font-Awesome/icons/</a></p>
								<div class="row">
									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf000</i>
										icon-glass
										<span class="muted">(&amp;#xf000;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf001</i>
										icon-music
										<span class="muted">(&amp;#xf001;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf002</i>
										icon-search
										<span class="muted">(&amp;#xf002;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf003</i>
										icon-envelope-alt
										<span class="muted">(&amp;#xf003;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf004</i>
										icon-heart
										<span class="muted">(&amp;#xf004;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf005</i>
										icon-star
										<span class="muted">(&amp;#xf005;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf006</i>
										icon-star-empty
										<span class="muted">(&amp;#xf006;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf007</i>
										icon-user
										<span class="muted">(&amp;#xf007;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf008</i>
										icon-film
										<span class="muted">(&amp;#xf008;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf009</i>
										icon-th-large
										<span class="muted">(&amp;#xf009;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf00a</i>
										icon-th
										<span class="muted">(&amp;#xf00a;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf00b</i>
										icon-th-list
										<span class="muted">(&amp;#xf00b;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf00c</i>
										icon-ok
										<span class="muted">(&amp;#xf00c;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf00d</i>
										icon-remove
										<span class="muted">(&amp;#xf00d;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf00e</i>
										icon-zoom-in
										<span class="muted">(&amp;#xf00e;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf010</i>
										icon-zoom-out
										<span class="muted">(&amp;#xf010;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf011</i>
										icon-off
										<span class="muted">(&amp;#xf011;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf012</i>
										icon-signal
										<span class="muted">(&amp;#xf012;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf013</i>
										icon-cog
										<span class="muted">(&amp;#xf013;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf014</i>
										icon-trash
										<span class="muted">(&amp;#xf014;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf015</i>
										icon-home
										<span class="muted">(&amp;#xf015;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf016</i>
										icon-file-alt
										<span class="muted">(&amp;#xf016;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf017</i>
										icon-time
										<span class="muted">(&amp;#xf017;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf018</i>
										icon-road
										<span class="muted">(&amp;#xf018;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf019</i>
										icon-download-alt
										<span class="muted">(&amp;#xf019;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf01a</i>
										icon-download
										<span class="muted">(&amp;#xf01a;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf01b</i>
										icon-upload
										<span class="muted">(&amp;#xf01b;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf01c</i>
										icon-inbox
										<span class="muted">(&amp;#xf01c;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf01d</i>
										icon-play-circle
										<span class="muted">(&amp;#xf01d;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf01e</i>
										icon-repeat
										<span class="muted">(&amp;#xf01e;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf021</i>
										icon-refresh
										<span class="muted">(&amp;#xf021;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf022</i>
										icon-list-alt
										<span class="muted">(&amp;#xf022;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf023</i>
										icon-lock
										<span class="muted">(&amp;#xf023;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf024</i>
										icon-flag
										<span class="muted">(&amp;#xf024;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf025</i>
										icon-headphones
										<span class="muted">(&amp;#xf025;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf026</i>
										icon-volume-off
										<span class="muted">(&amp;#xf026;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf027</i>
										icon-volume-down
										<span class="muted">(&amp;#xf027;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf028</i>
										icon-volume-up
										<span class="muted">(&amp;#xf028;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf029</i>
										icon-qrcode
										<span class="muted">(&amp;#xf029;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf02a</i>
										icon-barcode
										<span class="muted">(&amp;#xf02a;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf02b</i>
										icon-tag
										<span class="muted">(&amp;#xf02b;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf02c</i>
										icon-tags
										<span class="muted">(&amp;#xf02c;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf02d</i>
										icon-book
										<span class="muted">(&amp;#xf02d;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf02e</i>
										icon-bookmark
										<span class="muted">(&amp;#xf02e;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf02f</i>
										icon-print
										<span class="muted">(&amp;#xf02f;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf030</i>
										icon-camera
										<span class="muted">(&amp;#xf030;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf031</i>
										icon-font
										<span class="muted">(&amp;#xf031;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf032</i>
										icon-bold
										<span class="muted">(&amp;#xf032;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf033</i>
										icon-italic
										<span class="muted">(&amp;#xf033;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf034</i>
										icon-text-height
										<span class="muted">(&amp;#xf034;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf035</i>
										icon-text-width
										<span class="muted">(&amp;#xf035;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf036</i>
										icon-align-left
										<span class="muted">(&amp;#xf036;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf037</i>
										icon-align-center
										<span class="muted">(&amp;#xf037;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf038</i>
										icon-align-right
										<span class="muted">(&amp;#xf038;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf039</i>
										icon-align-justify
										<span class="muted">(&amp;#xf039;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf03a</i>
										icon-list
										<span class="muted">(&amp;#xf03a;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf03b</i>
										icon-indent-left
										<span class="muted">(&amp;#xf03b;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf03c</i>
										icon-indent-right
										<span class="muted">(&amp;#xf03c;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf03d</i>
										icon-facetime-video
										<span class="muted">(&amp;#xf03d;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf03e</i>
										icon-picture
										<span class="muted">(&amp;#xf03e;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf040</i>
										icon-pencil
										<span class="muted">(&amp;#xf040;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf041</i>
										icon-map-marker
										<span class="muted">(&amp;#xf041;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf042</i>
										icon-adjust
										<span class="muted">(&amp;#xf042;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf043</i>
										icon-tint
										<span class="muted">(&amp;#xf043;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf044</i>
										icon-edit
										<span class="muted">(&amp;#xf044;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf045</i>
										icon-share
										<span class="muted">(&amp;#xf045;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf046</i>
										icon-check
										<span class="muted">(&amp;#xf046;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf047</i>
										icon-move
										<span class="muted">(&amp;#xf047;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf048</i>
										icon-step-backward
										<span class="muted">(&amp;#xf048;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf049</i>
										icon-fast-backward
										<span class="muted">(&amp;#xf049;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf04a</i>
										icon-backward
										<span class="muted">(&amp;#xf04a;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf04b</i>
										icon-play
										<span class="muted">(&amp;#xf04b;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf04c</i>
										icon-pause
										<span class="muted">(&amp;#xf04c;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf04d</i>
										icon-stop
										<span class="muted">(&amp;#xf04d;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf04e</i>
										icon-forward
										<span class="muted">(&amp;#xf04e;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf050</i>
										icon-fast-forward
										<span class="muted">(&amp;#xf050;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf051</i>
										icon-step-forward
										<span class="muted">(&amp;#xf051;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf052</i>
										icon-eject
										<span class="muted">(&amp;#xf052;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf053</i>
										icon-chevron-left
										<span class="muted">(&amp;#xf053;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf054</i>
										icon-chevron-right
										<span class="muted">(&amp;#xf054;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf055</i>
										icon-plus-sign
										<span class="muted">(&amp;#xf055;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf056</i>
										icon-minus-sign
										<span class="muted">(&amp;#xf056;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf057</i>
										icon-remove-sign
										<span class="muted">(&amp;#xf057;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf058</i>
										icon-ok-sign
										<span class="muted">(&amp;#xf058;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf059</i>
										icon-question-sign
										<span class="muted">(&amp;#xf059;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf05a</i>
										icon-info-sign
										<span class="muted">(&amp;#xf05a;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf05b</i>
										icon-screenshot
										<span class="muted">(&amp;#xf05b;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf05c</i>
										icon-remove-circle
										<span class="muted">(&amp;#xf05c;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf05d</i>
										icon-ok-circle
										<span class="muted">(&amp;#xf05d;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf05e</i>
										icon-ban-circle
										<span class="muted">(&amp;#xf05e;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf060</i>
										icon-arrow-left
										<span class="muted">(&amp;#xf060;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf061</i>
										icon-arrow-right
										<span class="muted">(&amp;#xf061;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf062</i>
										icon-arrow-up
										<span class="muted">(&amp;#xf062;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf063</i>
										icon-arrow-down
										<span class="muted">(&amp;#xf063;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf064</i>
										icon-share-alt
										<span class="muted">(&amp;#xf064;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf065</i>
										icon-resize-full
										<span class="muted">(&amp;#xf065;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf066</i>
										icon-resize-small
										<span class="muted">(&amp;#xf066;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf067</i>
										icon-plus
										<span class="muted">(&amp;#xf067;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf068</i>
										icon-minus
										<span class="muted">(&amp;#xf068;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf069</i>
										icon-asterisk
										<span class="muted">(&amp;#xf069;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf06a</i>
										icon-exclamation-sign
										<span class="muted">(&amp;#xf06a;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf06b</i>
										icon-gift
										<span class="muted">(&amp;#xf06b;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf06c</i>
										icon-leaf
										<span class="muted">(&amp;#xf06c;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf06d</i>
										icon-fire
										<span class="muted">(&amp;#xf06d;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf06e</i>
										icon-eye-open
										<span class="muted">(&amp;#xf06e;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf070</i>
										icon-eye-close
										<span class="muted">(&amp;#xf070;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf071</i>
										icon-warning-sign
										<span class="muted">(&amp;#xf071;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf072</i>
										icon-plane
										<span class="muted">(&amp;#xf072;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf073</i>
										icon-calendar
										<span class="muted">(&amp;#xf073;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf074</i>
										icon-random
										<span class="muted">(&amp;#xf074;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf075</i>
										icon-comment
										<span class="muted">(&amp;#xf075;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf076</i>
										icon-magnet
										<span class="muted">(&amp;#xf076;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf077</i>
										icon-chevron-up
										<span class="muted">(&amp;#xf077;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf078</i>
										icon-chevron-down
										<span class="muted">(&amp;#xf078;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf079</i>
										icon-retweet
										<span class="muted">(&amp;#xf079;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf07a</i>
										icon-shopping-cart
										<span class="muted">(&amp;#xf07a;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf07b</i>
										icon-folder-close
										<span class="muted">(&amp;#xf07b;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf07c</i>
										icon-folder-open
										<span class="muted">(&amp;#xf07c;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf07d</i>
										icon-resize-vertical
										<span class="muted">(&amp;#xf07d;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf07e</i>
										icon-resize-horizontal
										<span class="muted">(&amp;#xf07e;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf080</i>
										icon-bar-chart
										<span class="muted">(&amp;#xf080;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf081</i>
										icon-twitter-sign
										<span class="muted">(&amp;#xf081;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf082</i>
										icon-facebook-sign
										<span class="muted">(&amp;#xf082;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf083</i>
										icon-camera-retro
										<span class="muted">(&amp;#xf083;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf084</i>
										icon-key
										<span class="muted">(&amp;#xf084;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf085</i>
										icon-cogs
										<span class="muted">(&amp;#xf085;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf086</i>
										icon-comments
										<span class="muted">(&amp;#xf086;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf087</i>
										icon-thumbs-up-alt
										<span class="muted">(&amp;#xf087;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf088</i>
										icon-thumbs-down-alt
										<span class="muted">(&amp;#xf088;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf089</i>
										icon-star-half
										<span class="muted">(&amp;#xf089;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf08a</i>
										icon-heart-empty
										<span class="muted">(&amp;#xf08a;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf08b</i>
										icon-signout
										<span class="muted">(&amp;#xf08b;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf08c</i>
										icon-linkedin-sign
										<span class="muted">(&amp;#xf08c;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf08d</i>
										icon-pushpin
										<span class="muted">(&amp;#xf08d;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf08e</i>
										icon-external-link
										<span class="muted">(&amp;#xf08e;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf090</i>
										icon-signin
										<span class="muted">(&amp;#xf090;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf091</i>
										icon-trophy
										<span class="muted">(&amp;#xf091;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf092</i>
										icon-github-sign
										<span class="muted">(&amp;#xf092;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf093</i>
										icon-upload-alt
										<span class="muted">(&amp;#xf093;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf094</i>
										icon-lemon
										<span class="muted">(&amp;#xf094;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf095</i>
										icon-phone
										<span class="muted">(&amp;#xf095;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf096</i>
										icon-check-empty
										<span class="muted">(&amp;#xf096;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf097</i>
										icon-bookmark-empty
										<span class="muted">(&amp;#xf097;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf098</i>
										icon-phone-sign
										<span class="muted">(&amp;#xf098;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf099</i>
										icon-twitter
										<span class="muted">(&amp;#xf099;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf09a</i>
										icon-facebook
										<span class="muted">(&amp;#xf09a;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf09b</i>
										icon-github
										<span class="muted">(&amp;#xf09b;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf09c</i>
										icon-unlock
										<span class="muted">(&amp;#xf09c;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf09d</i>
										icon-credit-card
										<span class="muted">(&amp;#xf09d;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf09e</i>
										icon-rss
										<span class="muted">(&amp;#xf09e;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0a0</i>
										icon-hdd
										<span class="muted">(&amp;#xf0a0;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0a1</i>
										icon-bullhorn
										<span class="muted">(&amp;#xf0a1;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0a2</i>
										icon-bell
										<span class="muted">(&amp;#xf0a2;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0a3</i>
										icon-certificate
										<span class="muted">(&amp;#xf0a3;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0a4</i>
										icon-hand-right
										<span class="muted">(&amp;#xf0a4;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0a5</i>
										icon-hand-left
										<span class="muted">(&amp;#xf0a5;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0a6</i>
										icon-hand-up
										<span class="muted">(&amp;#xf0a6;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0a7</i>
										icon-hand-down
										<span class="muted">(&amp;#xf0a7;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0a8</i>
										icon-circle-arrow-left
										<span class="muted">(&amp;#xf0a8;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0a9</i>
										icon-circle-arrow-right
										<span class="muted">(&amp;#xf0a9;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0aa</i>
										icon-circle-arrow-up
										<span class="muted">(&amp;#xf0aa;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0ab</i>
										icon-circle-arrow-down
										<span class="muted">(&amp;#xf0ab;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0ac</i>
										icon-globe
										<span class="muted">(&amp;#xf0ac;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0ad</i>
										icon-wrench
										<span class="muted">(&amp;#xf0ad;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0ae</i>
										icon-tasks
										<span class="muted">(&amp;#xf0ae;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0b0</i>
										icon-filter
										<span class="muted">(&amp;#xf0b0;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0b1</i>
										icon-briefcase
										<span class="muted">(&amp;#xf0b1;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0b2</i>
										icon-fullscreen
										<span class="muted">(&amp;#xf0b2;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0c0</i>
										icon-group
										<span class="muted">(&amp;#xf0c0;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0c1</i>
										icon-link
										<span class="muted">(&amp;#xf0c1;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0c2</i>
										icon-cloud
										<span class="muted">(&amp;#xf0c2;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0c3</i>
										icon-beaker
										<span class="muted">(&amp;#xf0c3;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0c4</i>
										icon-cut
										<span class="muted">(&amp;#xf0c4;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0c5</i>
										icon-copy
										<span class="muted">(&amp;#xf0c5;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0c6</i>
										icon-paper-clip
										<span class="muted">(&amp;#xf0c6;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0c7</i>
										icon-save
										<span class="muted">(&amp;#xf0c7;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0c8</i>
										icon-sign-blank
										<span class="muted">(&amp;#xf0c8;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0c9</i>
										icon-reorder
										<span class="muted">(&amp;#xf0c9;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0ca</i>
										icon-list-ul
										<span class="muted">(&amp;#xf0ca;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0cb</i>
										icon-list-ol
										<span class="muted">(&amp;#xf0cb;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0cc</i>
										icon-strikethrough
										<span class="muted">(&amp;#xf0cc;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0cd</i>
										icon-underline
										<span class="muted">(&amp;#xf0cd;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0ce</i>
										icon-table
										<span class="muted">(&amp;#xf0ce;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0d0</i>
										icon-magic
										<span class="muted">(&amp;#xf0d0;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0d1</i>
										icon-truck
										<span class="muted">(&amp;#xf0d1;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0d2</i>
										icon-pinterest
										<span class="muted">(&amp;#xf0d2;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0d3</i>
										icon-pinterest-sign
										<span class="muted">(&amp;#xf0d3;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0d4</i>
										icon-google-plus-sign
										<span class="muted">(&amp;#xf0d4;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0d5</i>
										icon-google-plus
										<span class="muted">(&amp;#xf0d5;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0d6</i>
										icon-money
										<span class="muted">(&amp;#xf0d6;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0d7</i>
										icon-caret-down
										<span class="muted">(&amp;#xf0d7;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0d8</i>
										icon-caret-up
										<span class="muted">(&amp;#xf0d8;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0d9</i>
										icon-caret-left
										<span class="muted">(&amp;#xf0d9;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0da</i>
										icon-caret-right
										<span class="muted">(&amp;#xf0da;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0db</i>
										icon-columns
										<span class="muted">(&amp;#xf0db;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0dc</i>
										icon-sort
										<span class="muted">(&amp;#xf0dc;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0dd</i>
										icon-sort-down
										<span class="muted">(&amp;#xf0dd;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0de</i>
										icon-sort-up
										<span class="muted">(&amp;#xf0de;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0e0</i>
										icon-envelope
										<span class="muted">(&amp;#xf0e0;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0e1</i>
										icon-linkedin
										<span class="muted">(&amp;#xf0e1;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0e2</i>
										icon-undo
										<span class="muted">(&amp;#xf0e2;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0e3</i>
										icon-legal
										<span class="muted">(&amp;#xf0e3;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0e4</i>
										icon-dashboard
										<span class="muted">(&amp;#xf0e4;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0e5</i>
										icon-comment-alt
										<span class="muted">(&amp;#xf0e5;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0e6</i>
										icon-comments-alt
										<span class="muted">(&amp;#xf0e6;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0e7</i>
										icon-bolt
										<span class="muted">(&amp;#xf0e7;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0e8</i>
										icon-sitemap
										<span class="muted">(&amp;#xf0e8;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0e9</i>
										icon-umbrella
										<span class="muted">(&amp;#xf0e9;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0ea</i>
										icon-paste
										<span class="muted">(&amp;#xf0ea;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0eb</i>
										icon-lightbulb
										<span class="muted">(&amp;#xf0eb;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0ec</i>
										icon-exchange
										<span class="muted">(&amp;#xf0ec;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0ed</i>
										icon-cloud-download
										<span class="muted">(&amp;#xf0ed;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0ee</i>
										icon-cloud-upload
										<span class="muted">(&amp;#xf0ee;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0f0</i>
										icon-user-md
										<span class="muted">(&amp;#xf0f0;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0f1</i>
										icon-stethoscope
										<span class="muted">(&amp;#xf0f1;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0f2</i>
										icon-suitcase
										<span class="muted">(&amp;#xf0f2;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0f3</i>
										icon-bell-alt
										<span class="muted">(&amp;#xf0f3;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0f4</i>
										icon-coffee
										<span class="muted">(&amp;#xf0f4;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0f5</i>
										icon-food
										<span class="muted">(&amp;#xf0f5;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0f6</i>
										icon-file-text-alt
										<span class="muted">(&amp;#xf0f6;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0f7</i>
										icon-building
										<span class="muted">(&amp;#xf0f7;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0f8</i>
										icon-hospital
										<span class="muted">(&amp;#xf0f8;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0f9</i>
										icon-ambulance
										<span class="muted">(&amp;#xf0f9;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0fa</i>
										icon-medkit
										<span class="muted">(&amp;#xf0fa;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0fb</i>
										icon-fighter-jet
										<span class="muted">(&amp;#xf0fb;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0fc</i>
										icon-beer
										<span class="muted">(&amp;#xf0fc;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0fd</i>
										icon-h-sign
										<span class="muted">(&amp;#xf0fd;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf0fe</i>
										icon-plus-sign-alt
										<span class="muted">(&amp;#xf0fe;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf100</i>
										icon-double-angle-left
										<span class="muted">(&amp;#xf100;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf101</i>
										icon-double-angle-right
										<span class="muted">(&amp;#xf101;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf102</i>
										icon-double-angle-up
										<span class="muted">(&amp;#xf102;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf103</i>
										icon-double-angle-down
										<span class="muted">(&amp;#xf103;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf104</i>
										icon-angle-left
										<span class="muted">(&amp;#xf104;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf105</i>
										icon-angle-right
										<span class="muted">(&amp;#xf105;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf106</i>
										icon-angle-up
										<span class="muted">(&amp;#xf106;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf107</i>
										icon-angle-down
										<span class="muted">(&amp;#xf107;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf108</i>
										icon-desktop
										<span class="muted">(&amp;#xf108;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf109</i>
										icon-laptop
										<span class="muted">(&amp;#xf109;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf10a</i>
										icon-tablet
										<span class="muted">(&amp;#xf10a;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf10b</i>
										icon-mobile-phone
										<span class="muted">(&amp;#xf10b;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf10c</i>
										icon-circle-blank
										<span class="muted">(&amp;#xf10c;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf10d</i>
										icon-quote-left
										<span class="muted">(&amp;#xf10d;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf10e</i>
										icon-quote-right
										<span class="muted">(&amp;#xf10e;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf110</i>
										icon-spinner
										<span class="muted">(&amp;#xf110;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf111</i>
										icon-circle
										<span class="muted">(&amp;#xf111;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf112</i>
										icon-reply
										<span class="muted">(&amp;#xf112;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf113</i>
										icon-github-alt
										<span class="muted">(&amp;#xf113;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf114</i>
										icon-folder-close-alt
										<span class="muted">(&amp;#xf114;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf115</i>
										icon-folder-open-alt
										<span class="muted">(&amp;#xf115;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf116</i>
										icon-expand-alt
										<span class="muted">(&amp;#xf116;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf117</i>
										icon-collapse-alt
										<span class="muted">(&amp;#xf117;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf118</i>
										icon-smile
										<span class="muted">(&amp;#xf118;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf119</i>
										icon-frown
										<span class="muted">(&amp;#xf119;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf11a</i>
										icon-meh
										<span class="muted">(&amp;#xf11a;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf11b</i>
										icon-gamepad
										<span class="muted">(&amp;#xf11b;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf11c</i>
										icon-keyboard
										<span class="muted">(&amp;#xf11c;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf11d</i>
										icon-flag-alt
										<span class="muted">(&amp;#xf11d;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf11e</i>
										icon-flag-checkered
										<span class="muted">(&amp;#xf11e;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf120</i>
										icon-terminal
										<span class="muted">(&amp;#xf120;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf121</i>
										icon-code
										<span class="muted">(&amp;#xf121;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf122</i>
										icon-reply-all
										<span class="muted">(&amp;#xf122;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf122</i>
										icon-mail-reply-all
										<span class="muted">(&amp;#xf122;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf123</i>
										icon-star-half-empty
										<span class="muted">(&amp;#xf123;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf124</i>
										icon-location-arrow
										<span class="muted">(&amp;#xf124;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf125</i>
										icon-crop
										<span class="muted">(&amp;#xf125;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf126</i>
										icon-code-fork
										<span class="muted">(&amp;#xf126;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf127</i>
										icon-unlink
										<span class="muted">(&amp;#xf127;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf128</i>
										icon-question
										<span class="muted">(&amp;#xf128;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf129</i>
										icon-info
										<span class="muted">(&amp;#xf129;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf12a</i>
										icon-exclamation
										<span class="muted">(&amp;#xf12a;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf12b</i>
										icon-superscript
										<span class="muted">(&amp;#xf12b;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf12c</i>
										icon-subscript
										<span class="muted">(&amp;#xf12c;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf12d</i>
										icon-eraser
										<span class="muted">(&amp;#xf12d;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf12e</i>
										icon-puzzle-piece
										<span class="muted">(&amp;#xf12e;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf130</i>
										icon-microphone
										<span class="muted">(&amp;#xf130;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf131</i>
										icon-microphone-off
										<span class="muted">(&amp;#xf131;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf132</i>
										icon-shield
										<span class="muted">(&amp;#xf132;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf133</i>
										icon-calendar-empty
										<span class="muted">(&amp;#xf133;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf134</i>
										icon-fire-extinguisher
										<span class="muted">(&amp;#xf134;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf135</i>
										icon-rocket
										<span class="muted">(&amp;#xf135;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf136</i>
										icon-maxcdn
										<span class="muted">(&amp;#xf136;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf137</i>
										icon-chevron-sign-left
										<span class="muted">(&amp;#xf137;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf138</i>
										icon-chevron-sign-right
										<span class="muted">(&amp;#xf138;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf139</i>
										icon-chevron-sign-up
										<span class="muted">(&amp;#xf139;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf13a</i>
										icon-chevron-sign-down
										<span class="muted">(&amp;#xf13a;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf13b</i>
										icon-html5
										<span class="muted">(&amp;#xf13b;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf13c</i>
										icon-css3
										<span class="muted">(&amp;#xf13c;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf13d</i>
										icon-anchor
										<span class="muted">(&amp;#xf13d;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf13e</i>
										icon-unlock-alt
										<span class="muted">(&amp;#xf13e;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf140</i>
										icon-bullseye
										<span class="muted">(&amp;#xf140;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf141</i>
										icon-ellipsis-horizontal
										<span class="muted">(&amp;#xf141;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf142</i>
										icon-ellipsis-vertical
										<span class="muted">(&amp;#xf142;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf143</i>
										icon-rss-sign
										<span class="muted">(&amp;#xf143;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf144</i>
										icon-play-sign
										<span class="muted">(&amp;#xf144;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf145</i>
										icon-ticket
										<span class="muted">(&amp;#xf145;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf146</i>
										icon-minus-sign-alt
										<span class="muted">(&amp;#xf146;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf147</i>
										icon-check-minus
										<span class="muted">(&amp;#xf147;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf148</i>
										icon-level-up
										<span class="muted">(&amp;#xf148;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf149</i>
										icon-level-down
										<span class="muted">(&amp;#xf149;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf14a</i>
										icon-check-sign
										<span class="muted">(&amp;#xf14a;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf14b</i>
										icon-edit-sign
										<span class="muted">(&amp;#xf14b;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf14c</i>
										icon-external-link-sign
										<span class="muted">(&amp;#xf14c;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf14d</i>
										icon-share-sign
										<span class="muted">(&amp;#xf14d;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf14e</i>
										icon-compass
										<span class="muted">(&amp;#xf14e;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf150</i>
										icon-collapse
										<span class="muted">(&amp;#xf150;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf151</i>
										icon-collapse-top
										<span class="muted">(&amp;#xf151;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf152</i>
										icon-expand
										<span class="muted">(&amp;#xf152;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf153</i>
										icon-eur
										<span class="muted">(&amp;#xf153;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf154</i>
										icon-gbp
										<span class="muted">(&amp;#xf154;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf155</i>
										icon-usd
										<span class="muted">(&amp;#xf155;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf156</i>
										icon-inr
										<span class="muted">(&amp;#xf156;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf157</i>
										icon-jpy
										<span class="muted">(&amp;#xf157;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf158</i>
										icon-cny
										<span class="muted">(&amp;#xf158;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf159</i>
										icon-krw
										<span class="muted">(&amp;#xf159;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf15a</i>
										icon-btc
										<span class="muted">(&amp;#xf15a;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf15b</i>
										icon-file
										<span class="muted">(&amp;#xf15b;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf15c</i>
										icon-file-text
										<span class="muted">(&amp;#xf15c;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf15d</i>
										icon-sort-by-alphabet
										<span class="muted">(&amp;#xf15d;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf15e</i>
										icon-sort-by-alphabet-alt
										<span class="muted">(&amp;#xf15e;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf160</i>
										icon-sort-by-attributes
										<span class="muted">(&amp;#xf160;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf161</i>
										icon-sort-by-attributes-alt
										<span class="muted">(&amp;#xf161;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf162</i>
										icon-sort-by-order
										<span class="muted">(&amp;#xf162;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf163</i>
										icon-sort-by-order-alt
										<span class="muted">(&amp;#xf163;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf164</i>
										icon-thumbs-up
										<span class="muted">(&amp;#xf164;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf165</i>
										icon-thumbs-down
										<span class="muted">(&amp;#xf165;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf166</i>
										icon-youtube-sign
										<span class="muted">(&amp;#xf166;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf167</i>
										icon-youtube
										<span class="muted">(&amp;#xf167;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf168</i>
										icon-xing
										<span class="muted">(&amp;#xf168;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf169</i>
										icon-xing-sign
										<span class="muted">(&amp;#xf169;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf16a</i>
										icon-youtube-play
										<span class="muted">(&amp;#xf16a;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf16b</i>
										icon-dropbox
										<span class="muted">(&amp;#xf16b;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf16c</i>
										icon-stackexchange
										<span class="muted">(&amp;#xf16c;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf16d</i>
										icon-instagram
										<span class="muted">(&amp;#xf16d;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf16e</i>
										icon-flickr
										<span class="muted">(&amp;#xf16e;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf170</i>
										icon-adn
										<span class="muted">(&amp;#xf170;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf171</i>
										icon-bitbucket
										<span class="muted">(&amp;#xf171;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf172</i>
										icon-bitbucket-sign
										<span class="muted">(&amp;#xf172;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf173</i>
										icon-tumblr
										<span class="muted">(&amp;#xf173;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf174</i>
										icon-tumblr-sign
										<span class="muted">(&amp;#xf174;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf175</i>
										icon-long-arrow-down
										<span class="muted">(&amp;#xf175;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf176</i>
										icon-long-arrow-up
										<span class="muted">(&amp;#xf176;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf177</i>
										icon-long-arrow-left
										<span class="muted">(&amp;#xf177;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf178</i>
										icon-long-arrow-right
										<span class="muted">(&amp;#xf178;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf179</i>
										icon-apple
										<span class="muted">(&amp;#xf179;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf17a</i>
										icon-windows
										<span class="muted">(&amp;#xf17a;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf17b</i>
										icon-android
										<span class="muted">(&amp;#xf17b;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf17c</i>
										icon-linux
										<span class="muted">(&amp;#xf17c;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf17d</i>
										icon-dribbble
										<span class="muted">(&amp;#xf17d;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf17e</i>
										icon-skype
										<span class="muted">(&amp;#xf17e;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf180</i>
										icon-foursquare
										<span class="muted">(&amp;#xf180;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf181</i>
										icon-trello
										<span class="muted">(&amp;#xf181;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf182</i>
										icon-female
										<span class="muted">(&amp;#xf182;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf183</i>
										icon-male
										<span class="muted">(&amp;#xf183;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf184</i>
										icon-gittip
										<span class="muted">(&amp;#xf184;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf185</i>
										icon-sun
										<span class="muted">(&amp;#xf185;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf186</i>
										icon-moon
										<span class="muted">(&amp;#xf186;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf187</i>
										icon-archive
										<span class="muted">(&amp;#xf187;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf188</i>
										icon-bug
										<span class="muted">(&amp;#xf188;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf189</i>
										icon-vk
										<span class="muted">(&amp;#xf189;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf18a</i>
										icon-weibo
										<span class="muted">(&amp;#xf18a;)</span>
									</div>

									<div class="col-md-4">
										<i class="icon-fixed-width">&#xf18b</i>
										icon-renren
										<span class="muted">(&amp;#xf18b;)</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Page Content -->
			</div>
			<!-- /.container -->

		</div>
	</div>

</body>
</html>