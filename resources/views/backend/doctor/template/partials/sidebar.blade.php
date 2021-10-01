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
                <li  class="{{ Route::currentRouteNamed('patient.appointment.index') ? 'active' : '' }}" >
                    <a href="{{route('patient.appointment.index')}}">
                        <span class="sidebar-mini-icon">PA</span>
                        <span class="sidebar-normal">Patient Appointment</span>
                    </a>
                </li>
                <li  class="{{ Route::currentRouteNamed('bed.seat.index') ? 'active' : '' }}" >
                    <a href="{{route('bed.seat.index')}}">
                        <span class="sidebar-mini-icon">Bs</span>
                        <span class="sidebar-normal">Bed seat</span>
                    </a>
                </li>


                <li  class="{{ Route::currentRouteNamed('customer.report') ? 'active' : '' }}" >
                    <a href="{{route('customer.report')}}">
                        <span class="sidebar-mini-icon">CR</span>
                        <span class="sidebar-normal"> Customer report</span>
                    </a>
                </li>

                <li class="{{ Route::currentRouteNamed('degree.index') ? 'active' : '' }}" >
                    <a href="{{route('degree.index')}}">
                        <span class="sidebar-mini-icon">D</span>
                        <span class="sidebar-normal">Degree</span>
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

                <li class="{{ Route::currentRouteNamed('pending.list') ? 'active' : '' }}" >
                    <a href="{{route('pending.list')}}">
                        <span class="sidebar-mini-icon">PL</span>
                        <span class="sidebar-normal">Pending list</span>
                    </a>
                </li>

                <li class="{{ Route::currentRouteNamed('daily.purchase.report') ? 'active' : '' }}" >
                    <a href="{{route('daily.purchase.report')}}">
                        <span class="sidebar-mini-icon">DR</span>
                        <span class="sidebar-normal">Daily purchase Report </span>
                    </a>
                </li>

            </ul>
        </div>


    </li>

    <li  >


        <a data-toggle="collapse" href="#componentsExamples" >

            <i class="now-ui-icons education_atom"></i>

            <p>
               Invoice<b class="caret"></b>
            </p>
        </a>

        <div class="collapse " id="componentsExamples">
            <ul class="nav">

                <li class="{{ Route::currentRouteNamed('pending.list') ? 'active' : '' }}" >
                    <a href="{{Route('invoice.index')}}">
                        <span class="sidebar-mini-icon">AI</span>
                        <span class="sidebar-normal">Add Invoice</span>
                    </a>
                </li>

                <li class="{{ Route::currentRouteNamed('invoice.daily.report') ? 'active' : '' }}" >
                    <a href="{{Route('invoice.daily.report')}}">
                        <span class="sidebar-mini-icon">DI</span>
                        <span class="sidebar-normal">Daily invoice </span>
                    </a>
                </li>

                <li class="{{ Route::currentRouteNamed('invoice.print-list') ? 'active' : '' }}" >
                    <a href="{{Route('invoice.print-list')}}">
                        <span class="sidebar-mini-icon">PI</span>
                        <span class="sidebar-normal">Print Invoice</span>
                    </a>
                </li>

                <li  class="{{ Route::currentRouteNamed('invoice.list') ? 'active' : '' }}" >
                    <a href="{{route('invoice.list')}}">
                        <span class="sidebar-mini-icon">IL</span>
                        <span class="sidebar-normal">Invoice List</span>
                    </a>
                </li>

            </ul>
        </div>


    </li>

    <li >


        <a data-toggle="collapse" href="#formsExamples" >

            <i class="now-ui-icons files_single-copy-04"></i>

            <p>
                Stock Managment<b class="caret"></b>
            </p>
        </a>

        <div class="collapse " id="formsExamples">
            <ul class="nav">

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

                <li {{ Route::currentRouteNamed('role.index') ? 'active' : '' }} >
                    <a href="{{Route('role.index')}}">
                        <span class="sidebar-mini-icon">R</span>
                        <span class="sidebar-normal">ROLE</span>
                    </a>
                </li>

            </ul>
        </div>


    </li>

    <li >


        <a data-toggle="collapse" href="#tablesExamples" >

            <i class="now-ui-icons design_bullet-list-67"></i>

            <p>
                Tables <b class="caret"></b>
            </p>
        </a>

        <div class="collapse " id="tablesExamples">
            <ul class="nav">

                <li >
                    <a href="tables/regular.html">
                        <span class="sidebar-mini-icon">RT</span>
                        <span class="sidebar-normal"> Regular Tables </span>
                    </a>
                </li>

                <li >
                    <a href="tables/extended.html">
                        <span class="sidebar-mini-icon">ET</span>
                        <span class="sidebar-normal"> Extended Tables </span>
                    </a>
                </li>

                <li >
                    <a href="tables/datatables.net.html">
                        <span class="sidebar-mini-icon">DT</span>
                        <span class="sidebar-normal"> DataTables.net </span>
                    </a>
                </li>

            </ul>
        </div>


    </li>

    <li >


        <a data-toggle="collapse" href="#mapsExamples" >

            <i class="now-ui-icons location_pin"></i>

            <p>
                Maps <b class="caret"></b>
            </p>
        </a>

        <div class="collapse " id="mapsExamples">
            <ul class="nav">

                <li >
                    <a href="maps/google.html">
                        <span class="sidebar-mini-icon">GM</span>
                        <span class="sidebar-normal"> Google Maps </span>
                    </a>
                </li>

                <li >
                    <a href="maps/fullscreen.html">
                        <span class="sidebar-mini-icon">FM</span>
                        <span class="sidebar-normal"> Full Screen Map </span>
                    </a>
                </li>

                <li >
                    <a href="maps/vector.html">
                        <span class="sidebar-mini-icon">VM</span>
                        <span class="sidebar-normal"> Vector Map </span>
                    </a>
                </li>

            </ul>
        </div>


    </li>

    <li >


        <a href="widgets.html">

            <i class="now-ui-icons objects_diamond"></i>

            <p>Widgets</p>
        </a>

    </li>



    <li >


        <a href="calendar.html">

            <i class="now-ui-icons media-1_album"></i>

            <p>Calendar</p>
        </a>

    </li>



</ul>