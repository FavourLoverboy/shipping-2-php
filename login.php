<?php include('includes/header.php');?>

<div class="container-fluid login">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 login-box p-5">
            <form>
                <span class="title pb-5">Admin Login</span>

                <div class="div mb-5">
                    <input type="text" placeholder="Enter Admin Username">
                    <span class="focus"></span>
                    <span class="symbol">
                        <span class="inr"></span>
                    </span>
                </div>

                <div class="div mb-2">
                    <input type="password" placeholder="Password">
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