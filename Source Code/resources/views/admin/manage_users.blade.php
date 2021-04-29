@extends('layouts.admin_layout')

@section('content')


            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Manage Taktika Users </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Taktika's Users</li>
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
                                    <h3 class="section-title">Add New User</h3>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <form enctype="multipart/form-data" method="post" action="/users" >
                                        @csrf
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">User Name</label>
                                                <input id="inputText3" type="text" class="form-control" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">User Email</label>
                                                <input id="inputText3" type="text" class="form-control" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">User Password</label>
                                                <input id="inputText3" type="password" class="form-control" name="password">
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary">Add User</button>       
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
                            <h3>Users Table</h3>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table class="table">
                                            <thead>
                                                    <tr>
                                                        <th scope="col">User ID</th>
                                                        <th scope="col">User Name</th>
                                                        <th scope="col">User Email</th>
                                                        <th scope="col">User Edit</th>
                                                        <th scope="col">User Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($all_users as $key => $value)
                                                    <tr>
                                                        <td>{{$value->id}}</td>
                                                        <td>{{$value->name}}</td>
                                                        <td>{{$value->email}}</td>
                                                        <td><a href="/users/{{$value->id}}/edit"><button class="btn btn-primary">Edit</button></a></td>
                                                        <td>
                                                        <form method="post" action="/users/{{$value->id}}">
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