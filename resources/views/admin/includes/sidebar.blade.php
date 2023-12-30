<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{ route('show.Dashboard') }}" >
                <img class="rounded" src="{{ asset('website/images/Screenshot_6.png') }}" alt="logo">
                <p class="fw-semibold fs-6">
                    <span style="color: #0ca0f2">Get a Drop,</span><br>
                    <span style="color: #36b990">Stop the Strop.</span>
                </p>
            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="active">
                        <a href="{{ route('show.Dashboard') }}" aria-expanded="true"><i
                                class="ti-dashboard"></i><span>dashboard</span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i><span>Admins Module</span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('addAdmin') }}">Add Admin</a></li>
                            <li><a href="{{ route('pendingAdmin.list') }}">Pending User</a></li>
                            <li><a href="{{ route('allAdmin.list') }}">All Admins</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i><span>Applicants Module</span></a>
                        <ul class="collapse">
                            {{-- <li><a href="{{ route('show.allApplicants') }}">All Applicants</a></li> --}}
                            <li><a href="#" aria-expanded="true">Applicants</a>
                                <ul class="collapse">
                                    <li><a href="">All Applicants</a></li>
                                    <li><a href="">Zero Dosed Applicants</a></li>
                                    <li><a href="">First Dosed Applicants</a></li>
                                    <li><a href="">Second Dosed Applicants</a></li>
                                    <li><a href="">Third Dosed Applicants</a></li>
                                    <li><a href="">Vaccinated Applicants</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('addApplicant') }}">Add Applicant</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-eyedropper"></i><span>Vaccine Module</span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('show.allVaccine') }}">All Vaccine</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-eyedropper"></i><span>Dose Module</span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('show.allDose') }}">All Dose</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-eyedropper"></i><span>Volunteer Module</span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('show.allVolunteer') }}">All Volunteer</a></li>
                            <li><a href="{{ route('show.volunteerForm') }}">Add Volunteer</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-eyedropper"></i><span>Vaccine Cente Module</span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('show.allVaccineCenter') }}">All Centers</a></li>
                            <li><a href="{{ route('show.VaccineCenterForm') }}">Add Center</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-eyedropper"></i><span>Locations Module</span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('showLocationDetails') }}">Location in Details</a></li>
                            <li><a href="{{ route('show.DivisionManage') }}">Manage Division</a></li>
                            <li><a href="{{ route('showDistrictManage') }}">Manage District</a></li>
                            <li><a href="{{ route('showSubDistrictManage') }}">Manage Sub Distric</a></li>
                            <li><a href="{{ route('showUnionManage') }}">Manage Union</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i><span>Public Module</span></a>
                        <ul class="collapse">
                            <li><a href="{{ route('show.public') }}">Public List</a></li>
                            <li><a href="{{ route('show.registerPublicForm') }}">Add New Public</a></li>
                        </ul>
                    </li>

                    {{-- <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i
                                class="ti-layout-sidebar-left"></i><span>Sidebar
                                Types
                            </span></a>
                        <ul class="collapse">
                            <li><a href="index.html">Left Sidebar</a></li>
                            <li><a href="index3-horizontalmenu.html">Horizontal Sidebar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>UI
                                Features</span></a>
                        <ul class="collapse">
                            <li><a href="accordion.html">Accordion</a></li>
                            <li><a href="alert.html">Alert</a></li>
                            <li><a href="badge.html">Badge</a></li>
                            <li><a href="button.html">Button</a></li>
                            <li><a href="button-group.html">Button Group</a></li>
                            <li><a href="cards.html">Cards</a></li>
                            <li><a href="dropdown.html">Dropdown</a></li>
                            <li><a href="list-group.html">List Group</a></li>
                            <li><a href="media-object.html">Media Object</a></li>
                            <li><a href="modal.html">Modal</a></li>
                            <li><a href="pagination.html">Pagination</a></li>
                            <li><a href="popovers.html">Popover</a></li>
                            <li><a href="progressbar.html">Progressbar</a></li>
                            <li><a href="tab.html">Tab</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="form.html">Form</a></li>
                            <li><a href="grid.html">grid system</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-slice"></i><span>icons</span></a>
                        <ul class="collapse">
                            <li><a href="fontawesome.html">fontawesome icons</a></li>
                            <li><a href="themify.html">themify icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                            <span>Tables</span></a>
                        <ul class="collapse">
                            <li><a href="table-basic.html">basic table</a></li>
                            <li><a href="table-layout.html">table layout</a></li>
                            <li><a href="datatable.html">datatable</a></li>
                        </ul>
                    </li>
                    <li><a href="maps.html"><i class="ti-map-alt"></i> <span>maps</span></a></li>
                    <li><a href="invoice.html"><i class="ti-receipt"></i> <span>Invoice Summary</span></a></li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layers-alt"></i>
                            <span>Pages</span></a>
                        <ul class="collapse">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="login2.html">Login 2</a></li>
                            <li><a href="login3.html">Login 3</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="register2.html">Register 2</a></li>
                            <li><a href="register3.html">Register 3</a></li>
                            <li><a href="register4.html">Register 4</a></li>
                            <li><a href="screenlock.html">Lock Screen</a></li>
                            <li><a href="screenlock2.html">Lock Screen 2</a></li>
                            <li><a href="reset-pass.html">reset password</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-exclamation-triangle"></i>
                            <span>Error</span></a>
                        <ul class="collapse">
                            <li><a href="404.html">Error 404</a></li>
                            <li><a href="403.html">Error 403</a></li>
                            <li><a href="500.html">Error 500</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-align-left"></i>
                            <span>Multi
                                level menu</span></a>
                        <ul class="collapse">
                            <li><a href="#">Item level (1)</a></li>
                            <li><a href="#">Item level (1)</a></li>
                            <li><a href="#" aria-expanded="true">Item level (1)</a>
                                <ul class="collapse">
                                    <li><a href="#">Item level (2)</a></li>
                                    <li><a href="#">Item level (2)</a></li>
                                    <li><a href="#">Item level (2)</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Item level (1)</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </nav>
        </div>
    </div>
</div>
