<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand pl-3" href="index.html">
        <img src="web/img/logo.jpg" class="d-inline-block align-top img-fluid logo-size"
             alt="hms-logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto font-weight-bold">
            <li class="nav-item active">
                <a class="nav-link active"
                   href="{{route('home.index')}}">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link "
                   href="{{route('appointment')}}">Appointments</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link "
                   href="{{route('contact')}}">Contact Us</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link "
                   href="{{route('about') }}">About Us</a>
            </li>
            <li class="nav-item mt-1 {{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}">
                <a class="login btn btn-sm" href="{{Route('doctor.login')}}">Login as Doctor</a>
            </li>
            <li class="nav-item mt-1 {{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}">
                <a class="login btn btn-sm" href="{{Route('dashboard')}}">dashboard</a>
            </li>
            <li class="nav-item mt-1">
                <a class="login btn btn-sm ml-2"
                   href="{{Route('doctor.register')}}">Register</a>
            </li>
        </ul>
    </div>
</nav>
