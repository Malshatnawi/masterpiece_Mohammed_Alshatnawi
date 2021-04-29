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
                                    <h3 class="section-title">Edit Course</h3>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <form enctype="multipart/form-data" method="post" action="/courses/{{$course->id}}">
                                        @csrf
                                        @method('put')
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Course Name</label>
                                                <input id="inputText3" type="text" class="form-control" name="course_name" value="{{$course->course_name}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Course Description</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="course_description">{{$course->course_description}}</textarea>
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
                                                <input id="inputText3" type="text" class="form-control" name="course_price" value="{{$course->course_price}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Course Duration</label>
                                                <input id="inputText3" type="text" class="form-control" name="course_duration" value="{{$course->course_duration}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Course Instructor</label>
                                                <input id="inputText3" type="text" class="form-control" name="course_instructor" value="{{$course->course_instructor}}">
                                            </div>
                                            <label for="input-select">Course Trailer</label>
                                            <div class="custom-file mb-3">
                                                <label class="custom-file-label" for="customFile">Course Trailer</label>
                                                <input type="file" class="custom-file-input" id="customFile" name="course_trailer">
                                            </div>   
                                            <button type="submit" class="btn btn-primary">Update Course</button>       
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