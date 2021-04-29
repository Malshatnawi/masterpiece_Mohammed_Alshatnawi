<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class AdminController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth:admin');
    }
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
        $all_admins = Admin::all();
        return view ('admin.manage_admins' , compact('all_admins'));
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
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|max:24',
            'role' => 'required',

        ]);

        Admin::create([
            'name'          => $request->name,
            'email'          => $request->email,
            'password'          =>Hash::make($request->password),
            'role'          => $request->role,
            
        ]);

        return redirect('/admins/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view ('admin.edit_admins', compact('admin'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|max:24',
            'role' => 'required',

        ]);

        Admin::where ('id', $admin->id)->update([
            'name'          => $request->name,
            'email'          => $request->email,
            'password'          =>Hash::make($request->password),
            'role'          => $request->role,
            
        ]);

        return redirect('/admins/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->destroy($admin->id);
        return redirect ('/admins/create');
    }
}
