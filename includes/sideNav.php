<nav class="navbar-default navbar-side sidebar-mobile" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="assets/find_user.png" class="user-image img-responsive"/>
            </li>
            <li>
                <p style="color: white;padding:5px;"><?php echo $_SESSION['name']; ?></p>
            </li>
            <li>
                <a  href="admin/dashboard" style="background-color: #00001a;"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
            </li>
            <li>
                <a href="admin/dashboard">View Deliveries</a>
            </li>        
            <li>
                <a onclick="sideBarDropDown()">Manage<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/add_package">Add Package</a>
                    </li>
                    <li>
                        <a href="admin/track_package">Track Package</a>
                    </li>
                    <li>
                        <a href="admin/add_admin">Add admin</a>
                    </li>
                    <li>
                        <a href="admin/send_message">Send Message</a>
                    </li>
                    <li>
                        <a href="logout">logout</a>
                    </li>
                </ul>
            </li>   	
        </ul>  
    </div>
</nav>