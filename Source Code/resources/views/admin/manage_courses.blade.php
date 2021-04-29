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
                                <h2 class="pageheader-title">Manage Taktika Courses </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Taktika's Courses</li>
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
                                    <h3 class="section-title">Add New Course</h3>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <form enctype="multipart/form-data" method="post" action="/courses">
                                        @csrf
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Course Name</label>
                                                <input id="inputText3" type="text" class="form-control" name="course_name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Course Description</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="course_description"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="input-select">Category ID</label>
                                                <select class="form-control" id="input-select" name="category_id">
                                                    <option>Select Category Id</option>
                                                    @foreach($all_categories as $key => $value)
                                                    <option value="{{$value->id}}">{{$value->id}}-{{$value->category_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <label for="input-select">Course Image</label>
                                            <div class="custom-file mb-3">
                                                <label class="custom-file-label" for="customFile">Course Image</label>
                                                <input type="file" class="custom-file-input" id="customFile" name="course_image">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Course Price</label>
                                                <input id="inputText3" type="text" class="form-control" name="course_price">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Course Duration</label>
                                                <input id="inputText3" type="text" class="form-control" name="course_duration">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Course Instructor</label>
                                                <input id="inputText3" type="text" class="form-control" name="course_instructor">
                                            </div>
                                            <label for="input-select">Course Trailer</label>
                                            <div class="custom-file mb-3">
                                                <label class="custom-file-label" for="customFile">Course Trailer</label>
                                                <input type="file" class="custom-file-input" id="customFile" name="course_trailer">
                                            </div>   
                                            <button type="submit" class="btn btn-primary">Add Course</button>       
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
                            <h3>Courses Table</h3>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Course ID</th>
                                                        <th scope="col">Course Name</th>
                                                        <th scope="col">Category ID</th>
                                                        <th scope="col">Course Description</th>
                                                        <th scope="col">Course Image</th>
                                                        <th scope="col">Course Price</th>
                                                        <th scope="col">Course Duration</th>
                                                        <th scope="col">Course Instructor</th>
                                                        <th scope="col">Course Trailer</th>
                                                        <th scope="col">Course Edit</th>
                                                        <th scope="col">Course Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($all_courses as $key => $value)
                                                    <tr>
                                                        <td>{{$value->id}}</td>
                                                        <td>{{$value->course_name}}</td>
                                                        <td>{{$value->category_id}}</td>
                                                        <td>{{$value->course_description}}</td>
                                                        <td><img src='{{asset("images/courses/$value->course_image")}}' width="150em" height="150em" alt=""></td>
                                                        <td>{{$value->course_price}}</td>
                                                        <td>{{$value->course_duration}}</td>
                                                        <td>{{$value->course_instructor}}</td>
                                                        <td><video src='{{asset("videos/courses/$value->course_trailer")}}' width="200em" height="200em" controls>Your browser does not support the video tag.</video></td>
                                                        <td><a href="/courses/{{$value->id}}/edit"><button class="btn btn-primary">Edit</button></a></td>
                                                        <td>
                                                        <form method="post" action="/courses/{{$value->id}}">
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