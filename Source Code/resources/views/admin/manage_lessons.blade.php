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
                                <h2 class="pageheader-title">Manage Taktika Lessons </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Taktika's Lessons</li>
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
                                    <h3 class="section-title">Add New Lesson</h3>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <form enctype="multipart/form-data" method="post" action="/lessons">
                                        @csrf
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Lesson Name</label>
                                                <input id="inputText3" type="text" class="form-control" name="lesson_name">
                                            </div>
                                            <div class="form-group">
                                                <label for="input-select">Unit ID</label>
                                                <select class="form-control" id="input-select" name="unit_id">
                                                    <option>Select Unit ID</option>
                                                    @foreach($all_units as $key => $value)
                                                    <option value="{{$value->id}}">{{$value->id}}-{{$value->unit_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Lesson Duration</label>
                                                <input id="inputText3" type="text" class="form-control" name="lesson_duration">
                                            </div>

                                            <label for="input-select">Lesson Content</label>
                                            <div class="custom-file mb-3">
                                                <label class="custom-file-label" for="customFile">Lesson Content</label>
                                                <input type="file" class="custom-file-input" id="customFile" name="lesson_content">
                                            </div> 
                                            
                                            <button type="submit" class="btn btn-primary">Add Lesson</button>       
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
                            <h3>Lessons Table</h3>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Lesson ID</th>
                                                        <th scope="col">Lesson Name</th>
                                                        <th scope="col">Unit ID</th>
                                                        <th scope="col">Lesson Duration</th>
                                                        <th scope="col">Lesson Content</th>
                                                        <th scope="col">Category Edit</th>
                                                        <th scope="col">Category Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($all_lessons as $key => $value)
                                                    <tr>
                                                        <td>{{$value->id}}</td>
                                                        <td>{{$value->lesson_name}}</td>
                                                        <td>{{$value->unit_id}}</td>
                                                        <td>{{$value->lesson_duration}}</td>
                                                        <td><video src='{{asset("videos/lessons/$value->lesson_content")}}' width="200em" height="200em" controls>Your browser does not support the video tag.</video></td>
                                                        <td><a href="/lessons/{{$value->id}}/edit"><button class="btn btn-primary">Edit</button></a></td>
                                                        <td>
                                                        <form method="post" action="/lessons/{{$value->id}}">
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