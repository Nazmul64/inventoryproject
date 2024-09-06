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
                        <a href="{{route('january.expenses')}}" class="btn btn-success mb-2">january</a>
                        <a href="{{route('February.expenses')}}" class="btn btn-success mb-2">February</a>
                        <a  href="{{route('March.expenses')}}" class="btn btn-success mb-2">March</a>
                        <a href="{{route('April.expenses')}}" class="btn btn-success mb-2">April</a>
                        <a href="{{route('May.expenses')}}" class="btn btn-success mb-2">May</a>
                        <a href="{{route('June.expenses')}}" class="btn btn-success mb-2">June</a>
                        <a href="{{route('July.expenses')}}" class="btn btn-success mb-2">July</a>
                        <a href="{{route('August.expenses')}}" class="btn btn-success mb-2">August</a>
                        <a href="{{route('Septeber.expenses')}}" class="btn btn-success mb-2">Septeber</a>
                        <a href="{{route('October.expenses')}}" class="btn btn-success mb-2">October</a>
                        <a href="{{route('November.expenses')}}" class="btn btn-success mb-2">November</a>
                        <a href="{{route('December.expenses')}}" class="btn btn-success mb-2">December</a>
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">

                                    <a  href="{{route('add.category')}}"class="btn btn-success float-right mb-1">Back Pages</a>
                                <table class="table table-responsive table-bordered">
                                     <thead>
                                          <tr>

                                              <th>Detailss</th>
                                              <th>Date</th>
                                              <th>Amount</th>

                                          </tr>
                                     </thead>
                                     <tbody>
                                        @php
                                           $month =date("F");
                                           $total = \App\Models\Expenses::where('month',$month)->sum('amount');
                                        @endphp
                                        @foreach ($this_month as $this_month )
                                         <tr>
                                                <td>{{$this_month->details}}</td>
                                                <td>{{$this_month->date}}</td>
                                                <td>{{$this_month->amount}}</td>

                                         </tr>

                                         @endforeach
                                     </tbody>
                                </table>
                                <td class="btn btn-success text-white mb-2"> Total Expenses:{{$total}}TK</td>
                            </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
