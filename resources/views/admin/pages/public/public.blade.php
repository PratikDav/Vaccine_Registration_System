@extends('admin.layout.default')
@section('title', 'Admin | Publics')
@section('page-title', 'Publics')
@section('present-path', 'Publics')
@section('content')
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <!-- Dark table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Publics</h4>
                    <div class="data-tables datatable-dark">
                        <table id="dataTable3" class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>Name</th>
                                    <th>Father's Name</th>
                                    <th>Mother's Name</th>
                                    <th>Gender</th>
                                    <th>Nationality</th>
                                    <th>Birth Registration No.</th>
                                    <th>National ID Card No.</th>
                                    <th>Passport No.</th>
                                    <th>Date of Birth</th>
                                    <th>Place of Birth</th>
                                    <th>Permanent Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                <tr title="Click '+' for Taking Action">
                                    <td>{{ ucwords($data->name) }}</td>
                                    <td>{{ ucwords($data->father_name) }}</td>
                                    <td>{{ ucwords($data->mother_name) }}</td>
                                    <td>{{ ucwords($data->gender) }}</td>
                                    <td>{{ ucwords($data->nationality) }}</td>
                                    <td>{{ ucwords($data->birth_reg_no) }}</td>
                                    <td>{{ ucwords($data->nid_no) }}</td>
                                    <td>{{ ucwords($data->passport_no) }}</td>
                                    <td>{{ get_formatted_date($data->dob,"d-M-Y") }}</td>
                                    <td>{{ ucwords($data->place_of_birth) }}</td>
                                    <td>{{ ucwords($data->permanent_address) }}</td>
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
