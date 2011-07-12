<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>HyperSpin Cabinet</title>
        <link rel="stylesheet" href="css/master.css" type="text/css" media="screen" charset="utf-8">
		<script src="includes/jquery-1.6.2.min.js"></script>
		<script src="includes/lightbox.js"></script>
        <?php include('includes/conf.php'); ?>
        <?php include('includes/functions.php'); ?>
    </head>
    <body>
        <div id="outer">
            <div id="header">
                <h1 id="siteTitle"><?php echo $owner; ?></h1>
            </div>
            <div id="container">
                <div id="content">
                    <?php //listRoms(); ?>
					<?php //listOfEmulatorsURL(); ?>
					
					<h1>This is my webpage...</h1>
					<a href="#" class="lightbox">Open Lightbox</a>
 
					<div class="backdrop"></div>
					<div class="box">
						<div class="close">
							x
						</div>
						<div id="lightContent">
							Hello World!
						</div>
					</div>
					<hr /><br />
					<a href="#content12" rel="nofollow">Open Lightbox Content</a>
					<div id="content12">This will be the content inside of the lightbox</div>
                </div>
                <div id="sidebar">
                    <div id="serverStatus">
                        <h3>Server Status</h3>
                        <ul>
                            <li>HyperSpin: <?php checkHyperSpin(); ?></li>
                        </ul>
                    </div>
                    <div id="emulators">
                        <h3>Emulators</h3>
                        <ul>
                            <?php listOfEmulators(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="footer">
                Footer
            </div>
        </div>
    </body>
</html>