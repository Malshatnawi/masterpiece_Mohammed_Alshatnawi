<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/index', function () {
//     return view('public_website.index');
// });


// Route::get('/courses', function () {
//     return view('public_website.courses_grid');
// });


Route::get('/singlecourse', function () {
    return view('public_website.single_course');
});


// Route::get('/cart', function () {
//     return view('public_website.cart');
// });



// Route::get('/checkout', function () {
//     return view('public_website.checkout');
// });

Route::get('/dashboard', function () {
    return view('layouts.admin_layout');
});


// Route::get('/manage_courses', function () {
//     return view('admin.manage_courses');
// });


// Route::get('/edit_courses', function () {
//     return view('admin.edit_courses');
// });






// Route::get('/edit_categories', function () {
//     return view('admin.edit_categories');
// });


Route::get('/manage_users', function () {
    return view('admin.manage_users');
});


// Route::get('/manage_lessons', function () {
//     return view('admin.manage_lessons');
// });

// Route::get('/edit_lessons', function () {
//     return view('admin.edit_lessons');
// });


// Route::get('/manage_admins', function () {
//     return view('admin.manage_admins');
// });


// Route::get('/edit_admins', function () {
//     return view('admin.edit_admins');
// });


// Route::get('/manage_units', function () {
//     return view('admin.manage_units');
// });


// Route::get('/edit_units', function () {
//     return view('admin.edit_units');
// });


Route::get('/manage_orders', function () {
    return view('admin.manage_orders');
});
Route::get('/testing', function () {
    return view('public_website.testinglogIn');
});



// Categories Routes
Route::get('/categories/create','CategoryController@create');
Route::post('/categories','CategoryController@store');
Route::delete('/categories/{category}','CategoryController@destroy');
Route::get('/categories/{category}/edit','CategoryController@edit');
Route::put('/categories/{category}','CategoryController@update');
// Homepage Route
Route::get('/','CategoryController@index')->name('homepage');
//Grid Page
Route::get('/categories/{category}','CategoryController@show');





// Courses Routes
Route::get('/courses/create','CourseController@create');
Route::post('/courses','CourseController@store');
Route::delete('/courses/{course}','CourseController@destroy');
Route::get('/courses/{course}/edit','CourseController@edit');
Route::put('/courses/{course}','CourseController@update');
//single course
Route::get('/courses/{course}','CourseController@show');
//course add to cart 
Route::post('/addtocart/{course}','CourseController@AddToCart')->name('course.addtocart');
//go to cart
Route::get('/cart' , 'CourseController@getCart');
//delete from cart
Route::get('cart/{key}/delete', 'CourseController@deleteFromCart')->name('deleteFromCart');
//go to checkout
Route::get('/checkout' , 'CourseController@getCheckout')->middleware('auth');
//go to charge
Route::post('/charge' , 'CourseController@getCharge');
//search courses
Route::get('/search','CourseController@search');





// Units Routes
Route::get('/units/create','UnitController@create');
Route::post('/units','UnitController@store');
Route::delete('/units/{unit}','UnitController@destroy');
Route::get('/units/{unit}/edit','UnitController@edit');
Route::put('/units/{unit}','UnitController@update');



// Lessons Routes
Route::get('/lessons/create','LessonController@create');
Route::post('/lessons','LessonController@store');
Route::delete('/lessons/{lesson}','LessonController@destroy');
Route::get('/lessons/{lesson}/edit','LessonController@edit');
Route::put('/lessons/{lesson}','LessonController@update');




// Admins Routes
Route::get('/admins/create','AdminController@create')->name('admin.dashboard');
Route::post('/admins','AdminController@store');
Route::delete('/admins/{admin}','AdminController@destroy');
Route::get('/admins/{admin}/edit','AdminController@edit');
Route::put('/admins/{admin}','AdminController@update');



// Users Routes
Route::get('/users/create','UserController@create')->name('user.dashboard');
Route::post('/users','UserController@store');
Route::delete('/users/{user}','UserController@destroy');
Route::get('/users/{user}/edit','UserController@edit');
Route::put('/users/{user}','UserController@update');










//Auth Routes
Auth::routes();

Route::get('/login' , 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/register' , 'Auth\RegisterController@showRegisterForm')->name('register');
// Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){

    Route::get('/login' , 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/logout' , 'Auth\AdminLoginController@adminLogout')->name('admin.logout');
    Route::post('/login' , 'Auth\AdminLoginController@login')->name('admin.login.submit');
    // Route::get("/", "AdminController@show")->name('admin.dashboard');

    //password reset routes
    Route::post('/password/email' , 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset' , 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset' , 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}' , 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    
    
    });








// Orders Routes
Route::get('/orders','OrderController@index')->name('order.index')->middleware('auth');
Route::get('/orders/create','OrderController@create')->name('order.dashboard');





