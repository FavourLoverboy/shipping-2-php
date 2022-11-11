<?php
    session_start();
    if(!$_SESSION['username']){
        header('location: login.php');
    }
?>

<?php include('includes/header.php'); ?>

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include('includes/topNav.php'); ?>
        <?php include('includes/sideNav.php'); ?>
        <?php include('includes/title.php'); ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <?php include($page); ?>
                <nav class="navbar navbar-default navbar-cls-top text-center" style="margin-top: 5%">
                    <div style="color:white;">
                        <?php echo 'Copyright &copy;' . $_SESSION['year'] . ' by ' . $_SESSION['comName'] . '. All Rights Reserved.'; ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>

<?php include ('includes/footer.php'); ?>