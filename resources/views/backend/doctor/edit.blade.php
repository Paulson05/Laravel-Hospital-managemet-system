@extends('backend.doctor.template.defaults')
@section('title', '| doctor profile')
@section('doctor')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <h3>update profile</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('post.update.doctor')}}" method="post">

                            @csrf
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Department</label>
                                        <input type="text" class="form-control"  placeholder="Company" value="{{auth()->user()->dept->name}}">
                                    </div>
                                </div>
                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <label>Employment id</label>
                                        <input type="text" class="form-control"  placeholder="employment id" value="{{auth()->user()->employer_id}}">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" name="email"  placeholder="Email" value="{{auth()->user()->email}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="name"  placeholder="Company" value="{{Request::old('name') ?: auth()->user()->name   }}">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address"  placeholder="Home Address" value="{{auth()->user()->address}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control"   placeholder="City" value="{{auth()->user()->country}}">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" name="country"  disabled="" placeholder="Country" value="{{auth()->user()->country}}">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Phone number</label>
                                         <input type="number" class="form-control" name="phone"   placeholder="" value="{{Request::old('phone') ?: auth()->user()->phone }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Me</label
                                        <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="">{{auth()->user()->description}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <button href="" class="btn-outline-primary rounded">Update profile</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
