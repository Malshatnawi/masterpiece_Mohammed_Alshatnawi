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
                                    <h3 class="section-title">Edit Lesson</h3>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <form enctype="multipart/form-data" method="post" action="/lessons/{{$lesson->id}}">
                                        @csrf
                                        @method('put')
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Lesson Name</label>
                                                <input id="inputText3" type="text" class="form-control" name="lesson_name" value="{{$lesson->lesson_name}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="input-select">Unit ID</label>
                                                <select class="form-control" id="input-select" name="unit_id">
                                                    <option>{{$lesson->unit_id}}</option>
                                                    @foreach($all_units as $key => $value)
                                                    <option value="{{$value->id}}">{{$value->id}}-{{$value->unit_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Lesson Duration</label>
                                                <input id="inputText3" type="text" class="form-control" name="lesson_duration" value="{{$lesson->lesson_duration}}" >
                                            </div>

                                            <label for="input-select">Lesson Content</label>
                                            <div class="custom-file mb-3">
                                                <label class="custom-file-label" for="customFile">Lesson Content</label>
                                                <input type="file" class="custom-file-input" id="customFile" name="lesson_content">
                                            </div> 
                                            
                                            <button type="submit" class="btn btn-primary">Update Lesson</button>       
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