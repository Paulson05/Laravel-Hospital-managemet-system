<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-wrapper">

            <a class="navbar-brand" href="#pablo">Login Page</a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navigation">


            <ul class="navbar-nav">
<!--                <li class="nav-item">-->
<!--                    <a href="../dashboard.html" class="nav-link">-->
<!--                        <i class="now-ui-icons design_app"></i>-->
<!--                        Dashboard-->
<!--                    </a>-->
<!--                </li>-->
                <li class= "nav-item ">
                    <a href="{{Route('doctor.register')}}" class="nav-link">
                        <i class="now-ui-icons tech_mobile"></i>
                        Register
                    </a>
                </li>
                <li class= "nav-item  active ">
                    <a href="{{Route('doctor.login')}}" class="nav-link">
                        <i class="now-ui-icons users_circle-08"></i>
                        Login
                    </a>
                </li>



            </ul>





        </div>
    </div>
</nav>
