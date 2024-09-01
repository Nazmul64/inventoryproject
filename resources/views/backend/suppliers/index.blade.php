@extends('backend.layouts.master')
@section('main_content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Supllicers</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Supllicers</li>
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
                                              <th>type</th>
                                              <th>shop</th>
                                              <th>accoundholder</th>
                                              <th>photo</th>
                                              <th>accountnumber</th>
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
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>{{$user->address}}</td>
                                                <td>{{$user->type}}</td>
                                                <td>{{$user->shopname}}</td>
                                                <td>{{$user->accountnumber}}</td>
                                                <td>
                                                    <img src="{{asset('uploads/supplicers')}}/{{$user->photo}}" class="img-fluid" style="max-width: 80%; height: auto;">
                                                </td>
                                                <td>{{$user->accountnumber}}</td>
                                                <td>{{$user->bankname}}</td>
                                                <td>{{$user->branchname}}</td>
                                                <td>{{$user->city}}</td>
                                               <td class="d-flex">
                                                <a href="{{route('edit.suppliers',$user->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                <a href="{{route('delete.suppliers',$user->id)}}" class="btn btn-danger mx-2"><i class="fa fa-trash"></i></a>
                                                <a href="{{route('view.suppliers',$user->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i>
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
