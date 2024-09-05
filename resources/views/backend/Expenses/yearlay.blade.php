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

                                    <a  href="{{route('add.category')}}"class="btn btn-success float-right mb-1">Back Pages</a>
                                <table class="table table-responsive table-bordered">
                                     <thead>
                                          <tr>

                                              <th>Detailss</th>
                                              <th>Amount</th>

                                          </tr>
                                     </thead>
                                     <tbody>

                                        @foreach ($total_coust as $total_coust )
                                         <tr>
                                                <td>{{$total_coust->details}}</td>
                                                <td>{{$total_coust->amount}}</td>

                                         </tr>

                                         @endforeach
                                     </tbody>
                                </table>
                                <td class="btn btn-success text-white mb-2"> Total Expenses:TK</td>
                            </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
