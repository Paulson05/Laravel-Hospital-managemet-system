


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/now-ui-dashboard-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 May 2021 17:59:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>


    @include('backend.template.partials.head')

</head>

<body class="login-page sidebar-mini ">
<style>
    #background_image{
        background-image: url({{asset('/backend/assets/img/bg14.jpg')}}) !important;
    }
</style>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->




<!-- Navbar -->
@include('backend.template.partials.navbar')
<!-- End Navbar -->



<div class="wrapper wrapper-full-page ">

















    <div id="background_image" class="full-page login-page section-image" filter-color="black" data-image="" style="background-image: url(../../assets/img/bg14.jpg) !important;">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="content">
            <div class="container">
                <div class="col-md-4 ml-auto mr-auto">
                    <form class="form" method="post" action="{{route('doctor.post')}}">

                        @csrf
                        <div class="card card-login card-plain">

                            <div class="card-header ">
                                <div class="logo-container">
                                    <img src="{{asset('assets/img/now-logo.png')}}" alt="">
                                </div>
                            </div>
                            <h2 class="text-center">Login</h2>

                            <div class="card-body ">







                                <div class="input-group no-border form-control-lg">
                                <span class="input-group-prepend">
                                  <div class="input-group-text">
                                    <i class="now-ui-icons users_circle-08"></i>
                                  </div>
                                </span>
                                    <input type="text" name="email" class="form-control" placeholder="email">
                                </div>

                                <div class="input-group no-border form-control-lg">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="now-ui-icons text_caps-small"></i>
                                        </div>
                                    </div>
                                    <input type="password" name="password" placeholder="Password..." class="form-control">
                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12 ">
                                    <button type="submit" class="btn btn-primary">login</button>
                                </div>
                            </div>




                        </div>



                    </form>
                </div>
            </div>
        </div>
        <footer class="footer" >

            <div class=" container-fluid ">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com/">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com/">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com/">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright" id="copyright">
                    &copy; <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>, Designed by <a href="https://www.invisionapp.com/" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a>.
                </div>
            </div>



        </footer>

    </div>


</div>

<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Background</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors text-center">
                        <span class="badge filter badge-yellow" data-color="yellow"></span>
                        <span class="badge filter badge-blue" data-color="blue"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange active" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>


            <li class="header-title">
                Sidebar Mini
            </li>
            <li class="adjustments-line">

                <div class="togglebutton switch-sidebar-mini">
                    <span class="label-switch">OFF</span>
                    <input type="checkbox" name="checkbox" checked class="bootstrap-switch"
                           data-on-label=""
                           data-off-label=""
                    />
                    <span class="label-switch label-right">ON</span>
                </div>
            </li>

            <li class="button-container">
                <a href="https://www.creative-tim.com/product/now-ui-dashboard-pro" target="_blank" class="btn btn-primary btn-block btn-round">Buy Now</a>
                <a href="https://demos.creative-tim.com/now-ui-dashboard-pro/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
                    <i class="now-ui-icons files_single-copy-04"></i>
                    Documentation
                </a>
                <a href="https://www.creative-tim.com/product/now-ui-dashboard" target="_blank" class="btn btn-info btn-block btn-round">
                    <i class="now-ui-icons files_single-copy-04"></i>
                    Get Free Demo!
                </a>
            </li>




            <li class="header-title">Thank you for 95 shares!</li>

            <li class="button-container text-center">
                <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
                <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
                <br>
                <br>
                <a class="github-button" href="https://github.com/creativetimofficial/ct-now-ui-dashboard-pro" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
            </li>
        </ul>
    </div>
</div>


@include('backend.template.partials.scripts')

</body>


<!-- Mirrored from demos.creative-tim.com/now-ui-dashboard-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 May 2021 17:59:47 GMT -->
</html>
