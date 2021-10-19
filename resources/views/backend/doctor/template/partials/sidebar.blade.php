<ul class="nav">

    <li class="{{ Route::currentRouteNamed('doctor.dashboard') ? 'active' : '' }}"  >


        <a href="{{Route('doctor.dashboard')}}">

            <i class="now-ui-icons design_app"></i>

            <p>Dashboard</p>
        </a>

    </li>



    <li class="{{ Route::currentRouteNamed('doctor.approved.list') ? 'active' : '' }}"  >


        <a href="{{Route('doctor.approved.list')}}">

            <i class="now-ui-icons design_app"></i>

            <p>Approved</p>
        </a>

    </li>
    <li class="{{ Route::currentRouteNamed('doctor.pending.list') ? 'active' : '' }}"  >


        <a href="{{Route('doctor.pending.list')}}">

            <i class="now-ui-icons design_app"></i>

            <p>Pending list</p>
        </a>

    </li>
    <li class=""  >


        <a href="">

            <i class="now-ui-icons design_app"></i>

            <p>Doctor profile</p>
        </a>

    </li>



</ul>
