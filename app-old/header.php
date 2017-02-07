<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
		<!--build:css css/styles.min.css-->
		<link rel="stylesheet" href="js/lib/mobilemenu/component.css">
		<link rel="stylesheet" href="js/lib/wow/animate.css">
		<link rel="stylesheet" href="js/lib/select2/select2.min.css">
		<link rel="stylesheet" href="js/lib/select2/select2-bootstrap.min.css">
		
		
		<link rel="stylesheet" href="css/styles.css">
		<!--endbuild-->
		
		<!--build:js js/first.min.js -->
		<script src="js/lib/modernizr-2.8.3.min.js"></script>
		<!--endbuild-->
	</head>
	<?php 
		$page = $_SERVER['REQUEST_URI'];
		$fullUrl = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		if ( $page == '/' ) {
			$pageClass = 'home';
		} else {
			$pageClass = 'inner-page';
		}
	?>

	<body class="<?php echo $pageClass; ?> typeset cbp-spmenu-push">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
		<header>
			<div class="gradient"></div>
			<nav class="navbar">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" aria-expanded="false" aria-controls="navbar" id="navbar-toggle">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/">
						<img src="images/logo.png" alt="logo" class="hidden-xs img-responsive">
						<img src="images/logo-mobile.png" alt="logo" class="visible-xs img-responsive">
						</a>
					</div>
					<div id="mobilemenu" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
					    <ul class="nav navbar-nav navbar-right">
							<li><a href="/state.php">Change Your Name</a></li>
							<li><a href="/page-sidebar.php">How Does it Work?</a></li>
							<li><a href="/">Login</a></li>
					    </ul>
					</div>
					
					<div id="navbar" class="navbar-collapse collapse">
					    <ul class="nav navbar-nav navbar-right">
							<li><a class="move-line" href="/state.php">Change Your Name</a></li>
							<li><a class="move-line" href="/page-sidebar.php">How Does it Work?</a></li>
							<li><a class="move-line" href="/">Login</a></li>
					    </ul>
					</div><!--/.navbar-collapse -->
				</div>
			</nav>
			<?php 
			if ( $page == '/' ) {
				include 'includes/hero.php';
			} else { 
				include 'includes/page-header.php'; 
			} ?>
		</header>