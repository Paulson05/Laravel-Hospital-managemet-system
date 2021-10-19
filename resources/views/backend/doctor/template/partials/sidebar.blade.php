<ul class="nav">

    <li class="{{ Route::currentRouteNamed('patient.appointment.index') ? 'active' : '' }}"  >


        <a href="{{Route('patient.appointment.index')}}">

            <i class="now-ui-icons design_app"></i>

            <p>Dashboard</p>
        </a>

    </li>



    <li class="{{ Route::currentRouteNamed('patient.appointment.index') ? 'active' : '' }}"  >


        <a href="{{Route('patient.appointment.index')}}">

            <i class="now-ui-icons design_app"></i>

            <p>All Appointment</p>
        </a>

    </li>
    <li class="{{ Route::currentRouteNamed('patient.approved.list') ? 'active' : '' }}"  >


        <a href="{{Route('patient.approved.list')}}">

            <i class="now-ui-icons design_app"></i>

            <p>Approved list</p>
        </a>

    </li>
    <li class="{{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}"  >


        <a href="{{Route('dashboard')}}">

            <i class="now-ui-icons design_app"></i>

            <p>Doctor profile</p>
        </a>

    </li>



</ul>
