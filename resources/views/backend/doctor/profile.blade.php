@extends('backend.doctor.template.defaults')
@section('title', '| doctor profile')
@section('doctor')
<div class="content">
    <div class="container-fluid">
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <a href="{{route('edit.doctor')}}" class="btn-outline-primary rounded">Edit profile</a>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Department</label>
                                <input type="text" class="form-control" disabled="" placeholder="Company" value="{{auth()->user()->dept->name}}">
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="form-group">
                                <label>Employment id</label>
                                <input type="text" class="form-control" disabled="" placeholder="employment id" value="{{auth()->user()->employer_id}}">
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" disabled="" placeholder="Email" value="{{auth()->user()->email}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control"  disabled="" placeholder="Company" value="{{auth()->user()->name}}">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control"  disabled="" placeholder="Home Address" value="{{auth()->user()->address}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control"  disabled="" placeholder="City" value="{{auth()->user()->country}}">
                            </div>
                        </div>
                        <div class="col-md-4 px-1">
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control"  disabled="" placeholder="Country" value="{{auth()->user()->country}}">
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label>Phone number</label>
                                <input type="number" class="form-control"  disabled="" placeholder="" value="{{auth()->user()->phone}}">
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

                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-user">
            <div class="image">
                <img src="../../assets/img/bg5.jpg" alt="...">
            </div>
            <div class="card-body">
                <div class="author">
                    <a href="#">
                        <img class="avatar border-gray" src="../../assets/img/mike.jpg" alt="...">
                        <h5 class="title">Mike Andrew</h5>
                    </a>
                    <p class="description">
                        michael24
                    </p>
                </div>
                <p class="description text-center">
                    "Lamborghini Mercy <br>
                    Your chick she so thirsty <br>
                    I'm in that two seat Lambo"
                </p>
            </div>
            <hr>
            <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                    <i class="fab fa-facebook-square"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                    <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                    <i class="fab fa-google-plus-square"></i>
                </button>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
@endsection
