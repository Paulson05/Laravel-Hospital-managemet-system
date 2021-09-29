@extends('backend.template.defaults')
@section('title', '| patient-Appointment')
@section('body')
    <div class="content">
        <div class="container-fluid">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Patient Appointment</a></li>
                    <li class="breadcrumb-item active" aria-current="page">({{\App\Models\Appointment::count()}})</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-12 text-right">
                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#addModal">+</button>
                    {{--add modal--}}
                    <div  class="modal  fade pt-5" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Creat Patient Appointment</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <ul class="pl-3 text-center list-unstyled" id="saveform_errList"></ul>




                                    <div class="row">


                                        <div class="col-xs-12 col-sm-12 col-md-6 text-left ">
                                            <div class="form-group">
                                                <strong>Patient name</strong>
                                                <select name="name" id="name" class="form-control" data-title="Single Unit" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                                       @php
                                                           $patient = \App\Models\Patient::all();
                                                       @endphp
                                                    <option value="">-- select patient name ---</option>
                                                  @forelse($patient as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @empty
                                                        <option value="">no patient yet</option>
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
                                                <strong>appointment_id</strong>
                                                <input type="text" name="appointment_id"   id="appointment_id" class="appointment_id form-control " placeholder="appointment_id" >


                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 text-left">
                                            <div class="form-group">
                                                <strong>Phone Number</strong>
                                                <input type="text" name="phone_number"   id="phone_number" class="phone_number form-control " placeholder="phone_number" >


                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-6 text-left">
                                            <div class="form-group">

                                                <strong>Deparment</strong>
                                                <select name="department" id="department" class="form-control" data-title="Single Unit" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                                    @php
                                                        $department = \App\Models\Department::all();
                                                    @endphp

                                                    <option>--select doctor--</option>
                                                    @forelse( $department as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @empty
                                                        <option value=""> select visiting doctor</option>
                                                    @endforelse

                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 text-left">
                                            <div class="form-group">

                                                <strong>Doctor</strong>
                                                <select name="doctor" id="doctor" class="form-control" data-title="Single Unit" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                                    @php
                                                        $doctor = \App\Models\Doctor::all();
                                                    @endphp

                                                    <option>--select doctor--</option>
                                                    @forelse( $doctor as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @empty
                                                        <option value=""> select visiting doctor</option>
                                                    @endforelse

                                                </select>

                                            </div>
                                        </div>


                                        <div class="col-xs-12 col-sm-12 col-md-6 text-left ">
                                            <div class="form-group">
                                                <strong>date</strong>
                                                <input type="date" name="date"   id="date" class="date form-control " placeholder="date" >

                                            </div>

                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 text-left">
                                            <div class="form-group">
                                                <strong>time</strong>
                                                <input type="time" name="timer"   id="time" class="time form-control " placeholder="time" >


                                            </div>
                                        </div>


                                        <div class="col-xs-12 col-sm-12 col-md-12 text-left">

                                            <div class="form-group">

                                                <div class="form-group">
                                                    <label>message</label>
                                                    <textarea name="messages" id="message" class="form-control col-12" rows="5" cols="30" required></textarea>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                            <button type="submit" class="add_product btn btn-primary">Save</button>
                                        </div>
                                    </div>




                                </div>

                            </div>




                        </div>

                    </div>

                </div>
                {{--edit modal --}}
                <div  class="modal  fade pt-5" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">

                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Edit product</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <ul class="pl-3 text-center list-unstyled" id="saveform_errList"></ul>




                                <div class="row">
                                    <input type="hidden" id="edit_post_id">

                                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                        <div class="form-group">
                                            <strong>product name</strong>
                                            <input type="text" name="name"  id="edit_name" class="name form-control" placeholder="supplier name" >

                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                        <div class="form-group">
                                            <strong>category name</strong>
                                            <input type="text" name="categories_id"  id="edit_categories_id" class="name form-control" placeholder="supplier name" >

                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                        <div class="form-group">
                                            <strong>unit name</strong>
                                            <input type="text" name="units_id"  id="edit_units_id" class="name form-control" placeholder="supplier name" >

                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                        <div class="form-group">
                                            <strong>supplier name</strong>
                                            <input type="text" name="suppliers_id"  id="edit_suppliers_id" class="name form-control" placeholder="supplier name" >

                                        </div>

                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                        <button type="submit" class="update_product btn btn-primary">Update</button>
                                    </div>
                                </div>




                            </div>

                        </div>




                    </div>
                </div>
                {{--delete modal--}}
                <div  class="modal  fade pt-5" id="example2Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
                    <div class="modal-dialog modal-small text-center">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header ">
                                <h4 class="modal-title text-center">Delete product</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">

                                <input type="hidden" id="delete_post_id">

                                <h4>are you sure want to delete this data</h4>
                            </div>

                            <div class="modal-footer tex">
                                <button type="submit" class="add_post btn btn-outline-secondary" data-dismiss="modal">close</button>
                                <button type="submit" class="delete_post_btn btn btn-danger delete_post_btn">yes delete</button>

                            </div>



                        </div>




                    </div>

                </div>

                <div class="col-md-12 table-responsive card">
                    <div class="data-tables">
                        <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="fresh-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>NAME</th>
                                        <th>Supplier</th>
                                        <th>Unit</th>
                                        <th>alert stock</th>
                                        <th>Category</th>
                                        <th class="disabled-sorting text-right">Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>



                                            <td>
                                                <button type="button"   class="delete_post btn btn-primary" ><i class="fa fa-trash">delete</i></button>

                                                <button type="button"   class="edit_product btn btn-primary" ><i class="fa fa-edit">edit</i></button>
                                            <td>

                                        </tr>
2
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document).ready(function () {
            fetchproduct();
            function  fetchproduct() {
                $.ajax({
                    type: "GET",
                    url:"/fetch-product/",
                    dataType:"json",
                    success: function (response) {
                        // console.log(response.posts);

                        $('tbody').html("");
                        $.each(response.products, function (key, item){
                            $('tbody').append('<tr>\
                                            <td>'+item.id+'</td>\
                                           <td>'+item.name+'</td>\
                                           <td>'+item.suppliers_id+'</td>\
                                           <td>'+item.unit_id+'</td>\
                                            <td>'+item.alert_stock+'</td>\
                                           <td>'+item.category_id+'</td>\
                                            <td><button type="button"  value="'+item.id+'" class="edit_product btn btn-primary" ><i class="fa fa-edit">edit</i></button></td>\
                                              <td><button type="button" value="'+item.id+'"  class="delete_post btn btn-danger" ><i class="fa fa-trash">delete</i></button></td>\
                                            </tr>');
                        });
                    }
                })
            }
            $(document).on('click', '.add_product', function (e){
                e.preventDefault();
                console.log('click');
                var data = {
                    'name' : $('#name').val(),
                    'appointment_id' : $('#appointment_id').val(),
                    'email' : $('#email').val(),
                    'phone_number' : $('#phone_number').val(),
                    'doctor' : $('#doctor').val(),
                    'department' : $('#department').val(),
                    'date' : $('#date').val(),
                    'time' : $('#time').val(),
                    'message' : $('#message').val(),

                }
                console.log(data);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url:"{{route('patient.appointment.store')}}",
                    data:data,
                    dataType:"json",

                    success: function (response){
                        console.log(response);
                        if (response.status == 400)
                        {
                            $('#saveform_errList').html("");
                            $('#saveform_errList').addClass("alert  alert-danger");
                            $.each(response.errors, function (key, err_value) {
                                $('#saveform_errList').append('<li>'+err_value+'</li>');
                            })
                        }
                        else{
                            $('#saveform_errList').html("");
                            $('#success_message').addClass("alert  alert-success");
                            $('#success_message').text(response.message);
                            $('#addModal').modal("hide");
                            $('#addModal').find("input").val("");

                            fetchproduct();
                            swal.fire(
                                'congratulation!',
                                'doctor added successfully',
                                'success'
                            )
                        }

                    }
                })
            });


            $(document).on('click', '.delete_post', function (e){
                e.preventDefault();

                var post_id  = $(this).val();


                $('#delete_post_id').val(post_id);

                $('#example2Modal').modal("show");

            });
            $(document).on('click', '.delete_post_btn', function (e){
                e.preventDefault();


                var post_id  = $('#delete_post_id').val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "DELETE",
                    url:"/delete-product/"+post_id,
                    success: function (response){
                        // console.log(response);
                        $('#success_message').addClass("alert  alert_success");
                        $('#success_message').text(response.message);
                        $('#example2Modal').modal("hide");
                        $('.delete_post_btn').text("yes Delete");
                        fetchproduct();
                        swal.fire(
                            'congratulation!',
                            'doctor deleted successfully',
                            'success'
                        )
                    }

                });

            });

            $(document).on('click', '.edit_product', function (e){
                e.preventDefault();
                let post_id  = $(this).val();
                // console.log(post_id);
                $('#editModal').modal("show");
                $.ajax({
                    type: "GET",
                    url:"/edit-product/"+post_id,

                    success: function (response) {
                        console.log(response);
                        if (response.status == 404){
                            $('#success_message').html("");
                            $('#success_message').addClass('alert alert-danger');
                            $('#success_message').text(response.message);

                        }
                        else{
                            $("#edit_name").val(response.product.name);
                            $("#edit_category_id").val(response.product.category_id);
                            $("#edit_unit_id").val(response.product.unit_id);
                            $("#edit_suppliers_id").val(response.product.suppliers_id);
                            $("#edit_post_id").val(post_id);
                        }

                    }
                });


            });

            $(document).on('click', '.update_product', function (e){
                e.preventDefault();

                let post_id  = $('#edit_post_id').val();
                var data = {
                    'title' : $('#edit_title').val(),
                    'slug' : $('#edit_slug').val(),
                    'tag' : $('#edit_tag').val(),
                    'image' : $('#image').val(),
                    'category_id' : $('#edit_category_id').val(),
                    'body' : $('#edit_body').val(),

                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "PUT",
                    url:"/update-product/"+post_id,
                    data:data,
                    dataType:"json",


                    success: function (response){
                        // console.log(response);
                        if (response.status == 400)
                        {
                            $('#updateform_errList').html("");
                            $('#updateform_errList').addClass("alert  alert-danger");
                            $.each(response.errors, function (key, err_value) {
                                $('#updateform_errList').append('<li>'+err_value+'</li>');
                            })
                        }
                        else{
                            $('#updateform_errList').html("");
                            $('#success_message').addClass("alert  alert-success");
                            $('#success_message').text(response.message);
                            $('#editModal').modal("hide");
                            fetchproduct();
                            swal.fire(
                                'congratulation!',
                                'doctor updated successfully',
                                'success'
                            )
                        }

                    }
                });

            });


            // add doctor





        });
    </script>
@endsection
