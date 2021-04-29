@extends ('layouts.index_layout')

@section('content')


<!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="https://wallpaperaccess.com/full/656684.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text">
                    <h1 class="page-title">{{$category->category_name}}</h1>
                    <ul>
                        <li>
                            <a class="active" href="/" style="font-weight:bold">Home</a>
                        </li>
                        <li>{{$category->category_name}}</li>
                    </ul>
                </div>
            </div>
<!-- Breadcrumbs End -->  









<!-- Popular Course Section Start -->
<div class="rs-popular-courses style1 course-view-style orange-color rs-inner-blog white-bg pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 order-last">
                            <div class="widget-area">
                                <div class="search-widget mb-50">
                                    <h3 class="widget-title">Course Search</h3>
                                        <div class="search-wrap">
                                            <form method="get" action="/search">
                                                    <input class="form-control" name="query" placeholder="Search Here..." type="text">
                                                    <br>
                                                    <button type="submit" value="Search"><i class=" flaticon-search"></i></button>
                                            </form>
                                        </div>
                                    <!-- <div class="search-wrap">
                                        <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
                                        <button type="submit" value="Search"><i class=" flaticon-search"></i></button>
                                    </div> -->
                                </div>
                                <div class="widget-archives mb-50">
                                    <h3 class="widget-title">Categories</h3>
                                    <ul class="categories">
                                    @foreach($all_categories as $key => $value)
                                        <li><a href="/categories/{{$value->id}}">{{$value->category_name}}</a></li>
                                    @endforeach
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 pr-50 md-pr-15">                            
                            <div class="course-search-part">
                                <div class="course-view-part">
                                    <div class="view-icons"> 
                                        <a href="#" class="view-grid mr-10"><i class="fa fa-th-large"></i></a> 
                                        <a href="#" class="view-list"><i class="fa fa-list-ul"></i></a>
                                    </div>
                                    <div class="view-text">Showing {{count($courses)}} results</div>
                                </div>
                                <div class="type-form">
                                    <form method="post" action="mailer.php">
                                        <!-- Form Group -->
                                        <div class="form-group mb-0">
                                            <div class="custom-select-box">
                                                <select id="timing">
                                                    <option>Default</option>
                                                    <option>Newest</option>
                                                    <option>Old</option>
                                                </select>
                                            </div>   
                                        </div>
                                    </form>
                                </div>
                            </div>
                           
                            <div class="course-part clearfix">
                            @foreach($courses as $key => $value)
                                <div class="courses-item right">
                                    <div class="img-part">
                                        <img src='{{asset("images/courses/$value->course_image")}}' alt="">
                                        
                                    </div>
                                    <div class="content-part">
                                        <ul class="meta-part">
                                            <li><span class="price" style="font-weight:bold">{{$value->course_price}} JOD</span></li>
                                            <!-- <li><a class="categorie" href="#">{{$value->category->category_name}}</a></li> -->
                                            <br>
                                            <br>
                                            <li class="user" style="list-style-type: none; font-weight:bold"><i class="fa fa-user"></i> Instructor: {{$value->course_instructor}} </li>

                                        </ul>
                                        <h3 class="title"><a href="/courses/{{$value->id}}" style="color:#4169E1; font-weight:bold">{{$value->course_name}}</a></h3>

                                        <div class="bottom-part">
                                            <div class="info-meta">
                                                <ul>
                                                    <!-- <li class="user"><i class="fa fa-user"></i> 245</li> -->
                                                    <!-- <li class="ratings">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        (05)
                                                    </li> -->
                                                </ul>
                                            </div>
                                            <div class="btn-part">
                                            <a href="/courses/{{$value->id}}" style="color: green; font-weight:bold">Start Now <i class="flaticon-right-arrow"></i></a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                                
                            </div>
                            <!-- <div class="pagination-area orange-color text-center mt-30 md-mt-0">
                                <ul class="pagination-part">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">Next <i class="fa fa-long-arrow-right"></i></a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
<!-- Popular Course Section End -->



@endsection