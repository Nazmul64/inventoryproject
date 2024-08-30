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
                                              <th>Username</th>
                                              <th>Email</th>
                                              <th>phone</th>
                                              <th>address</th>
                                              <th>shopname</th>
                                              <th>accound_holder</th>
                                              <th>photo</th>
                                              <th>account_number</th>
                                              <th>bank_name</th>
                                              <th>bank_branch</th>
                                              <th>city</th>
                                              <th>action</th>
                                          </tr>
                                     </thead>
                                     <tbody>
                                        @foreach ($user as $index=>$user )
                                         <tr>
                                                <td>{{$index}}</td>
                                                <td>{{$user->username}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>{{$user->address}}</td>
                                                <td>{{$user->shopname}}</td>
                                                <td>{{$user->accound_holder}}</td>
                                                <td>
                                                    <img src="{{asset('uploads/customer')}}/{{$user->photo}}" class="img-fluid" style="max-width: 50%; height: auto;">
                                                </td>
                                                <td>{{$user->account_number}}</td>
                                                <td>{{$user->bank_name}}</td>
                                                <td>{{$user->bank_branch}}</td>
                                                <td>{{$user->city}}</td>
                                               <td class="d-flex">
                                                <a href="{{route('edit.customers',$user->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                <a href="{{route('delete.customers',$user->id)}}" class="btn btn-danger mx-2"><i class="fa fa-trash"></i></a>
                                                <a href="{{route('customers.view',$user->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i>
                                                </a>
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
