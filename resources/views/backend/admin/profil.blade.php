@extends('backend._layouts.app')
@section('link.name','Profil')
@section('content')
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Gagal Update</strong> <br>
        <ul>
            @error('username')<li> {{ $message }} </li> @enderror
            @error('name')<li> {{ $message }} </li> @enderror
            @error('email')<li> {{ $message }} </li> @enderror
            @error('password')<li> {{ $message }} </li> @enderror
            @error('old_password')<li> {{ $message }} </li> @enderror
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row">
        <div class="col-md-12 col-sm-6">
            <div class="card card-info card-tabs  ">
                <div class="card-header p-0 pt-1 bg-red-logo">
                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                        <li class="nav-item">
                            <div class="nav-link disabled d-inline-block text-light"><strong>Account</strong></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="change-password-tab" data-toggle="pill" href="#change-password" role="tab" aria-controls="change-password" aria-selected="false">Change Password</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-two-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                            <form action="{{ route('admin.profil') }}" method="POST" enctype="multipart/form-data">
                                @method('patch')
                                @csrf
                                @include('backend.admin.form_profil')
                            </form>
                        </div>
                        <div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
                            <form action="{{ route('admin.password') }}" method="POST">
                                @csrf
                                @method('PATCH')
                                @include('backend.admin.form_password')
                                <button class="btn btn-success" type="submit"> Ok</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->
@endsection
