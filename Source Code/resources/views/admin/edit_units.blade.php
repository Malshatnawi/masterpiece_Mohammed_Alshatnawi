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
                                <h2 class="pageheader-title">Manage Taktika Units </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Taktika's Units</li>
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
                                    <h3 class="section-title">Edit Unit</h3>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <form enctype="multipart/form-data" method="post" action="/units/{{$unit->id}}">
                                        @csrf
                                        @method('put')
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Unit Name</label>
                                                <input id="inputText3" type="text" class="form-control" name="unit_name" value="{{$unit->unit_name}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="input-select">Course ID</label>
                                                <select class="form-control" id="input-select" name="course_id">
                                                    <option>{{$unit->course_id}}</option>
                                                    @foreach($all_courses as $key => $value)
                                                    <option value='{{$value->id}}'>{{$value->id}}-{{$value->course_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary">Update Unit</button>       
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