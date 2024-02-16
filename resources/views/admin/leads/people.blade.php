@extends('admin.layout.layout')
@section('content')
    <div class="section-body">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="d-lg-flex justify-content-between">
                        <ul class="nav nav-tabs page-header-tab">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab"
                                    href="#Company_Settings">List</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Localization">New</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Roles_Permissions">Edit</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-body">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="Company_Settings">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">People</h3>
                                    <div class="card-options">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                                class="fa fa-arrow-down"></i></a>
                                        <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i
                                                class="fa fa-television"></i></a>
                                        <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                                class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
