@extends('admin.admin_master')
@section('admin')
<div class="side-app">

    <!-- CONTAINER -->
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Profile</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW-1 OPEN -->
        <div class="row" id="user-profile">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="wideget-user mb-2">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="panel profile-cover">
                                            <div class="profile-cover__action bg-img"></div>
                                            <a href="{{ route('admin.profile.edit') }}" style="float:right;"  class="btn btn-primary mt-2">Edit Profile</a>
                                            <div class="profile-cover__img">
                                                <div class="profile-img-1">
                                                    <img src="{{ (!empty($adminData->profile_photo_path)) ? url('upload/admin_images/'.$adminData->profile_photo_path):url('upload/no_image.jpg') }}">
                                                </div>
                                                <div class="profile-img-content text-dark text-start">
                                                    <div class="text-dark">
                                                        <h3 class="h3 mb-2">Admin Name: {{ $adminData->name }}</h3>
                                                        <h5 class="text-muted">Admin Email:{{ $adminData->email }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn-profile">
                                                <button class="btn btn-primary mt-1 mb-1"> <i class="fa fa-rss"></i> <span>Follow</span></button>
                                                <button class="btn btn-secondary mt-1 mb-1"> <i class="fa fa-envelope"></i> <span>Message</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="px-0 px-sm-4">
                                            <div class="social social-profile-buttons mt-5 float-end">
                                                <div class="mt-3">
                                                    <a class="social-icon text-primary" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                                    <a class="social-icon text-primary" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                                                    <a class="social-icon text-primary" href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
                                                    <a class="social-icon text-primary" href="javascript:void(0)"><i class="fa fa-rss"></i></a>
                                                    <a class="social-icon text-primary" href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                    <a class="social-icon text-primary" href="https://myaccount.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                {{-- Edit Form --}}
                                <div class="row">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Edit Profile</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputname">First Name</label>
                                                        <input type="text" class="form-control" id="exampleInputname" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputname1">Last Name</label>
                                                        <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Last Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputnumber">Contact Number</label>
                                                <input type="number" class="form-control" id="exampleInputnumber" placeholder="Contact number">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">About Me</label>
                                                <textarea class="form-control" rows="6">My bio.........</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Website</label>
                                                <input class="form-control" placeholder="http://splink.com">
                                            </div>
                                        </div>
                                        <div class="card-footer text-end">
                                            <a href="javascript:void(0)" class="btn btn-success my-1">Save</a>
                                            <a href="javascript:void(0)" class="btn btn-danger my-1">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COL-END -->
        </div>
        <!-- ROW-1 CLOSED -->

    </div>
    <!-- CONTAINER CLOSED -->
</div>
@endsection
