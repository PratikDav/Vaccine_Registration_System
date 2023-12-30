@extends('admin.layout.default')
@section('title', 'Admin | Vaccine Center')
@section('page-title', 'Vaccine Center')
@section('present-path', 'Vaccine Center')
@section('content')
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <!-- Dark table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">
                        Available Vaccine Center
                        <a href="{{ route('show.VaccineCenterForm') }}" class="badge badge-dark mx-2">Add New</a>
                    </h4>
                    <div class="text-center">
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            <img style="width: 50px;" class="rounded-circle"
                                src="{{ asset('assets/images/kindness.gif') }}" alt="img">
                            <h6 class="d-inline mx-2">
                                {{ Session::get('success') }}
                            </h6>
                        </div>
                        @endif

                        @if(Session::has('deleted'))
                        <div class="alert alert-success">
                            <img style="width: 50px;" class="rounded-circle" src="{{ asset('assets/images/done.gif') }}"
                                alt="img">
                            <h6 class="d-inline mx-2">
                                {{ Session::get('deleted') }}
                            </h6>
                        </div>
                        @endif

                        @if(Session::has('failed'))
                        <div class="alert alert-danger">
                            <img style="width: 60px;" class="" src="{{ asset('assets/images/error.gif') }}" alt="img">
                            {{ Session::get('failed') }}
                        </div>
                        @endif
                    </div>

                    <div class="single-table">
                        <div class=" data-tables datatable-dark">
                            <table id="dataTable3" class="text-center">
                                <thead class="text-uppercase">
                                    <tr class="text-white">
                                        <th scope="col">Center ID</th>
                                        <th scope="col">Center Name</th>
                                        <th scope="col">Center Establised Date</th>
                                        <th scope="col">divisions</th>
                                        <th scope="col">District</th>
                                        <th scope="col">Sub District</th>
                                        <th scope="col">Union</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allCenters as $center)
                                    <tr>
                                        <td>{{ $center->vaccination_center_id }}</td>
                                        <td>{{ $center->vaccination_center_name }}</td>
                                        <td>{{ get_formatted_date($center->established_date,"d-M-Y") }}</td>
                                        <td>{{ $center->divisions }}</td>
                                        <td>{{ $center->district }}</td>
                                        <td>{{ $center->sub_district }}</td>
                                        <td>{{ $center->union }}</td>
                                        <td>
                                            <a type="button"
                                                href=""
                                                class="btn rounded" data-toggle="modal" data-target="#editDose"><i
                                                    class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dark table end -->

    </div>
</div>
@endsection
