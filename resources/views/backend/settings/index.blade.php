@extends('backend.layouts.master')
@section('main_content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Category</li>
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
                                    <a  href="{{route('add.category')}}"class="btn btn-success float-right mb-1">Back Pages</a>
                                <table class="table table-responsive table-bordered">
                                     <thead>
                                          <tr>
                                              <th>SL NO</th>
                                              <th>company_name</th>
                                              <th>company_address</th>
                                              <th>company_email</th>
                                              <th>company_phone</th>
                                              <th>company_mobile</th>
                                              <th>company_city</th>
                                              <th>company_country</th>
                                              <th>company_sipcode</th>
                                              <th>photo</th>
                                              <th>Action</th>
                                          </tr>
                                     </thead>
                                     <tbody>
                                        @foreach ($settngs as $index=>$settngs )
                                         <tr>
                                                <td>{{$index}}</td>
                                                <td>{{$settngs->company_name}}</td>
                                                <td>{{$settngs->company_address}}</td>
                                                <td>{{$settngs->company_email}}</td>
                                                <td>{{$settngs->company_phone}}</td>
                                                <td>{{$settngs->company_mobile}}</td>
                                                <td>{{$settngs->company_city}}</td>
                                                <td>{{$settngs->company_country}}</td>
                                                <td>{{$settngs->company_sipcode}}</td>
                                                <td>
                                                    <img src="{{asset('uploads/settings')}}/{{$settngs->photo}}" class="img-fluid" style="max-width: 80%; height: auto;">
                                                </td>
                                               <td class="d-flex">
                                                <a href="{{route('edit.setting',$settngs->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                <a href="{{route('delete.category',$settngs->id)}}" class="btn btn-danger mx-2"><i class="fa fa-trash"></i></a>

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
