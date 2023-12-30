@extends('admin.layout.default')
@section('title', 'Admin | Pending User')
@section('page-title', 'Pending User')
@section('present-path', 'Pending User')
@section('content')
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <!-- Dark table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Pending Admin List</h4>
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
                                @foreach ($pendingAdmins as $admin)
                                <tr title="Click '+' for Taking Action">
                                    <td>{{ ucwords($admin->firstName) }} {{ ucwords($admin->lastName) }}</td>
                                    <td>{{ ucwords($admin->role) }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ $admin->number }}</td>
                                    <td>{{ ucwords($admin->address) }}</td>
                                    <td>
                                        <a title="Approve User" class="btn border border-2" href="{{ route('approveUsers',['userId' => $admin->id]) }}"><img style="width: 25px;"
                                                src="{{ asset('assets/images/approve.png') }}" alt=""></a>
                                        <a title="Delete User" class="btn border border-2" href=""><img style="width: 25px;"
                                                src="{{ asset('assets/images/remove.png') }}" alt=""></a>
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
