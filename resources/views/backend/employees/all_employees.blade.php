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
                    <div class="col-md-12 ">
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                <table class="table table-responsive table-bordered">
                                     <thead>
                                          <tr>
                                              <th>SL NO</th>
                                              <th>Name</th>
                                              <th>Email</th>
                                              <th>phone</th>
                                              <th>address</th>
                                              <th>experience</th>
                                              <th>photo</th>
                                              <th>vacation</th>
                                              <th>salary</th>
                                              <th>city</th>
                                              <th>nid_no</th>
                                              <th>action</th>
                                          </tr>
                                     </thead>
                                     <tbody>
                                        @foreach ($user as $index=>$user )
                                         <tr>
                                                <td>{{$index}}</td>
                                                <td>{{$user->name1}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>{{$user->address}}</td>
                                                <td>{{$user->experience}}</td>
                                                <td>
                                                    <img src="{{asset('uploads/employees')}}/{{$user->photo}}" class="img-fluid" style="max-width: 50%; height: auto;">
                                                </td>>
                                                <td>{{$user->vacation}}</td>
                                                <td>{{$user->salary}}</td>
                                                <td>{{$user->city}}</td>
                                                <td>{{$user->nid_no}}</td>
                                               <td class="d-flex">
                                                <a href="{{route('edit.employees',$user->id)}}" class="btn btn-success mx-2"><i class="fa fa-edit"></i></a>
                                                <a href="{{route('delete.employees',$user->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                               </td>
                                         </tr>
                                         @endforeach
                                     </tbody>
                                </table>

                            </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
