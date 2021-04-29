@extends('layouts.admin_layout')

@section('content')

@if(Auth::guard('admin')->user()->role !== "Super Admin")
    @php
        header("Location: " . URL::to('/categories/create'), true, 302);
        exit();
    @endphp
@endif


            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Manage Taktika Admins </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Taktika's Admins</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Edit Admin</h3>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <form enctype="multipart/form-data" method="post" action="/admins/{{$admin->id}}">
                                        @csrf
                                        @method('put')
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Admin Name</label>
                                                <input id="inputText3" type="text" class="form-control" name="name" value="{{$admin->name}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Admin Email</label>
                                                <input id="inputText3" type="text" class="form-control" name="email" value="{{$admin->email}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Admin Password</label>
                                                <input id="inputText3" type="password" class="form-control" name="password" >
                                            </div>
                                            <div class="form-group">
                                                <label for="input-select">Admin Role</label>
                                                <select class="form-control" id="input-select" name="role">
                                                    <option>{{$admin->role}}</option>
                                                    <option>Super Admin</option>
                                                    <option>Admin</option>
                                                </select>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary">Update Admin</button>       
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form  -->
                        <!-- ============================================================== -->

                        
                    </div>
                </div>
            </div>




@endsection