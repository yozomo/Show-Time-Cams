<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Show Time Cams</title>
        <meta name="description" content="Live Broadcasting">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css">
		<!--[if IE]>
		  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/favicon.ico">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
<div id="wrap">
<nav>
	<div id="sticker">
        <?php
            foreach ($broadcast_status->result() as $status) {
                if ($status->broadcast == '0') {
                    $broadcastnow = FALSE;
                } else {
                    $broadcastnow = TRUE;
                }
            }
            $display_name = $this->session->userdata('display_name');
            $logged_in = $this->session->userdata('logged_in');
        ?>
        <div class="row">
            <div class="<?php if ((isset($broadcastnow)) && (!empty($broadcastnow))) { echo "col-xs-6 col-sm-4 col-md-4"; } else { echo "col-xs-6 col-md-4"; } ?>">
                <p class="text-left"><a href="/" title="Show Time Cams - Home">Show Time Cams</a></p>
            </div>
            <?php
                if ((isset($broadcastnow)) && (!empty($broadcastnow))) {
            ?>
                <div class="col-xs-6 col-sm-4 col-md-4">
                    <p>Broadcast now!</p>
                </div>
            <?php } ?>
            <div class="<?php if ((isset($broadcastnow)) && (!empty($broadcastnow))) { echo "col-xs-6 col-sm-4 col-md-4"; } else { echo "col-xs-6 col-md-4"; } ?>">
                <?php
                    if ((isset($display_name)) && (isset($logged_in)) && (!empty($display_name)) && (!empty($logged_in))) {
                ?>
                <p class="text-right">
                    <a href="/" title="Home">Home</a> | 
                    <a href="/account" title="Account"><?php echo $display_name; ?></a> | 
                    <a href="/login/logout" title="">Log out</a>
                </p>
                <?php } else { ?>
                <p class="text-right">
                    <a href="/" title="Home">Home</a> | 
                    <a href="/login" title="Log in">Log in</a> | 
                    <a href="/signup" title="Signup">Signup</a>
                </p>
                <?php } ?>
            </div>
        </div>
	</div>
</nav>