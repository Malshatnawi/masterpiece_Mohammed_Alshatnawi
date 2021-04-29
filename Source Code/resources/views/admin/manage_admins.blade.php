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
                                    <h3 class="section-title">Add New Admin</h3>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <form enctype="multipart/form-data" method="post" action="/admins" >
                                        @csrf
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Admin Name</label>
                                                <input id="inputText3" type="text" class="form-control" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Admin Email</label>
                                                <input id="inputText3" type="text" class="form-control" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Admin Password</label>
                                                <input id="inputText3" type="password" class="form-control" name="password">
                                            </div>
                                            <div class="form-group">
                                                <label for="input-select">Admin Role</label>
                                                <select class="form-control" id="input-select" name="role">
                                                    <option>Select Admin Role</option>
                                                    <option>Super Admin</option>
                                                    <option>Admin</option>
                                                </select>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary">Add Admin</button>       
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form  -->
                        <!-- ============================================================== -->


                        <!-- ============================================================== -->
                        <!-- responsive table -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h3>Admins Table</h3>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Admin ID</th>
                                                        <th scope="col">Admin Name</th>
                                                        <th scope="col">Admin Email</th>
                                                        <th scope="col">Admin Role</th>
                                                        <th scope="col">Admin Edit</th>
                                                        <th scope="col">Admin Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($all_admins as $key => $value)
                                                    <tr>
                                                        <td>{{$value->id}}</td>
                                                        <td>{{$value->name}}</td>
                                                        <td>{{$value->email}}</td>
                                                        <td>{{$value->role}}</td>
                                                        <td><a href="/admins/{{$value->id}}/edit"><button class="btn btn-primary">Edit</button></a></td>
                                                        <td>
                                                        <form method="post" action="/admins/{{$value->id}}">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger">Delete</button>
                                                        </form></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end responsive table -->
                        <!-- ============================================================== -->
                        
                    </div>
                </div>
            </div>




@endsection