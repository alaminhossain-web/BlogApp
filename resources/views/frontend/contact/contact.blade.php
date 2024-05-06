@extends('frontend.master')

@section('title','Contact')

@section('body')
<!-- start breadcrumb area -->
    <!-- rts breadcrumba area start -->
    <div class="echo-breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- bread crumb inner wrapper -->
                    <div class="breadcrumb-inner text-center">
                        <div class="meta">
                            <a href="#" class="prev">ECHO /</a>
                            <a href="#" class="next">CONTACT US</a>
                        </div>
                        <h1 class="title">Contact US</h1>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumba area end -->
    <!-- end breadcrumb area -->

    <!-- Start Contact Area -->
    <section class="echo-contact-area">
        <div class="echo-contact-content">
            <div class="container">
                <div class="echo-contact-full-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="echo-contact-input-field">
                                <div class="echo-contact-title">
                                    <h2 class="text-capitalize">General Customer Care & Technical Support</h2>
                                </div>
                                <div class="echo-contact-sub-title">
                                    <p>Ornare arcu dui vivamus arcu felis. Nunc sed id semper risus in hendrerit gravida rutrum quisque. Nullam eget felis eget nunc lobortis mattis </p>
                                </div>
                                <div class="echo-main-contact-form">
                                    <div id="form-messages"></div>
                                    <form id="contact-form" method="post" action="https://html.themewant.com/echo/mailer.php">
                                        <div class="echo-contact-input-flexing">
                                            <div class="echo-contact-name echo-df-input">
                                                <input name="name" type="text" placeholder="Name" required>
                                            </div>
                                            <div class="echo-contact-email echo-df-input">
                                                <input name="email" type="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="echo-contact-input-flexing echo-df-input">
                                            <div class="echo-contact-number echo-df-input">
                                                <input name="phone" type="text" placeholder="Phone" required>
                                            </div>
                                            <div class="echo-contact-url echo-df-input">
                                                <input name="subject" type="text" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="echo-contact-texting-fild">
                                            <textarea name="message" placeholder="Write your message here..."></textarea>
                                        </div>
                                        <button type="submit" class="echo-contact-btn">Submit Now <i class="fa-regular fa-arrow-right"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="echo-info">
                                <div class="echo-address">
                                    <h6 class="text-capitalize">Location</h6>
                                    <span>The Business Centre132,  New York 12401. United States</span>
                                </div>
                                <div class="echo-address">
                                    <h6 class="text-capitalize">Email</h6>
                                    <span>Info@yourmail.com</span>
                                </div>
                                <div class="echo-address">
                                    <h6 class="text-capitalize">Phone</h6>
                                    <span>(00) 123 456 789 99</span>
                                </div>
                                <div class="echo-map">
                                    <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.288851207937!2d90.47855065!3d23.798243149999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1663151706353!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->


    
@endsection