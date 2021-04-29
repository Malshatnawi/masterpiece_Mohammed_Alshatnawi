<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(session('success')){

            // Alert::success('Success Title', 'Success Message');
            toast( session('success'),'success');

        }
        



        $all_categories = Category::all();
        $latest_courses = Course::oldest()->limit(6)->get();
        return view ('public_website.index' , compact('all_categories', 'latest_courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_categories = Category::all();
        return view ('admin.manage_categories' , compact('all_categories'));
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
            'category_name' => 'required',
            'category_description' => 'required',

        ]);

        if ($request->hasFile('category_image')) {
            $file = $request->file('category_image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('images/categories', $filename);
        } else{
            $filename = 'category.jpg';
        }

        Category::create([
            'category_name'          => $request->category_name,
            'category_description'          => $request->category_description,
            'category_image'         => $filename
        ]);

        return redirect('/categories/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $all_categories = Category::all();
        $courses= $category->courses;
        return view ('public_website.courses_grid', compact('courses','all_categories', 'category'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view ('admin.edit_categories', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        
        $request->validate([
            'category_name' => 'required',
            'category_description' => 'required',

        ]);

        if ($request->hasFile('category_image')) {
            $file = $request->file('category_image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('images/categories', $filename);
        } else{
            $filename = 'category.jpg';
        }

        Category::where ('id', $category->id)->update([
            'category_name'          => $request->category_name,
            'category_description'   => $request->category_description,
            'category_image'         => $filename
        ]);

        return redirect('/categories/create');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->destroy($category->id);
        return redirect ('/categories/create');
    }
}
