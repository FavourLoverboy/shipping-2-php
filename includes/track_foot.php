        <!-- .footer-area start -->
        <div class="footer-area">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 footer-t">
                            <div class="footer-logo">
                                <img src="img/logo.png" alt="">
                            </div>
                            <p>
                                Get one step ahead of your competition and reaching your customers with the strength of the <?php echo $_SESSION['comName']; ?> Service network.
                            </p>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 footer-t">
                            <div class="footer-link">
                                <h3>Quick Link</h3>
                                <ul>
                                    <li>
                                        <a href="https://<?php echo $_SESSION['comELink']; ?>about">About Us</a>
                                    </li>
                                    <li>
                                        <a href="https://<?php echo $_SESSION['comELink']; ?>service">Service</a>
                                    </li>
                                    <li>
                                        <a href="https://<?php echo $_SESSION['comELink']; ?>contact">Contact</a>
                                    </li>
                                    <li>
                                        <a href="https://portal.<?php echo $_SESSION['comELink']; ?>tracking">Track Shipment</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
            
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="footer-widget instagram">
                                <h3>socials</h3>
                                <div class="social">
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom-content">
                        <div class="row">
                            <div class="col-12">
                                <span>
                                    <?php echo 'Copyright &copy;' . $_SESSION['year'] . ' All rights reserved || Powered By ' . $_SESSION['comName'] . ' ICT.'; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .footer-area end -->
        
        <!-- All JavaScript files
        ================================================== -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Plugins for this template -->
        <script src="js/jquery-plugin-collection.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/slickslider.js"></script>

        <!-- Custom script for this template -->
        <script src="js/track.js"></script>
    
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart= new Date();
            (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/619a94e36bb0760a4943a256/1fl1tb6lc';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script-->

        <script type="text/javascript">
            function move() {
            var data = "100";
            var elem = document.getElementById("myBar");
            var width = 1;
            var id = setInterval(frame, 10);

                function frame() {
                    if (width >= data) {
                        clearInterval(id);
                    } else {
                        width++;
                        elem.style.width = width + '%';
                    }
                }
            }
            window.setTimeout(move, 7000);
        </script>
    </body> 
</html> 
