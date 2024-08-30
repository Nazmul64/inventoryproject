@extends('backend.layouts.master')
@section('main_content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Password</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Password</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 offset-4">
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                   
                                    <form method="POST"action="{{ route('profile.passwordupdate') }}">
                                    @if (session('success'))
                                      <span class="alert alert-info">{{ session('success') }}</span>
                                    @endif
                                        @csrf
                                        <div class="py-2">
                                            <label>Old Password</label>
                                            <input type="text"name="old_password"class="form-control"name="old_password">
                                            @error('old_password')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="py-2">
                                            <label>New  Password</label>
                                            <input type="text"name="password"class="form-control"name="password">
                                             @error('password')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                         <div class="py-2">
                                            <label>Confirmation</label>
                                            <input type="text"name="new_password_confirmation"class="form-control"name="new_password_confirmation">
                                             @error('new_password_confirmation')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                         <div class="py-2">
                                           <button type="submit"class="btn btn-success btn-sm">Update</button>
                                        </div>
                                    </form>
                                </div> 
                            </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
