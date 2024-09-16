@extends('backend.layouts.master')
@section('main_content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Take Attendence</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Attendence</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 ">
                        <h1 class="m-0 flot-right text-center mb-2">Today:{{date('d/m/y')}}</h1>
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                <table class="table table-responsive table-bordered">
                                     <thead>
                                          <tr>
                                              <th>SL NO</th>
                                              <th>Name</th>
                                              <th>Photo</th>
                                              <th>Attendence</th>

                                          </tr>
                                     </thead>
                                     <tbody>
                                        <form method="POST"action="{{route('insert.attendence')}}"enctype="multipart/form-data">
                                            @csrf
                                        @foreach ($employess as $index=>$employee )
                                         <tr>
                                                <td>{{$index}}</td>
                                                <td>{{$employee->name1}}</td>
                                                <td>
                                                    <img src="{{asset('uploads/employees')}}/{{$employee->photo}}" class="img-fluid" style="width:100px; height: auto;">
                                                </td>
                                                <input type="hidden"name="user_id[]"value="{{$employee->id}}">
                                                <td>
                                                    <input type="radio"name="attendence[{{$employee->id}}]"class="checkbox-circle"id="radioSuccess2"value="Present">Present
                                                    <input type="radio"name="attendence[{{$employee->id}}]"class="checkbox-circle"id="radioSuccess2"value="Absent">Absent
                                                </td>
                                                <input type="hidden"name="att_date"value="{{date('d/m/y')}}">
                                                <input type="hidden"name="att_year"value="{{date('Y')}}">
                                                <input type="hidden"name="month"value="{{date('F')}}">
                                         </tr>
                                         @endforeach
                                         <button class="btn btn-info mt-2 mb-2 float-right" type="submit">Take Attendence</button>
                                         <a href="{{route('all.attendence',$employee->id)}}" class="btn btn-success mt-2 mb-2 mx-1 float-right" type="submit"> Attendence All</a>
                                        </form>
                                     </tbody>
                                </table>

                            </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
