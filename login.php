<?php include('includes/header.php');?>
<?php
    $_SESSION['errLogin'] = '';
    if($_POST){
        extract($_POST);
        $tblquery = "SELECT * FROM admin WHERE username = :un AND password = :pw";
        $tblvalue = array(
            ':un' => htmlspecialchars($un),
            ':pw' => htmlspecialchars($pw)
        );
        $login = $connect->tbl_select($tblquery, $tblvalue);
        if($login){
            foreach($login as $data){
                extract($data);
                $_SESSION['name'] = $name;
                $_SESSION['username'] = $username;
                
                echo "<script>  window.location='admin/dashboard' </script>";
                
            }
        }else{
            $_SESSION['errLogin'] = "Invalid Login Credential";
        }
    }

?>
<title>Login | Rapid Parcel Express</title>
<div class="container-fluid login">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 login-box p-5">
            <form method="POST">
                <span class="title pb-5">Admin Login</span>
                
                <div class="text-danger pb-2">
                    <?php echo $_SESSION['errLogin']; ?>
                </div>

                <div class="div mb-5">
                    <input type="text" name="un" placeholder="Enter Admin Username" required>
                    <span class="focus"></span>
                    <span class="symbol">
                        <span class="inr"></span>
                    </span>
                </div>

                <div class="div mb-2">
                    <input type="password" name="pw" placeholder="Password" required>
                    <span class="focus"></span>
                    <span class="symbol">
                        <span class="inr2"></span>
                    </span>
                </div>

                <div class="div">
                    <input class="checkbox" id="ckb1" type="checkbox" name="remember-me">
                    <label class="label-checkbox" for="ckb1">Remember me</label>
                </div>

                <div class="btn-div pt-5">
                    <button class="login-form-btn" type="submit" name="login">
                        Login
                    </button>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<?php include('includes/footer.php');?>