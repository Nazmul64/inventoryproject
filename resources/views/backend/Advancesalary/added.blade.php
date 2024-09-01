@extends('backend.layouts.master')
@section('main_content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Avance Salary Provid</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Avance Salary </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 offset-2">
                            {{-- @if (session('success'))
                                <span class="alert alert-info">{{ session('success') }}</span>
                            @endif --}}
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <form method="POST"action="{{route ('store.salary')}}"enctype="multipart/form-data">
                                    @csrf
                                    <div class="mt-2">
                                        <label>Employee Name</label>
                                        <select class="form-control" id="exampleFormControlSelect1"name="emp_id">
                                          <option value="">Select Employee</option>
                                            @foreach ($employee as $row )
                                            <option value="{{$row->id}}">{{$row->name1}}</option>
                                            @endforeach
                                          </select>
                                        @error('emp_id')
                                          <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>Month</label>
                                        <select class="form-control" id="exampleFormControlSelect1"name="month">
                                         <option>Select Month</option>
                                          <option value="January">January</option>
                                          <option value="February">February</option>
                                          <option value="March">March</option>
                                          <option value="April">April</option>
                                          <option value="May">May</option>
                                          <option value="June">June</option>
                                          <option value="July">July</option>
                                          <option value="August">August</option>
                                          <option value="September">September</option>
                                          <option value="October">October</option>
                                          <option value="November">November</option>
                                          <option value="December">December</option>
                                        </select>
                                        @error('month')
                                         <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>Advance Salary</label>
                                        <input type="number"name="advanced_salary"placeholder="Enter Your Advanced Salary"class="form-control">
                                        @error('advanced_salary')
                                        <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <label>Year</label>
                                        <input type="text"name="year"placeholder="Enter Your Year"class="form-control">
                                       @error('year')
                                         <span class="text-danger">{{ $message }}</span>
                                       @enderror
                                     </div>
                                     <div class="mt-2">
                                        <input class="btn btn-success" type="submit" value="submit">
                                     </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
