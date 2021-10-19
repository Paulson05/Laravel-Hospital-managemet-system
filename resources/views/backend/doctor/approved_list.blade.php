@extends('backend.doctor.template.defaults')
@section('title', '| patient approved-Appointment')
@section('doctor')
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
                                    <div class="col-xs-12 col-sm-12 col-md-6 text-left">
                                        <div class="form-group">

                                            <strong>Serial</strong>
                                            <select name="serials_id" id="serials_id" class="serials_id form-control" data-title="Single Unit" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                                @php
                                                $doctor = \App\Models\Serial::all();
                                                @endphp

                                                <option value="0" disabled="true" selected="true">--select serial--</option>
                                                @forelse( $doctor as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @empty
                                                <option value=""> select series </option>
                                                @endforelse

                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-6 text-left">
                                        <div class="form-group">

                                            <strong>Doctor</strong>
                                            <select name="doctor" id="doctor" class="doctor form-control" data-title="Single Unit" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                                @php
                                                $doctor = \App\Models\Doctor::all();
                                                @endphp

                                                <option value="0" disabled="true" selected="true">--select doctor--</option>
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
                                            <strong>Patient name</strong>
                                            <select name="patients_id" id="name" class="name form-control" data-title="Single Unit" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">


                                                <option value="0" disabled="true" id="" name="patients_id" selected="true">patient name</option>
                                            </select>

                                        </div>

                                    </div>



                                    <div class="col-xs-12 col-sm-12 col-md-6 text-left">
                                        <div class="form-group">
                                            <strong>email</strong>
                                            <input type="text" name="email"   id="email" class="email form-control " placeholder="email" >


                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                        <div class="form-group">
                                            <strong>Phone Number</strong>
                                            <input type="text" name="phone_number"   id="phone_number" class="patient_number form-control  @error('phone_number'){{"is-invalid"}}@enderror " placeholder="phone_number" >


                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 text-left d-none">
                                        <div class="form-group">
                                            <strong>Department</strong>
                                            <input type="text" name="department"   id="department_id" class="department_id form-control " placeholder="departments_id" >

                                            @error('date')
                                            <span class="form-text text-danger">{{$errors->first('date')}}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-6 text-left ">
                                        <div class="form-group">
                                            <strong>date</strong>
                                            <input type="date" name="date"   id="date" class="date form-control  @error('time'){{"is-invalid"}}@enderror " placeholder="date" >
                                            @error('date')
                                            <span class="form-text text-danger">{{$errors->first('date')}}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 text-left">
                                        <div class="form-group">
                                            <strong>time</strong>
                                            <input type="time" name="time"   id="time" class="time form-control @error('time'){{"is-invalid"}}@enderror " placeholder="time" >
                                            @error('time')
                                            <span class="form-text text-danger">{{$errors->first('time')}}</span>
                                            @enderror

                                        </div>
                                    </div>


                                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">

                                        <div class="form-group">

                                            <div class="form-group">
                                                <label>message</label>
                                                <textarea name="messages" id="message" class="form-control col-12 @error('message'){{"is-invalid"}}@enderror" rows="5" cols="30" required></textarea>
                                            </div>
                                            @error('message')
                                            <span class="form-text text-danger">{{$errors->first('message')}}</span>
                                            @enderror
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
                        <!--                            <div class="fresh-datatables">-->
                        <!--                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">-->
                        <!--                                    <thead>-->
                        <!--                                    <tr>-->
                        <!--                                        <th>S/N</th>-->
                        <!--                                        <th>NAME</th>-->
                        <!--                                        <th>Supplier</th>-->
                        <!--                                        <th>Unit</th>-->
                        <!--                                        <th>alert stock</th>-->
                        <!--                                        <th>Category</th>-->
                        <!--                                        <th class="disabled-sorting text-right">Actions</th>-->
                        <!--                                    </tr>-->
                        <!--                                    </thead>-->
                        <!---->
                        <!--                                    <tbody>-->
                        <!---->
                        <!--                                        <tr>-->
                        <!--                                            <td></td>-->
                        <!--                                            <td></td>-->
                        <!--                                            <td></td>-->
                        <!--                                            <td></td>-->
                        <!--                                            <td></td>-->
                        <!---->
                        <!---->
                        <!---->
                        <!--                                            <td>-->
                        <!--                                                <button type="button"   class="delete_post btn btn-primary" ><i class="fa fa-trash">delete</i></button>-->
                        <!---->
                        <!--                                                <button type="button"   class="edit_product btn btn-primary" ><i class="fa fa-edit">edit</i></button>-->
                        <!--                                            <td>-->
                        <!---->
                        <!--                                        </tr>-->
                        <!---->
                        <!--                                    </tbody>-->
                        <!--                                </table>-->
                        <!--                            </div>-->

                        <div class="fresh-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover table-responsive" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>

                                    <th>Invoice No</th>
                                    <th>date</th>
                                    <th>Description</th>
                                    <th>status</th>

                                </tr>

                                @php
                                $appointment = \App\Models\Appointment::orderBy('date', 'desc')->orderby('id', 'desc')->where('status', '1')->get();

                                @endphp
                                </thead>

                                <tbody>

                                @foreach($appointment as $invoice)
                                    <td>{{$loop->iteration}}</td>
                                    <td> {{ $invoice->series->name }}-{{ str_pad($invoice->number, 5, '0', STR_PAD_LEFT) }} </td>
                                    <td>{{$invoice->patients_id}}</td>
                                    <td>{{date('d-m-y', strtotime($invoice->date))}}</td>
                                    <td>{{$invoice->email}}</td>
                                    <td>{{$invoice->message}}</td>
                                    <td>{{$invoice->time}}</td>
                                    <td>{{$invoice->date}}</td>
                                    <td>
                                        @if($invoice->status == '0')
                                        <button class=" btn btn-danger">pending</button>
                                        @elseif($invoice->status == '1')
                                        <button class="btn btn-success">approved</button>
                                        @endif
                                    </td>



                                </tr>
                                @endforeach
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




</script>
<script>
    $(document).ready(function () {
        $(document).on('change', '.doctor', function (){

            var doctor_id = $(this).val();
            console.log(doctor_id);
            var div = $(this).parent().parent().parent();
            // div.css('background-color','yellow');
            var op = " ";


            $.ajax({
                type:"get",
                url:"{{route('get.patient.name')}}",
                data:{id:doctor_id},
                success:function (data) {
                    console.log(data)
                    op+='<option value="0" selected disabled>chose name</option>';
                    for (var i = 0; i<data.length; i++) {
                        op+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                    }
                    div.find('.name').html(" ");
                    div.find('.name').append(op);
                },
                error:function (){

                }
            });
        });
        $(document).on('change', '.name', function (){

            var patient_id = $(this).val();
            var a = $(this).parent().parent().parent();
            // a.css('background-color','red');
            console.log(patient_id);

            var op = " ";
            $.ajax({
                type:"get",
                url:"{{route('get-name')}}",
                data:{id:patient_id},
                dataType:'json',
                success:function (data){
                    console.log(data);
                    console.log(data.email);
                    a.find('.email').val(data.email);
                    a.find('.patient_number').val(data.patient_number);
                    a.find('.department_id').val(data.department_id);
                },
                error:function (){

                }
            });
        });
        $(function (){

        });
        fetchproduct();
        // function  fetchproduct() {
        //     $.ajax({
        //         type: "GET",
        //         url:"{{route('fetch.patient.appointment')}}",
        //         dataType:"json",
        //         success: function (response) {
        //             // console.log(response.posts);
        //
        //             $('tbody').html("");
        //             $.each(response.appointment, function (key, item){
        //                 $('tbody').append('<tr>\
        //                                     <td>'+item.id+'</td>\
        //                                    <td>'+item.patients_id+'</td>\
        //                                    <td>'+item.email+'</td>\
        //                                    <td>'+item.phone_number+'</td>\
        //                                     <td>'+item.time+'</td>\
        //                                    <td>'+item.date+'</td>\
        //                                    <td>'+item.message+'</td>\
        //                                     <td><button type="button"  value="'+item.id+'" class="edit_product btn btn-primary" ><i class="fa fa-edit">edit</i></button></td>\
        //                                       <td><button type="button" value="'+item.id+'"  class="delete_post btn btn-danger" ><i class="fa fa-trash">delete</i></button></td>\
        //                                     </tr>');
        //             });
        //         }
        //     })
        // }
        $(document).on('click', '.add_product', function (e){
            e.preventDefault();

            var data = {
                'patients_id': $('#name').val(),
                'serials_id' : $('#serials_id').val(),
                'email' : $('#email').val(),
                'phone_number' : $('#phone_number').val(),
                'doctor' : $('#doctor').val(),
                'department' : $('#department_id').val(),
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
                url:"/post-patient-appointments/",
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
                            'appointment appointed  successfully',
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
