@extends('admin.layout.default')
@section('title', 'Admin | Zero Applicants')
@section('page-title', 'Zero Applicants')
@section('present-path', 'Zero Applicants')
@section('content')
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <!-- Dark table start -->
        {{-- Zero Dosed Applicants Start --}}
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Zero Dosed Applicants</h4>
                    <div class="data-tables datatable-dark">
                        <table id="dataTable3" class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($zeroDosedApplicants as $applicant)
                                <tr title="Click '+' for Taking Action">
                                    <td>{{ ucwords($applicant->firstName) }} {{ ucwords($applicant->lastName) }}</td>
                                    <td>{{ ucwords($applicant->role) }}</td>
                                    <td>{{ $applicant->email }}</td>
                                    <td>{{ $applicant->email }}</td>
                                    <td>{{ ucwords($applicant->address) }}</td>
                                    <td>
                                        <a title="Approve User" class="btn border border-2" href=""><img
                                                style="width: 25px;" src="{{ asset('assets/images/approve.png') }}"
                                                alt=""></a>
                                        <a title="Delete User" class="btn border border-2" href=""><img
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
        {{-- Zero Dosed Applicants End --}}
        <!-- Dark table end -->
    </div>
</div>
@endsection
