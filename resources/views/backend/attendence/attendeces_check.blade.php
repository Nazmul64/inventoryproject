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
                    <div class="col-md-4 ">
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <a  href=""class="btn btn-success float-right mb-1">Back Pages</a>
                                <table class="table table-responsive table-bordered">
                                     <thead>
                                          <tr>
                                              <th>SL NO</th>
                                              <th>Att_Date</th>
                                              <th>action</th>
                                          </tr>
                                     </thead>
                                     <tbody>
                                        @foreach ($attendence_view as $index=>$itmes )
                                         <tr>
                                                <td>{{$index}}</td>
                                                <td>{{$itmes->att_date}}</td>
                                               <td class="d-flex">
                                                <a href="{{ route('edit.attendence', $itmes->att_date) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                <a href="" class="btn btn-danger mx-2"><i class="fa fa-trash"></i></a>

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
