@extends('backend.layouts.master')
@section('main_content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All Advanced Salary</h1>
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
                                              <th>photo</th>
                                              <th>month</th>
                                              <th>salary</th>
                                              <th>Advanced</th>
                                              <th>action</th>
                                          </tr>
                                     </thead>
                                     <tbody>
                                        @foreach ($salary as $index=>$user )
                                         <tr>
                                                <td>{{$index}}</td>
                                                <td>{{$user->name1}}</td>
                                                <td>
                                                    <img src="{{asset('uploads/employees')}}/{{$user->photo}}" class="img-fluid" style="width:100px; height: auto;">
                                                </td>
                                                <td>{{$user->month}}</td>
                                                <td>{{$user->salary}}</td>
                                                <td>{{$user->advanced_salary}}</td>

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
