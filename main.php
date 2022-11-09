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
        <div id="page-wrapper">
            <div id="page-inner">
                <?php include($page); ?>
                <nav class="navbar navbar-default navbar-cls-top text-center" style="margin-top: 5%">
                    <div style="color:white;">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> by Rapid Parcel Express. All Rights Reserved.
                    </div>
                </nav>
            </div>
        </div>
    </div>

<?php include ('includes/footer.php'); ?>