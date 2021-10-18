<ul class="nav">

    <li class="{{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}"  >


        <a href="{{Route('dashboard')}}">

            <i class="now-ui-icons design_app"></i>

            <p>Dashboard</p>
        </a>

    </li>



    <li class="{{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}"  >


        <a href="{{Route('dashboard')}}">

            <i class="now-ui-icons design_app"></i>

            <p>Approved Appointment</p>
        </a>

    </li>
    <li class="{{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}"  >


        <a href="{{Route('dashboard')}}">

            <i class="now-ui-icons design_app"></i>

            <p>Doctor profile</p>
        </a>

    </li>



</ul>
