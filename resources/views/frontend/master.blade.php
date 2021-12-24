<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    @include('frontend.partials.head')
    </head>
<body>
<div class="infy-loader d-none" id="overlay-screen-lock">
    <div id="infyLoader" class="infy-loader">
    <svg class="loader-position" width="150px" height="75px" viewBox="0 0 187.3 93.7"
         preserveAspectRatio="xMidYMid meet">
        <path stroke="#00c6ff" id="outline" fill="none" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"
              stroke-miterlimit="10"
              d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 				c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z"/>
        <path id="outline-bg" opacity="0.05" fill="none" stroke="#f5981c" stroke-width="5" stroke-linecap="round"
              stroke-linejoin="round" stroke-miterlimit="10"
              d="				M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 				c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z"/>
    </svg>
</div>
</div>
<div class="container-fluid nav-bg">
    <div class="row">
        <div class="container">
           @include('frontend.partials.navbar')
        </div>
    </div>
</div>

   @yield('body')

@include('frontend.partials.footer')
    <span class="footer-links">Copyright &copy 2021 All rights reserved | <a
                href="index.html">InfyHMS</a></span>
</div>
<div id="hms-top"><i class="fa fa-angle-double-up"></i></div>
<div style="height: 80px; clear: both;">&nbsp;</div>
<div class="js-cookie-consent cookie-consent">

    <span class="cookie-consent__message">
        Your experience on this site will be improved by allowing cookies.
    </span>

    <button class="js-cookie-consent-agree cookie-consent__agree">
        Allow cookies
    </button>

</div>

    @include('frontend.partials.scripts')
</body>


</html>
