@extends('backend.template.defaults')
@section('title', '| add stock')
@section('body')
    <div class="content">
        <div class="container-fluid">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                    <li class="breadcrumb-item active" aria-current="page">({{\App\Models\Stock::count()}})</li>
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
                                    <h4 class="modal-title">Creat STOCK</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <ul class="pl-3 text-center list-unstyled" id="saveform_errList"></ul>




                                    <div class="row">


                                        <div class="col-xs-12 col-sm-12 col-md-6 text-left ">
                                            <div class="form-group">
                                                <strong>Name</strong>
                                                <input type="text" name="name"   id="name" class="name form-control " placeholder=" name" >

                                            </div>

                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 text-left ">
                                            <div class="form-group">
                                                <strong>Quantity</strong>
                                                <input type="text" name="qty"   id="qty" class="qty form-control " placeholder="quantity" >

                                            </div>

                                        </div>


                                        <div class="col-xs-12 col-sm-12 col-md-6 text-left">
                                            <div class="form-group">

                                                <strong>stock-type</strong>
                                                <select name="stock_type" id="stock_type" class="form-control" data-title="Single Unit" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">


                                                           <option>--select stock type--</option>
                                                        <option value="hospial">hospital</option>
                                                    <option value="lab">lab</option>



                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 text-left">
                                            <div class="form-group">
                                                <strong>price</strong>
                                                <input type="text" name="price"   id="price" class="price form-control " placeholder="price" >


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
                // console.log('click');
                var data = {
                    'name' : $('#name').val(),
                    'price' : $('#price').val(),
                    'qty' : $('#qty').val(),
                    'stock_type' : $('#stock_type').val(),

                }
                console.log(data);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url:"{{route('stock.store')}}",
                    data:data,
                    dataType:"json",
                    datType: "image/jpeg",
                    success: function (response){
                        // console.log(response);
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
                                'stock added successfully',
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
