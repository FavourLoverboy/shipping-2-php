<?php
    session_start();
    if(!$_SESSION['username']){
        header('location: login.php');
    }
?>

<?php include('includes/header.php'); ?>

    <!-- Page Wrapper -->
    

<?php include ('includes/footer.php'); ?>