<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0;background-color:#00001a;">
    <div class="navbar-header">
        <a class="navbar-brand" href="dashboard" style="font-size: 18px; background-color:#00001a;">
            <?php echo $_SESSION['comName']; ?>
        </a> 
    </div>
    <div class="laptop-topnav" style="color: white; padding-right: 15px; float:right; font-size: 16px;">
        <a href="logout" class="btn btn-default square-btn-adjust bg-white">Logout</a>
    </div>
    <div onclick="mobileSideBarDropDown()" class="mobile-topnav" style="color: white; float:right; font-size: 16px; padding-right: 10px;">
        <button type="button" class="btn btn-default square-btn-adjust bg-white p-1" style="width: 30px;">
            <span>
                <i class="fa fa-bars" aria-hidden="true"></i>
            </span>
        </button>
    </div>
</nav>