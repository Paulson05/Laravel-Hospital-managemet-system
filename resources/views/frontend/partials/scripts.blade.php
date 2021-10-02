
    <script>

        window.laravelCookieConsent = (function () {

            const COOKIE_VALUE = 1;
            const COOKIE_DOMAIN = 'hms.infyom.com';

            function consentWithCookies() {
                setCookie('laravel_cookie_consent', COOKIE_VALUE, 7300);
                hideCookieDialog();
            }

            function cookieExists(name) {
                return (document.cookie.split('; ').indexOf(name + '=' + COOKIE_VALUE) !== -1);
            }

            function hideCookieDialog() {
                const dialogs = document.getElementsByClassName('js-cookie-consent');

                for (let i = 0; i < dialogs.length; ++i) {
                    dialogs[i].style.display = 'none';
                }
            }

            function setCookie(name, value, expirationInDays) {
                const date = new Date();
                date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
                document.cookie = name + '=' + value
                    + ';expires=' + date.toUTCString()
                    + ';domain=' + COOKIE_DOMAIN
                    + ';path=/'
                    + '';
            }

            if (cookieExists('laravel_cookie_consent')) {
                hideCookieDialog();
            }

            const buttons = document.getElementsByClassName('js-cookie-consent-agree');

            for (let i = 0; i < buttons.length; ++i) {
                buttons[i].addEventListener('click', consentWithCookies);
            }

            return {
                consentWithCookies: consentWithCookies,
                hideCookieDialog: hideCookieDialog
            };
        })();
    </script>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom/custom0487.js?id=d04ddb545fe4d74aca2d"></script>
<script src="assets/js/sweetalert.min.js"></script>
<script src="assets/js/jquery.toast.min.js"></script>
<script src="assets/js/custom/helpersd82a.js?id=596854587928328cf9c5"></script>
<script src="web/js/scripts.js"></script>
<script>
    $(document).ready(function () {
        $('.alert').delay(5000).slideUp(300);
    });
</script>
    <script>
        $(window).on('load', function () {
            $('.owl-carousel').owlCarousel({
                margin: 10,
                autoplay: true,
                loop: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsiveClass: false,
                responsive: {
                    0: {
                        items: 1,
                    },
                    320: {
                        items: 1,
                        margin: 20,
                    },
                    540: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 3,
                    },
                    1024: {
                        items: 3,
                    },
                    2256: {
                        items: 3,
                    },
                },
            });
        });
    </script>
    <script src="web/js/wow.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/lightgallery/dist/js/lightgallery.js"></script>
    <script src="assets/js/web/plugin0fb0.js?id=4a9735720fa809a2a4b4"></script>
