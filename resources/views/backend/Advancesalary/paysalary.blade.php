@extends('backend.layouts.master')
@section('main_content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Pay Salary <span class="pull-right">{{date('F Y')}}</span></h1>
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
                    <div class="col-md-8">
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                <table class="table table-responsive table-bordered">
                                     <thead>
                                          <tr>
                                              <th>SL NO</th>
                                              <th>Name</th>
                                              <th>photo</th>
                                              <th>salary</th>
                                              {{-- <th>Advanced</th> --}}
                                              <th>action</th>
                                          </tr>
                                     </thead>
                                     <tbody>
                                        @foreach ($employees as $index=>$user )
                                         <tr>
                                            <td>{{$index}}</td>
                                            <td>{{$user->name1}}</td>
                                            <td>
                                                <img src="{{asset('uploads/employees')}}/{{$user->photo}}" class="img-fluid" style="width:100px; height: auto;">
                                            </td>
                                            <td>{{$user->salary}}</td>
                                            {{-- <td>{{$user->advanced_salary}}</td> --}}
                                            <td><span class="badge badge-success">{{date("F",strtotime('-1 month'))}}</span></td>

                                               <td class="d-flex">
                                                <a href="" class="btn btn-primary"><i class="fa fa-pay">Pay Now</i>
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
