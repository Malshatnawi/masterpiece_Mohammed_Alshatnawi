<?php

namespace App\Http\Controllers;

use App\Course;
use App\Category;
use App\Unit;
use App\Cart;
use App\Order;
use Auth;

use Session;
use  Cartalyst\Stripe\Laravel\Facades\Stripe;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $all_categories=Category::all();
        $all_courses = Course::all();
        return view ('admin.manage_courses' , compact('all_courses', 'all_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'course_name' => 'required',
            'course_description' => 'required',
            'category_id' => 'required',
            'course_price' =>'required',
            'course_duration' => 'required',
            'course_instructor' => 'required',
            'course_trailer' => 'required'

        ]);

        if ($request->hasFile('course_image')) {
            $file = $request->file('course_image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('images/courses', $filename);
        } else{
            $filename = 'course.jpg';
        }

        if ($request->hasFile('course_trailer')) {
            $trailer = $request->file('course_trailer') ;
            $ext = $trailer->getClientOriginalExtension() ;
            $trailer_video = time() . '.' . $ext ;
            $trailer->move('videos/courses', $trailer_video);
        }



        Course::create([
            'course_name'                   => $request->course_name,
            'category_id'                   =>$request->category_id,
            'course_description'            => $request->course_description,
            'course_image'                  => $filename,
            'course_price'                  =>$request->course_price,
            'course_duration'               =>$request->course_duration,
            'course_instructor'             =>$request->course_instructor,
            'course_trailer'                =>$trailer_video,
        ]);

        return redirect('/courses/create');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {

        if(Auth::check()){
            $orders = auth()->user()->orders;
            // dd($orders);
            $user_courses = $orders->transform( function( $cart, $key) {
                return unserialize($cart->cart);
            });
        }else{
            $user_courses = null;
        }

        // dd($user_courses);
        // $orders = auth()->user()->orders;
        // dd($orders);
        // $user_courses = $orders->transform( function( $cart, $key) {
        //     return unserialize($cart->cart);
        // });

        // dd($user_courses);

        $all_categories=Category::all();
        $all_units = Unit::all();
        return view ('public_website.single_course', compact('course','all_categories', 'all_units', 'user_courses' , "user_courses"));
    }


    public function AddToCart(Request $request, Course $course)
    {
        // dd($request->session()->has('cart'));
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($course , $course->id);

        $request->session()->put('cart' , $cart);
        // dd($oldCart);
        // dd($request->session()->has('cart'));

        // dd($request->session()->get('cart'));

        return redirect('/');
    }

    public function getCart(Request $request)
    {
        $all_categories=Category::all();
        if(!Session::has('cart')){
            return view ('public_website.cart' , compact('all_categories'));
        }
        else{
            $oldCart = Session::get('cart');
            $cart = new Cart ($oldCart);
            $cartedCourses = $cart->items;
            $The_Total_Price = $cart->totalPrice;
            return view ('public_website.cart', compact('cartedCourses', 'The_Total_Price', 'all_categories'));
        }  
    }




    public function deleteFromCart(Request $request,$key){
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->delete($key);
        $request->session()->put('cart' , $cart);

        return redirect('/cart');
       
    }


    public function getCheckout(Request $request)
    {
        $all_categories=Category::all();
        if(!Session::has('cart')){
            return view ('public_website.cart' , compact('all_categories'));
        }
        else{
            $oldCart = Session::get('cart');
            $cart = new Cart ($oldCart);
            $The_Total_Price = $cart->totalPrice;
            return view ('public_website.checkout', compact('The_Total_Price', 'all_categories'));
        }
        

        
    }



    public function getCharge(Request $request){

        // dd($request->stripeToken);

        $charge = Stripe::charges()->create([

            'currency' => 'USD',
            'source' => $request->stripeToken,
            'amount'   => $request->amount,
            'description' => 'Test from laravel new app'



        ]);



        $chargeId = $charge['id'];

        if ($chargeId) {
            // save order in orders table ...

            Order::create([
                'user_id'                       => Auth::id(),
                'order_value'                   => $request->amount,
                'cart'                          =>serialize( session()->get('cart')),
            ]);

            // clearn cart 

            session()->forget('cart');  
            return redirect()->route('homepage')->with('success', " Payment was successfully done. Thanks");
        } else {
            return redirect()->back();
        }

    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $all_categories=Category::all();
        return view ('admin.edit_courses', compact('course','all_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'course_name' => 'required',
            'course_description' => 'required',
            'category_id' => 'required',
            'course_price' =>'required',
            'course_duration' => 'required',
            'course_instructor' => 'required',
            'course_trailer' => 'required'

        ]);

        if ($request->hasFile('course_image')) {
            $file = $request->file('course_image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('images/courses', $filename);
        } else{
            $filename = 'course.jpg';
        }

        if ($request->hasFile('course_trailer')) {
            $trailer = $request->file('course_trailer') ;
            $ext = $trailer->getClientOriginalExtension() ;
            $trailer_video = time() . '.' . $ext ;
            $trailer->move('videos/courses', $trailer_video);
        }



        Course::where ('id', $course->id)->update([
            'course_name'                   => $request->course_name,
            'category_id'                   =>$request->category_id,
            'course_description'            => $request->course_description,
            'course_image'                  => $filename,
            'course_price'                  =>$request->course_price,
            'course_duration'               =>$request->course_duration,
            'course_instructor'             =>$request->course_instructor,
            'course_trailer'                =>$trailer_video,
        ]);

        return redirect('/courses/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->destroy($course->id);
        return redirect ('/courses/create');
    }



    public function search(){

        $all_categories=Category::all();
        $search_text = $_GET['query'];
        $search_courses = Course::where('course_name', 'LIKE' , '%'.$search_text.'%')->get();
        // dd($search_courses);
        return view ('public_website.search', compact('search_courses', 'all_categories'));

        
    }
}
