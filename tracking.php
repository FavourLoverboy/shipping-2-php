<?php include('includes/track_head.php');?>

    <!-- .breadcumb-area start -->
    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Tracking</h2>
                        <ul>
                            <li>
                                <a href="home">Home</a>
                            </li>
                            <li>
                                <span>Tracking</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
 
    <div class="contact-page-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="contact-page-item">
                        <div class="contact-area">
                            <h2>Enter Your Tracking Number to track Your Cargo</h2>
                            <div class="contact-form">
                                <form method="POST" action="">
                                    <div class="">
                                        <input type="text" name="tracking_no" id="name" class="form-control" placeholder="Your Tracking Code" required="">
                                    </div>
                                    <div class="submit-btn-wrapper">
                                        <button type="submit" name="track" class="theme-btn-s3">Track Your Cargo</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>                
        </div>
    </div>
    <!-- .contact-page-area end -->

    <!-- start track-section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2>Subscribe Our Newsletter</h2>
                    <p>for more updates and informations.</p>
                </div>
                <div class="col-lg-8">
                    <div class="newsletter">
                        <div class="newsletter-form">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <form>
                                        <input type="text" class="form-control" placeholder="Email">
                                    </form> 
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <button type="submit">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end track-section -->

<?php include('includes/track_foot.php');?>