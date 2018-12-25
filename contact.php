
<?php 
$page_title='Stofa: Contact';
include("./includes/header.php");?>
<!-- Mini Cart Wrap Start -->                      
<div class="mini-cart-wrap">

    <!-- Mini Cart Top -->
    <div class="mini-cart-top">    
    
        <button class="close-cart">Close Cart<i class="icofont icofont-close"></i></button>
        
    </div>

    <!-- Mini Cart Products -->
    <ul class="mini-cart-products">
        <li>
            <a class="image"><img src="assets/images/product/product-1.png" alt="Product"></a>
            <div class="content">
                <a href="single-product.php" class="title">Waxon Note Book Pro 5</a>
                <span class="price">Price: $295</span>
                <span class="qty">Qty: 02</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
        <li>
            <a class="image"><img src="assets/images/product/product-2.png" alt="Product"></a>
            <div class="content">
                <a href="single-product.php" class="title">Aquet Drone D 420</a>
                <span class="price">Price: $275</span>
                <span class="qty">Qty: 01</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
        <li>
            <a class="image"><img src="assets/images/product/product-3.png" alt="Product"></a>
            <div class="content">
                <a href="single-product.php" class="title">Game Station X 22</a>
                <span class="price">Price: $295</span>
                <span class="qty">Qty: 01</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
    </ul>

    <!-- Mini Cart Bottom -->
    <div class="mini-cart-bottom">    
    
        <h4 class="sub-total">Total: <span>$1160</span></h4>

        <div class="button">
            <a href="checkout.php">CHECK OUT</a>
        </div>
        
    </div>

</div><!-- Mini Cart Wrap End --> 

<!-- Cart Overlay -->
<div class="cart-overlay"></div>

<!-- Page Banner Section Start -->
<div class="page-banner-section section">
    <div class="page-banner-wrap row row-0 d-flex align-items-center ">

        <!-- Page Banner -->
        <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
            <div class="page-banner">
                <h1>Contact</h1>
                <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita</p>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Banner -->
        <div class="col-lg-4 col-md-6 col-12 order-lg-1">
            <div class="banner"><a href="#"><img src="assets/images/banner/banner-15.jpg" alt="Banner"></a></div>
        </div>

        <!-- Banner -->
        <div class="col-lg-4 col-md-6 col-12 order-lg-3">
            <div class="banner"><a href="#"><img src="assets/images/banner/banner-14.jpg" alt="Banner"></a></div>
        </div>

    </div>
</div><!-- Page Banner Section End -->

<!-- Contact Section Start -->
<div class="contact-section section mt-90 mb-40">
    <div class="container">
        <div class="row">
            
            <!-- Contact Page Title -->
            <div class="contact-page-title col mb-40">
                <h1>Hi, Howdy <br>Let’s Connect us</h1>
            </div>
        </div>
        <div class="row">
            
            <!-- Contact Tab List -->
            <div class="col-lg-4 col-12 mb-50">
                <ul class="contact-tab-list nav">
                    <li><a class="active" data-toggle="tab" href="#contact-address">Contact us</a></li>
                    <li><a data-toggle="tab" href="#contact-form-tab">Leave us a message</a></li>
                    <li><a data-toggle="tab" href="#store-location">All Store location</a></li>
                </ul>
            </div>
            
            <!-- Contact Tab Content -->
            <div class="col-lg-8 col-12">
                <div class="tab-content">
                    
                    <!-- Contact Address Tab -->
                    <div class="tab-pane fade show active row d-flex" id="contact-address">
                       
                        <div class="col-lg-4 col-md-6 col-12 mb-50">
                            <div class="contact-information">
                                <h4>Address</h4>
                                <p>Gueliz, Marrakech, MoroccoLorem Ipsum text</p>
                            </div>
                        </div>
                       
                        <div class="col-lg-4 col-md-6 col-12 mb-50">
                            <div class="contact-information">
                                <h4>Phone</h4>
                                <p><a href="tel:01234567890">+212 639 65 31 87</a><a href="tel:01234567891">+212 636 49 32 81</a></p>
                            </div>
                        </div>
                       
                        <div class="col-lg-4 col-md-6 col-12 mb-50">
                            <div class="contact-information">
                                <h4>Web</h4>
                                <p><a href="mailto:contact@stofa.com">contact@stofa.com</a><a href="#">ask@stofa.com</a></p>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Contact Form Tab -->
                    <div class="tab-pane fade row d-flex" id="contact-form-tab">
                        <div class="col">
                            
                            <form id="contact-form" action="" method="post" class="contact-form mb-50">
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-25">
                                        <label for="first_name">First Name*</label>
                                        <input id="first_name" type="text" name="first_name">
                                    </div>
                                    <div class="col-md-6 col-12 mb-25">
                                        <label for="last_name">Last Name*</label>
                                        <input id="last_name" type="text" name="last_name">
                                    </div>
                                    <div class="col-md-6 col-12 mb-25">
                                        <label for="email_address">Email*</label>
                                        <input id="email_address" type="email" name="email_address">
                                    </div>
                                    <div class="col-md-6 col-12 mb-25">
                                        <label for="phone_number">Phone</label>
                                        <input id="phone_number" type="text" name="phone_number">
                                    </div>
                                    <div class="col-12 mb-25">
                                        <label for="message">Message*</label>
                                        <textarea id="message" name="message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" value="SEND NOW">
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                            
                        </div>
                    </div>
                    
                    <!-- Contact Stores Tab -->
                    <div class="tab-pane fade row d-flex" id="store-location">
            
                        <div class="col-md-6 col-12 mb-50">
                            <div class="single-store">
                                <h3>STOFA Australia</h3>
                                <p>Gueliz, Marrakech, MoroccoLorem Ipsum is simply dummy text.</p>
                                <p><a href="tel:01234567890">+212 639 65 31 87</a> / <a href="tel:01234567891">+212 636 49 32 81</a></p>
                                <p><a href="mailto:contact@stofa.com">contact@stofa.com</a> / <a href="#">ask@stofa.com</a></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-12 mb-50">
                            <div class="single-store">
                                <h3>STOFA England</h3>
                                <p>Gueliz, Marrakech, MoroccoLorem Ipsum is simply dummy text.</p>
                                <p><a href="tel:01234567890">+212 639 65 31 87</a> / <a href="tel:01234567891">+212 636 49 32 81</a></p>
                                <p><a href="mailto:contact@stofa.com">contact@stofa.com</a> / <a href="#">ask@stofa.com</a></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-12 mb-50">
                            <div class="single-store">
                                <h3>STOFA Germany</h3>
                                <p>Gueliz, Marrakech, MoroccoLorem Ipsum is simply dummy text.</p>
                                <p><a href="tel:01234567890">+212 639 65 31 87</a> / <a href="tel:01234567891">+212 636 49 32 81</a></p>
                                <p><a href="mailto:contact@stofa.com">contact@stofa.com</a> / <a href="#">ask@stofa.com</a></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-12 mb-50">
                            <div class="single-store">
                                <h3>STOFA France</h3>
                                <p>Gueliz, Marrakech, MoroccoLorem Ipsum is simply dummy text.</p>
                                <p><a href="tel:01234567890">+212 639 65 31 87</a> / <a href="tel:01234567891">+212 636 49 32 81</a></p>
                                <p><a href="mailto:contact@stofa.com">contact@stofa.com</a> / <a href="#">ask@stofa.com</a></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-12 mb-50">
                            <div class="single-store">
                                <h3>STOFA Canada</h3>
                                <p>Gueliz, Marrakech, MoroccoLorem Ipsum is simply dummy text.</p>
                                <p><a href="tel:01234567890">+212 639 65 31 87</a> / <a href="tel:01234567891">+212 636 49 32 81</a></p>
                                <p><a href="mailto:contact@stofa.com">contact@stofa.com</a> / <a href="#">ask@stofa.com</a></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-12 mb-50">
                            <div class="single-store">
                                <h3>STOFA Denmark</h3>
                                <p>Gueliz, Marrakech, MoroccoLorem Ipsum is simply dummy text.</p>
                                <p><a href="tel:01234567890">+212 639 65 31 87</a> / <a href="tel:01234567891">+212 636 49 32 81</a></p>
                                <p><a href="mailto:contact@stofa.com">contact@stofa.com</a> / <a href="#">ask@stofa.com</a></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Contact Section End -->

<!-- Subscribe Section Start -->
<div class="subscribe-section section bg-gray pt-55 pb-55">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Mailchimp Subscribe Content Start -->
            <div class="col-lg-6 col-12 mb-15 mt-15">
                <div class="subscribe-content">
                    <h2>SUBSCRIBE <span>OUR NEWSLETTER</span></h2>
                    <h2><span>TO GET LATEST</span> PRODUCT UPDATE</h2>
                </div>
            </div><!-- Mailchimp Subscribe Content End -->
            
            
            <!-- Mailchimp Subscribe Form Start -->
            <div class="col-lg-6 col-12 mb-15 mt-15">
                
				<form class="subscribe-form" action="#">
					<input type="email" autocomplete="off" placeholder="Enter your email here" />
					<button >subscribe</button>
				</form>
				<!-- mailchimp-alerts Start -->
				<div class="mailchimp-alerts text-centre">
					<div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
					<div class="mailchimp-success"></div><!-- mailchimp-success end -->
					<div class="mailchimp-error"></div><!-- mailchimp-error end -->
				</div><!-- mailchimp-alerts end -->
                
            </div><!-- Mailchimp Subscribe Form End -->
            
        </div>
    </div>
</div><!-- Subscribe Section End -->
<?php include("./includes/footer.php");?>