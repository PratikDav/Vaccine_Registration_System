@extends('admin.layout.default')
@section('title', 'Admin | Volunteer')
@section('page-title', 'Volunteer')
@section('present-path', 'Volunteer')
@section('content')
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <!-- Dark table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                        <h4 class="header-title col-md-10">
                             Volunteer Details
                                <a type="button" href="{{ route('show.volunteerForm') }}" class="badge badge-success mt-3 rounded text-white" ><i class="fa fa-plus-square mx-1"></i>Add New Volunteer</a>
                        </h4>
                    <div class="single-table">
                        <div class="data-tables">
                            <table id="dataTable3" class="text-center">
                                <thead class="text-uppercase bg-success">
                                    <tr class="text-white">
                                        <th scope="col">Volunteer ID</th>
                                        <th scope="col">Volunteer Name</th>
                                        <th scope="col">Mobile</th>
                                        {{-- <th scope="col">District</th>
                                        <th scope="col">Sub District</th>
                                        <th scope="col">Union</th> --}}
                                        <th scope="col">Assigned Center</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i=0;
                                    @endphp
                                    @foreach ($allVolunteer as $volunteer)
                                    @php
                                    $i++;
                                    @endphp
                                    <tr>
                                        <td>{{ $volunteer->volunteer_id }}</td>
                                        <td>{{ $volunteer->volunteer_name }}</td>
                                        <td>{{ $volunteer->volunteer_mobile_no }}</td>
                                        <td title="District:-{{ $volunteer->district }}, Sub-District:-{{ $volunteer->sub_district}}, Union:-{{ $volunteer->union}}">{{ $volunteer->center_name }}</td>
                                        <td>
                                            <a type="button"
                                                href="{{ route('editVolunteer', ['volunteer_id' => $volunteer->volunteer_id]) }}"
                                                class="btn rounded" data-toggle="modal" data-target="#editDose"><i
                                                    class="fa fa-edit"></i></a>
                                            <a class="btn"
                                                href="{{ route('deleteVolunteer', ['volunteer_id' => $volunteer->volunteer_id]) }}"
                                                onclick="return confirm('Are you sure?')"><i
                                                    class="fa fa-trash"></i></a>
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
