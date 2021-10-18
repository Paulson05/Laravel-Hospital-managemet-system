<ul class="nav">

    <li class="{{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}"  >


        <a href="{{Route('dashboard')}}">

            <i class="now-ui-icons design_app"></i>

            <p>Dashboard</p>
        </a>

    </li>
    <li class="{{ Route::currentRouteNamed('role.index') ? 'active' : '' }}">


        <a href="{{route('role.index')}}">

            <i class="now-ui-icons business_chart-pie-36"></i>

            <p>Role</p>
        </a>

    </li>
    <li class="{{ Route::currentRouteNamed('permission.index') ? 'active' : '' }}">


        <a href="{{route('permission.index')}}">

            <i class="now-ui-icons business_chart-pie-36"></i>

            <p>Permission</p>
        </a>

    </li>

    <li >


        <a data-toggle="collapse" href="#pagesExamples" >

            <i class="now-ui-icons design_image"></i>

            <p>
                Pages <b class="caret"></b>
            </p>
        </a>

        <div class="collapse " id="pagesExamples">
            <ul class="nav">

                <li  class="{{ Route::currentRouteNamed('department.index') ? 'active' : '' }}" >
                    <a href="{{route('department.index')}}">
                        <span class="sidebar-mini-icon">D</span>
                        <span class="sidebar-normal">Department</span>
                    </a>
                </li>

                <li  class="{{ Route::currentRouteNamed('specialist.index') ? 'active' : '' }}" >
                    <a href="{{route('specialist.index')}}">
                        <span class="sidebar-mini-icon">S</span>
                        <span class="sidebar-normal">Specialist</span>
                    </a>
                </li>
                <li  class="{{ Route::currentRouteNamed('patient.index') ? 'active' : '' }}" >
                    <a href="{{route('patient.index')}}">
                        <span class="sidebar-mini-icon">P</span>
                        <span class="sidebar-normal">Patient</span>
                    </a>
                </li>
                <li  class="{{ Route::currentRouteNamed('serial.index') ? 'active' : '' }}" >
                    <a href="{{route('serial.index')}}">
                        <span class="sidebar-mini-icon">S</span>
                        <span class="sidebar-normal">Serial</span>
                    </a>
                </li>
                <li  class="{{ Route::currentRouteNamed('patient.appointment.index') ? 'active' : '' }}" >
                    <a href="{{route('patient.appointment.index')}}">
                        <span class="sidebar-mini-icon">PA</span>
                        <span class="sidebar-normal">Patient Appointment</span>
                    </a>
                </li>
                <li  class="{{ Route::currentRouteNamed('patient.approved.list') ? 'active' : '' }}" >
                    <a href="{{route('patient.approved.list')}}">
                        <span class="sidebar-mini-icon">PAL</span>
                        <span class="sidebar-normal">Patient Approved list</span>
                    </a>
                </li>
                <li  class="{{ Route::currentRouteNamed('bed.seat.index') ? 'active' : '' }}" >
                    <a href="{{route('bed.seat.index')}}">
                        <span class="sidebar-mini-icon">Bs</span>
                        <span class="sidebar-normal">Bed seat</span>
                    </a>
                </li>




                <li class="{{ Route::currentRouteNamed('degree.index') ? 'active' : '' }}" >
                    <a href="{{route('degree.index')}}">
                        <span class="sidebar-mini-icon">D</span>
                        <span class="sidebar-normal">Degree</span>
                    </a>
                </li>
                <li >
                    <a href="{{route('marketing.index')}}">
                        <span class="sidebar-mini-icon">M</span>
                        <span class="sidebar-normal">Marketing</span>
                    </a>
                </li>

                <li >
                    <a href="{{route('pharmacy.index')}}">
                        <span class="sidebar-mini-icon">P</span>
                        <span class="sidebar-normal">Pharmarcy</span>
                    </a>
                </li>

                <li class="{{ Route::currentRouteNamed('ambulance.index') ? 'active' : '' }}" >
                    <a href="{{route('ambulance.index')}}">
                        <span class="sidebar-mini-icon">A</span>
                        <span class="sidebar-normal">Ambulance</span>
                    </a>
                </li>

                <li class="{{ Route::currentRouteNamed('doctor.index') ? 'active' : '' }}" >
                    <a href="{{route('doctor.index')}}">
                        <span class="sidebar-mini-icon">D</span>
                        <span class="sidebar-normal">Doctor</span>
                    </a>
                </li>

                <li class="{{ Route::currentRouteNamed('medicine.index') ? 'active' : '' }}" >
                    <a href="{{route('medicine.index')}}">
                        <span class="sidebar-mini-icon">M/D</span>
                        <span class="sidebar-normal">Medicine / drug </span>
                    </a>
                </li>


            </ul>
        </div>


    </li>




    <li >


        <a href="calendar.html">

            <i class="now-ui-icons media-1_album"></i>

            <p>Calendar</p>
        </a>

    </li>



</ul>
