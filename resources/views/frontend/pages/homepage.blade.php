@extends('frontend.master')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="landing-header">
                <div class="row">
                    <div class="col-lg-6 order-lg-2 col-12">
                        <div class="header_image">
                            <img src="web/img/header-img.jpg">
                        </div>
                    </div>
                    <div class="col-lg-6 header-text order-lg-1 col-12">
                        <p class="welcome-text mb-5 wow fadeInUp"
                           data-wow-duration="0.4s">Welcome to <br> <span
                                    class="heading-name">InfyHMS</span> <span
                                    class="heading-text">Manage your Hospital&#039;s day to day operations digitally with ease and effortlessly.</span>
                        </p>
                        <a href="https://codecanyon.net/item/infyhms-smart-hospital-management-system/26344507"
                           class="header-contact-button wow bounceIn" data-wow-delay="0.4s"
                           target="_blank">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container features">
    <h4 class="m-0 p-0 text-center section-heading">Features</h4>
    <div class="row">
        <div class="col-lg-3 col-md-6 my-5 text-center features-block wow fadeInUp" data-wow-delay=".2s">
            <i class="fas fa-ambulance d-flex justify-content-center mx-auto hover-transitions ambulance"></i>
            <h5 class="pt-3 text-uppercase font-weight-bold">EMERGENCY SERVICES</h5>
            <p class="text-muted">We are providing advanced emergency services. We have well-equipped emergency and trauma center with facilities.</p>
        </div>
        <div class="col-lg-3 col-md-6 my-5 text-center features-block wow fadeInUp" data-wow-delay=".3s">
            <i class="fas fa-user-md d-flex justify-content-center mx-auto hover-transitions qualified-doctor"></i>
            <h5 class="pt-3 text-uppercase font-weight-bold">QUALIFIED DOCTORS</h5>
            <p class="text-muted">Our team of pathologists, microbiologists and clinical laboratory scientists are always ready to help you with your laboratory needs.</p>
        </div>
        <div class="col-lg-3 col-md-6 my-5 text-center features-block wow fadeInUp" data-wow-delay=".4s">
            <i class="fas fa-stethoscope d-flex justify-content-center mx-auto hover-transitions  outdoor-checkup"></i>
            <h5 class="pt-3 text-uppercase font-weight-bold">OUTDOORS CHECKUP</h5>
            <p class="text-muted">Our doctors are always ready for outdoor checkup in an emergency. we have different types of charges as per checkup.</p>
        </div>
        <div class="col-lg-3 col-md-6  my-5 text-center features-block wow fadeInUp" data-wow-delay=".5s">
            <i class="fas fa-history d-flex justify-content-center mx-auto hover-transitions service-clock"></i>
            <h5 class="pt-3 text-uppercase font-weight-bold">24 HOURS SERVICE</h5>
            <p class="text-muted">Our clinic provides extensive medical support and healthcare services 24/7.</p>
        </div>
    </div>
</div>


<div class="container pt-5" id="departments">
    <h4 class="m-0 p-0 text-center section-heading">Departments</h4>
    <div class="row mt-3 content-icons">
        <div class="col-12">
            <div class="row">
                                        <div class="col-lg-4 col-6 my-5 text-center contents-box hover-transitions wow fadeInUp department-item">
                        <i class="fas fa-stethoscope d-flex justify-content-center mx-auto hover-transitions"></i>
                        <h5 class="pt-3 text-muted">Cardiologists</h5>
                    </div>
                                        <div class="col-lg-4 col-6 my-5 text-center contents-box hover-transitions wow fadeInUp department-item">
                        <i class="fas fa-stethoscope d-flex justify-content-center mx-auto hover-transitions"></i>
                        <h5 class="pt-3 text-muted">Endocrinologists</h5>
                    </div>
                                        <div class="col-lg-4 col-6 my-5 text-center contents-box hover-transitions wow fadeInUp department-item">
                        <i class="fas fa-stethoscope d-flex justify-content-center mx-auto hover-transitions"></i>
                        <h5 class="pt-3 text-muted">Allergists</h5>
                    </div>
                                        <div class="col-lg-4 col-6 my-5 text-center contents-box hover-transitions wow fadeInUp department-item">
                        <i class="fas fa-stethoscope d-flex justify-content-center mx-auto hover-transitions"></i>
                        <h5 class="pt-3 text-muted">Dermatologists</h5>
                    </div>
                                        <div class="col-lg-4 col-6 my-5 text-center contents-box hover-transitions wow fadeInUp department-item">
                        <i class="fas fa-stethoscope d-flex justify-content-center mx-auto hover-transitions"></i>
                        <h5 class="pt-3 text-muted">Ophthalmologists</h5>
                    </div>
                                        <div class="col-lg-4 col-6 my-5 text-center contents-box hover-transitions wow fadeInUp department-item">
                        <i class="fas fa-stethoscope d-flex justify-content-center mx-auto hover-transitions"></i>
                        <h5 class="pt-3 text-muted">Nephrologists</h5>
                    </div>
                                </div>
        </div>
    </div>
</div>


<div class="container mt-5" id="hmsFacilities">
    <h4 class="m-0 p-0 text-center section-heading">MISCELLANEOUS FACILITIES OF INFYHMS</h4>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="facility-block-one">
                        <li class="facility-item">Host In Your Own Secure Server.</li>
                        <li class="facility-item">No Monthly Or Yearly Fees.</li>
                        <li class="facility-item">24/7 Customer Support</li>
                        <li class="facility-item">Multi Language System</li>
                        <li class="facility-item">Admin and Customer Has separate UI and Login</li>
                        <li class="facility-item">Email and Sms gateway adding for marketing</li>
                        <li class="facility-item">Complete Hospital Management Solution</li>
                        <li class="facility-item">Prescription Management System</li>
                        <li class="facility-item">Doctor Management System</li>
                        <li class="facility-item">Insurance Management System</li>
                        <li class="facility-item">Billing Management System</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="facility-block-two">
                        <li class="facility-item">Role Based Permission Setup System</li>
                        <li class="facility-item">Multiple Email and SMS gateway added</li>
                        <li class="facility-item">Human Resource System</li>
                        <li class="facility-item">Complete Bed Management System</li>
                        <li class="facility-item">Medication and Visits System</li>
                        <li class="facility-item">Case Manager Management System</li>
                        <li class="facility-item">Patient Separate Login and Appointment System</li>
                        <li class="facility-item">Hospital Enquiry System</li>
                        <li class="facility-item">Pharmacy Management System</li>
                        <li class="facility-item">Appointment Management System</li>
                        <li class="facility-item">Investigation Reports</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid start-using-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 justify-content-center d-flex flex-column start-using-content">
                <p class="start-using-heading wow fadeInUp"
                   data-wow-delay=".2s">Start Using InfyHMS now.
                </p>
                <a class="get-started-btn wow bounceInUp" data-wow-delay=".3s"
                   href="login.html">Get Started</a>
            </div>
            <div class="col-lg-7 start-using-image">
                <img src="web/img/dashboard.png" class="w-100 wow fadeInUp" data-wow-delay=".4s">
            </div>
        </div>
    </div>
</div>


        <div class="container testimonials" id="testimonials">
        <h4 class="text-center section-heading">Testimonials</h4>
        <div class="testimonial-wrapper mt-3">
            <div class="col-lg-12 col-12">
                <div class="owl-carousel owl-theme">
                                                <div class="item">
                            <div class="testimonial-item d-flex align-items-center flex-column">
                                <img src="http://ui-avatars.com/api/?name=aaaaaaaaaaaaaaaa&amp;size=100&amp;rounded=true&amp;color=fff&amp;background=42c9af" class="testimonial-image"
                                     alt="Testimonial Image">
                                <div class="testimonial-content">
                                    <h3 class="testimonial-name">aaaaaaaaaaaaaaaa</h3>
                                                                                <span>dddddddddddddddddddddddddd</span>
                                                                        </div>
                            </div>
                        </div>
                                                <div class="item">
                            <div class="testimonial-item d-flex align-items-center flex-column">
                                <img src="http://ui-avatars.com/api/?name=Wahyu%20Rizki%20Budiyanto&amp;size=100&amp;rounded=true&amp;color=fff&amp;background=7d68f0" class="testimonial-image"
                                     alt="Testimonial Image">
                                <div class="testimonial-content">
                                    <h3 class="testimonial-name">Wahyu Rizki Budiyanto</h3>
                                                                                <span>sfdsdfsdf</span>
                                                                        </div>
                            </div>
                        </div>
                                        </div>
            </div>
        </div>
    </div>

<div class="container footer-block">
<div class="row">
    <div class="col-lg-6 footer-followus">
        <span>FOLLOW US</span>
        <ul class="text-muted footer-links">
            <li><a href="http://twitter.com/infyom" target="_blank">Twitter</a></li>
            <li><a href="http://www.facebook.com/infyom" target="_blank">Facebook</a></li>
            <li><a href="http://in.linkedin.com/company/infyom-technologies"
                   target="_blank">Linkedin</a></li>
            <li><a href="http://github.com/InfyOmLabs" target="_blank">Github</a></li>
        </ul>
    </div>
    <div class="col-lg-6">
        <span>Made with by InfyOm Technologies</span>
        <p>We are a group of creative nerds making awesome stuff for Web &amp; Mobile. We just love to
            contribute to open source technologies. We always try to build something which helps developers to
            save their time. so they can spend a bit more time with their friends &amp; family.</p>
    </div>
</div>
</div>
@endsection