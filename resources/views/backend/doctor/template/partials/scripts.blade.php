
<!--   Core JS Files   -->
<script src="{{asset('../backend/assets/js/core/jquery.min.js')}}" ></script>
<script src="{{asset('../backend/assets/js/core/popper.min.js')}}" ></script>


<script src="{{asset('../backend/assets/js/core/bootstrap.min.js')}}" ></script>


<script src="{{asset('../backend/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}" ></script>

<script src="{{asset('../backend/assets/js/plugins/moment.min.js')}}"></script>

<script src="{{asset('../backendassets/js/handlebar.min.js')}}"></script>


<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset('../backend/assets/js/plugins/bootstrap-switch.js')}}"></script>

<!--  Plugin for Sweet Alert -->
<script src="{{asset('../backend/assets/js/plugins/sweetalert2.min.js')}}"></script>

<!-- Forms Validations Plugin -->
<script src="{{asset('../backend/assets/js/plugins/jquery.validate.min.js')}}"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{asset('../backend/assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>

<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{asset('../backend/assets/js/plugins/bootstrap-selectpicker.js')}}" ></script>

<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{asset('../backend/assets/js/plugins/bootstrap-datetimepicker.js')}}"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="{{asset('../backend/assets/js/plugins/jquery.dataTables.min.js')}}"></script>

<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{asset('../backend/assets/js/plugins/bootstrap-tagsinput.js')}}"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('../backend/assets/js/plugins/jasny-bootstrap.min.js')}}"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{asset('../backend/assets/js/plugins/fullcalendar.min.js')}}"></script>

<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{asset('../backend/assets/js/plugins/jquery-jvectormap.js')}}"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('../backend/assets/js/plugins/nouislider.min.js')}}" ></script>


<!--  Google Maps Plugin    -->

<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGat1sgDZ-3y6fFe6HD7QUziVC6jlJNog"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="../../../buttons.github.io/buttons.js"></script>


<!-- Chart JS -->
<script src="{{asset('../backend/assets/js/plugins/chartjs.min.js')}}"></script>

<!--  Notifications Plugin    -->


<script src="{{asset('../backend/assets/js/plugins/bootstrap-notify.js')}}"></script>



<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc --><script src="../assets/js/now-ui-dashboard.minaa26.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('../backend/assets/demo/demo.js')}}"></script>


<!-- Sharrre libray -->
<script src="{{asset('../backend/assets/demo/jquery.sharrre.js')}}"></script>

<script>
    $(document).ready(function(){


        $('#facebook').sharrre({
            share: {
                facebook: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            click: function(api, options){
                api.simulateClick();
                api.openPopup('facebook');
            },
            template: '<i class="fab fa-facebook-f"></i> Facebook',
            url: 'https://demos.creative-tim.com/now-ui-dashboard-pro/examples/dashboard.html'
        });

        $('#google').sharrre({
            share: {
                googlePlus: true
            },
            enableCounter: false,
            enableHover: false,
            enableTracking: true,
            click: function(api, options){
                api.simulateClick();
                api.openPopup('googlePlus');
            },
            template: '<i class="fab fa-google-plus"></i> Google',
            url: 'https://demos.creative-tim.com/now-ui-dashboard-pro/examples/dashboard.html'
        });

        $('#twitter').sharrre({
            share: {
                twitter: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            buttons: { twitter: {via: 'CreativeTim'}},
            click: function(api, options){
                api.simulateClick();
                api.openPopup('twitter');
            },
            template: '<i class="fab fa-twitter"></i> Twitter',
            url: 'https://demos.creative-tim.com/now-ui-dashboard-pro/examples/dashboard.html'
        });



        // Facebook Pixel Code Don't Delete
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','../../../connect.facebook.net/en_US/fbevents.js');

        try{
            fbq('init', '111649226022273');
            fbq('track', "PageView");

        }catch(err) {
            console.log('Facebook Track Error:', err);
        }

    });
</script>

<script>
    $(document).ready(function(){
        $().ready(function(){
            $sidebar = $('.sidebar');
            $sidebar_img_container = $sidebar.find('.sidebar-background');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');
            sidebar_mini_active = true;

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            // if( window_width > 767 && fixed_plugin_open == 'Dashboard' ){
            //     if($('.fixed-plugin .dropdown').hasClass('show-dropdown')){
            //         $('.fixed-plugin .dropdown').addClass('show');
            //     }
            //
            // }

            $('.fixed-plugin a').click(function(event){
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if($(this).hasClass('switch-trigger')){
                    if(event.stopPropagation){
                        event.stopPropagation();
                    }
                    else if(window.event){
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .background-color span').click(function(){
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if($sidebar.length != 0){
                    $sidebar.attr('data-color',new_color);
                }

                if($full_page.length != 0){
                    $full_page.attr('filter-color',new_color);
                }

                if($sidebar_responsive.length != 0){
                    $sidebar_responsive.attr('data-color',new_color);
                }
            });

            $('.fixed-plugin .img-holder').click(function(){
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');


                var new_image = $(this).find("img").attr('src');

                if( $sidebar_img_container.length !=0 && $('.switch-sidebar-image input:checked').length != 0 ){
                    $sidebar_img_container.fadeOut('fast', function(){
                        $sidebar_img_container.css('background-image','url("' + new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });
                }

                if($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0 ) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $full_page_background.fadeOut('fast', function(){
                        $full_page_background.css('background-image','url("' + new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });
                }

                if( $('.switch-sidebar-image input:checked').length == 0 ){
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $sidebar_img_container.css('background-image','url("' + new_image + '")');
                    $full_page_background.css('background-image','url("' + new_image_full_page + '")');
                }

                if($sidebar_responsive.length != 0){
                    $sidebar_responsive.css('background-image','url("' + new_image + '")');
                }
            });

            $('.switch-sidebar-image input').on("switchChange.bootstrapSwitch", function(){
                $full_page_background = $('.full-page-background');

                $input = $(this);

                if($input.is(':checked')){
                    if($sidebar_img_container.length != 0){
                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image','#');
                    }

                    if($full_page_background.length != 0){
                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image','#');
                    }

                    background_image = true;
                } else {
                    if($sidebar_img_container.length != 0){
                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');
                    }

                    if($full_page_background.length != 0){
                        $full_page.removeAttr('data-image','#');
                        $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
            });

            $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function(){
                var $btn = $(this);

                if(sidebar_mini_active == true){
                    $('body').removeClass('sidebar-mini');
                    sidebar_mini_active = false;
                    nowuiDashboard.showSidebarMessage('Sidebar mini deactivated...');
                }else{
                    $('body').addClass('sidebar-mini');
                    sidebar_mini_active = true;
                    nowuiDashboard.showSidebarMessage('Sidebar mini activated...');
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function(){
                    window.dispatchEvent(new Event('resize'));
                },180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function(){
                    clearInterval(simulateWindowResize);
                },1000);
            });
        });
    });
</script>
















<script>
    $(document).ready(function(){
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();

    });
</script>
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="{{asset('../backend/assets/js/app.js')}}" ></script>
@yield('script')
