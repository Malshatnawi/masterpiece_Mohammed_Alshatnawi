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
                                <h2 class="pageheader-title">Manage Taktika Categories </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Taktika's Categories</li>
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
                                    <h3 class="section-title">Add New Categories</h3>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <form enctype="multipart/form-data" method="post" action="/categories">
                                        @csrf
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Category Name</label>
                                                <input id="inputText3" type="text" class="form-control" name="category_name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Category Description</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="category_description"></textarea>
                                            </div>
                                            
                                            <label for="input-select">Category Image</label>
                                            <div class="custom-file mb-3">
                                                <label class="custom-file-label" for="customFile">Category Image</label>
                                                <input type="file" class="custom-file-input" id="customFile" name="category_image">
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary">Add Category</button>       
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
                            <h3>Categories Table</h3>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Category ID</th>
                                                        <th scope="col">Category Name</th>
                                                        <th scope="col">Category Description</th>
                                                        <th scope="col">Category Image</th>
                                                        <th scope="col">Category Edit</th>
                                                        <th scope="col">Category Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($all_categories as $key => $value)
                                                    <tr>
                                                        <td>{{$value->id}}</td>
                                                        <td>{{$value->category_name}}</td>
                                                        <td>{{$value->category_description}}</td>
                                                        <td><img src='{{asset("images/categories/$value->category_image")}}' height="100em" width="100em" alt=""></td>
                                                        <td><a href="/categories/{{$value->id}}/edit"><button class="btn btn-primary">Edit</button></a></td>
                                                        <td>
                                                        <form method="post" action="/categories/{{$value->id}}">
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