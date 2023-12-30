@extends('admin.layout.default')
@section('title', 'Admin | Location Details')
@section('page-title', 'Location Details')
@section('present-path', 'Location Details')
@section('content')
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <!-- Dark table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Location Details</h4>
                    <div class="data-tables datatable-dark">
                        <table id="dataTable3" class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>ID</th>
                                    <th>Division Name</th>
                                    <th>Districts Name</th>
                                    <th>Sub Districts Name</th>
                                    <th>Unions Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i=0;
                                @endphp
                                @foreach ($data as $d)
                                @php
                                $i++;
                                @endphp
                                <tr title="Click '+' for Taking Action">
                                    <td> {{ $i }} </td>
                                    <td>{{ ucwords($d->division_name) }}</td>
                                    <td>{{ $d->districts_name}}</td>
                                    <td>{{ $d->sub_district_name}}</td>
                                    <td>{{ $d->unions_name}}</td>
                                    <td>
                                        <a title="Edit" class="btn border border-2" href=""><img
                                                style="width: 25px;" src="{{ asset('assets/images/edit.png') }}"
                                                alt=""></a>
                                        <a title="Delete" class="btn border border-2" href=""><img
                                                style="width: 25px;" src="{{ asset('assets/images/remove.png') }}"
                                                alt=""></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dark table end -->
    </div>
</div>
@endsection
