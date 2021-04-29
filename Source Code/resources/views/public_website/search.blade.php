@extends ('layouts.index_layout')

@section('content')


<!-- Breadcrumbs Start -->
            <!-- <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="https://images.fineartamerica.com/images/artworkimages/mediumlarge/1/nyc-skyline-christopher-haughian.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text">
                    <h1 class="page-title">Course Grid 01</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Course</li>
                    </ul>
                </div>
            </div> -->
<!-- Breadcrumbs End -->  









<!-- Popular Courses Section Start -->
<div id="rs-popular-courses" class="rs-popular-courses style3 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">    
                <div><h2 style="text-align:center;margin-bottom:1em; color:#9cc63d">Seach Results</h2></div>              
                    <div class="row">                     
                       
                       @foreach($search_courses as $key => $value)

                        <div class="col-lg-4 col-md-6 col-sm-6 mb-40">
                            <div class="courses-item">
                                <div class="img-part">
                                    <img src='{{asset("images/courses/$value->course_image")}}' alt="">
                                </div>
                                <div class="content-part">
                                    <span><a class="categories" href="#">{{$value->category->category_name}}</a></span>
                                    <ul class="meta-part">
                                        <li class="user"><i class="fa fa-user"></i> Instructor: {{$value->course_instructor}} </li>
                                    </ul>
                                    <h3 class="title"><a href="/courses/{{$value->id}}" style="color:#4169E1	">{{$value->course_name}}</a></h3>
                                    <div class="bottom-part">
                                        <!-- <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                            </ul>
                                        </div> -->

                                        <div class="btn-part">
                                            <a href="/courses/{{$value->id}}" style="color:#9cc63d; font-weight:bold">Resume course >></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                        
                    </div>
                </div>
            </div>
            <!-- Popular Courses Section End -->



@endsection