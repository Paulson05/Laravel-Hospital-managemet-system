

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/now-ui-dashboard-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 May 2021 17:59:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>


    @include('backend.template.partials.head')

</head>

<body class="login-page sidebar-mini ">
<style>
    #background_image{
        background-image: url({{asset('/backend/assets/img/bg14.jpg')}}) !important;
    }
</style>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->




<!-- Navbar -->
@include('backend.template.partials.navbar')
<!-- End Navbar -->



<div class="wrapper wrapper-full-page ">

















    <div id="background_image" class="full-page login-page section-image" filter-color="black" data-image="" style="background-image: url(../../assets/img/bg14.jpg) !important;">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="content">
            <div class="container">
                <div class="col-md-12 ml-auto mr-auto">
                    <form class="form" method="post" action="{{route('doctor.post.register')}}">
                        @csrf
                        <div class="row" style="color: white !important;">


                            <div class="col-xs-12 col-sm-12 col-md-6 text-left ">
                                <div class="form-group">
                                    <strong>Doctor name</strong>
                                    <input type="text" name="name"   id="name" class="name form-control " placeholder=" name" >

                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 text-left ">
                                <div class="form-group">
                                    <strong>password</strong>
                                    <input type="password" name="password" placeholder="Password..." class="form-control">

                                </div>

                            </div>





                            <div class="col-xs-12 col-sm-12 col-md-6 text-left">
                                <div class="form-group">

                                    <strong>Degree</strong>
                                    <select name="degree" id="degree" class="form-control" data-title="Single Unit" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                        @php
                                        $degree = \App\Models\Degree::all();
                                        @endphp

                                        <option>--select degree--</option>
                                        @forelse( $degree as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @empty
                                        <option value=""> select degree</option>
                                        @endforelse

                                    </select>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 text-left">
                                <div class="form-group">
                                    <strong>email</strong>
                                    <input type="text" name="email"   id="email" class="email form-control " placeholder="email" >


                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 text-left">
                                <div class="form-group">

                                    <strong>Specialist</strong>
                                    <select name="specialist" id="specialist" class="form-control" data-title="Single Unit" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                        @php
                                        $specislist = \App\Models\Specialist::all();
                                        @endphp

                                        <option>--select specilist--</option>
                                        @forelse( $specislist as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @empty
                                        <option value="">specialist</option>
                                        @endforelse

                                    </select>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 text-left ">
                                <div class="form-group">
                                    <strong>Date-Of-Birth</strong>
                                    <input type="date" name="D_O_B"   id="D_O_B" class="D_O_B form-control " placeholder="D_O_B" >

                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 text-left">
                                <div class="form-group">

                                    <strong>Department</strong>
                                    <select name="departments_id" id="departments_id" class="departments_id form-control" data-title="Single Unit" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                        @php
                                        $department = \App\Models\Department::all();
                                        @endphp

                                        <option>--select specilist--</option>
                                        @forelse( $department as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @empty
                                        <option value="">specialist</option>
                                        @endforelse

                                    </select>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 text-left">
                                <div class="form-group">

                                    <strong>Country</strong>
                                    <select name="country" id="country" class="form-control" data-title="Single Unit" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                        @php
                                        $department = \App\Models\Department::all();
                                        @endphp

                                        <option>--select specilist--</option>
                                        @forelse( $department as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @empty
                                        <option value="">specialist</option>
                                        @endforelse

                                    </select>

                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 text-left">
                                <div class="form-group">

                                    <strong>Gender</strong>

                                    <select class="form-control" id="gender"  name="gender">
                                        <option>---select gender---</option>

                                        <option value="male">male</option>
                                        <option value="female">female</option>


                                    </select>


                                    </select>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 text-left ">
                                <div class="form-group">
                                    <strong>Address</strong>
                                    <input type="text" name="address"   id="address" class="address form-control " placeholder="address" >

                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 text-left">
                                <div class="form-group">
                                    <strong>Phone number</strong>
                                    <input type="text" name="phone"   id="phone" class="phone form-control " placeholder="phone" >


                                </div>
                            </div>

                            <div class="col-md-6">
                                <h4 class="card-title text-left">Photo</h4>
                                <input type="file" id="photo" name="photo"  />
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-left">

                                <div class="form-group">

                                    <div class="form-group">
                                        <label>short bio</label>
                                        <textarea name="description" id="description" class="form-control col-12" rows="5" cols="30" required></textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                <div class="form-group">

                                    <strong>status</strong>

                                    <select class="form-control" id="status"  name="status">
                                        <option>---select status---</option>

                                        <option value="active">active</option>
                                        <option value="inactive">inactive</option>


                                    </select>


                                    </select>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                <button type="submit" class="add_product btn btn-primary">Save</button>
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
        <footer class="footer" >

            <div class=" container-fluid ">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com/">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com/">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com/">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright" id="copyright">
                    &copy; <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>, Designed by <a href="https://www.invisionapp.com/" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a>.
                </div>
            </div>



        </footer>

    </div>


</div>

<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Background</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors text-center">
                        <span class="badge filter badge-yellow" data-color="yellow"></span>
                        <span class="badge filter badge-blue" data-color="blue"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange active" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>


            <li class="header-title">
                Sidebar Mini
            </li>
            <li class="adjustments-line">

                <div class="togglebutton switch-sidebar-mini">
                    <span class="label-switch">OFF</span>
                    <input type="checkbox" name="checkbox" checked class="bootstrap-switch"
                           data-on-label=""
                           data-off-label=""
                    />
                    <span class="label-switch label-right">ON</span>
                </div>
            </li>

            <li class="button-container">
                <a href="https://www.creative-tim.com/product/now-ui-dashboard-pro" target="_blank" class="btn btn-primary btn-block btn-round">Buy Now</a>
                <a href="https://demos.creative-tim.com/now-ui-dashboard-pro/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
                    <i class="now-ui-icons files_single-copy-04"></i>
                    Documentation
                </a>
                <a href="https://www.creative-tim.com/product/now-ui-dashboard" target="_blank" class="btn btn-info btn-block btn-round">
                    <i class="now-ui-icons files_single-copy-04"></i>
                    Get Free Demo!
                </a>
            </li>




            <li class="header-title">Thank you for 95 shares!</li>

            <li class="button-container text-center">
                <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
                <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
                <br>
                <br>
                <a class="github-button" href="https://github.com/creativetimofficial/ct-now-ui-dashboard-pro" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
            </li>
        </ul>
    </div>
</div>


@include('backend.template.partials.scripts')

</body>


<!-- Mirrored from demos.creative-tim.com/now-ui-dashboard-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 May 2021 17:59:47 GMT -->
</html>
