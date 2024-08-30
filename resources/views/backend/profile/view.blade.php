@extends('backend.layouts.master')
@section('main_content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 offset-4">
                            @if (session('success'))
                                <span class="alert alert-info">{{ session('success') }}</span>
                            @endif
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                       <img class="profile-user-img img-fluid img-circle"src="{{ !empty($user->image) ? asset('upload/user_images/'.$user->image) : asset('upload/avatar5.png') }}"alt="User profile picture">
                                    </div>
                                    <h3 class="profile-username text-center">{{ $user->name }}</h3>
                                    <p class="text-muted text-center">{{ $user->address}}</p>
                                    <table class="table table-bordered w-100">
                                        <tbody>
                                             <tr>
                                                 <td>Email</td>
                                                 <td>{{ $user->email }}</td>
                                             </tr>
                                             <tr>
                                                 <td>Mobile No</td>
                                                 <td>{{ $user->mobile }}</td>
                                             </tr>
                                              <tr>
                                                 <td>Gender</td>
                                                 <td>{{ $user->gender }}</td>
                                             </tr>
                                        </tbody>
                                    </table>
                                    <a href="{{ route('profile.edit',$user->id) }}" class="btn btn-primary btn-block"><b>Update</b></a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
