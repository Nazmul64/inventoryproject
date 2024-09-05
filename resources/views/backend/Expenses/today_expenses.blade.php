@extends('backend.layouts.master')
@section('main_content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1 class="m-0">Today Expenses</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Expenses</li>
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
                                    <h5 class="btn btn-success text-white ">Total Coust : {{$expenses_total_coust}}</h5>
                                    <a  href="{{route('add.expenses')}}"class="btn btn-success float-right mb-1">Back Pages</a>
                                <table class="table table-responsive table-bordered">
                                     <thead>
                                          <tr>

                                              <th>Detailss</th>
                                              <th>Amount</th>
                                              <th>action</th>
                                          </tr>
                                     </thead>
                                     <tbody>
                                        @foreach ($today as $today )
                                         <tr>
                                                <td>{{$today->details}}</td>
                                                <td>{{$today->amount}}</td>
                                               <td class="d-flex">
                                                <a href="{{route('editexpenses',$today->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                <a href="{{route('delete',$today->id)}}" class="btn btn-danger mx-2"><i class="fa fa-trash"></i></a></a>
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
