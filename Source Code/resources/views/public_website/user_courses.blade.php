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
                <div style="background-color:#1c3348"><h2 style="text-align:center;margin-bottom:1em; color:#9cc63d">{{Auth::user()->name}}'s courses</h2></div>              
                    <div class="row">                     
                       
                       @foreach($user_courses as $key => $value)
                       @foreach($value->items as $key1 => $value1)

                        <!-- {{$course = $value1['item']}} -->
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-40">
                            <div class="courses-item">
                                <div class="img-part">
                                    <img src='{{asset("images/courses/$course->course_image")}}' alt="">
                                </div>
                                <div class="content-part">
                                    <span><a class="categories" href="#">{{$course->category->category_name}}</a></span>
                                    <ul class="meta-part">
                                        <li class="user"><i class="fa fa-user"></i> Instructor: {{$course->course_instructor}} </li>
                                        <!-- <li><span class="price">{{$course->course_price}} JD</span></li> -->
                                    </ul>
                                    <h3 class="title"><a href="/courses/{{$course->id}}" style="color:#4169E1	">{{$course->course_name}}</a></h3>
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
                                            <a href="/courses/{{$course->id}}" style="color:#9cc63d; font-weight:bold">Resume course >></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endforeach
                       
                        
                    </div>
                </div>
            </div>
            <!-- Popular Courses Section End -->



@endsection