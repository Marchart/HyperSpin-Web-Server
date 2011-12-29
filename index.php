<!DOCTYPE HTML>
<html>
    <?php include('inc/head.php'); ?>
    <body>
        <div id="outer">
            <div id="header">
                <h1 id="siteTitle"><?php echo $owner; ?></h1>
            </div>
            <div id="container">
                <div id="content">
                    <?php listRoms(); ?>
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