<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\User\Register;
use Illuminate\Http\Request;
use Auth;


class ManualRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.user.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Register $request)
    {
        $data = array(
            'name'  => $request->name,
            'email' => $request->email,
            'password' => \bcrypt($request->password),
            'occupation' => $request->occupation,
            'phone' => $request->phone,
        );
        User::create($data);
        return redirect(route('login'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ManualRegister  $manualRegister
     * @return \Illuminate\Http\Response
     */
    public function show(ManualRegister $manualRegister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManualRegister  $manualRegister
     * @return \Illuminate\Http\Response
     */
    public function edit(ManualRegister $manualRegister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManualRegister  $manualRegister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManualRegister $manualRegister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManualRegister  $manualRegister
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManualRegister $manualRegister)
    {
        //
    }
}
