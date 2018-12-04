<?php

namespace App\Http\Controllers;

use App\Useradmin;
use Illuminate\Http\Request;

class UseradminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = Useradmin::all();
        return view('admin.index', compact('users'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Useradmin  $useradmin
     * @return \Illuminate\Http\Response
     */
    public function show(Useradmin $useradmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Useradmin  $useradmin
     * @return \Illuminate\Http\Response
     */
    public function edit(Useradmin $useradmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Useradmin  $useradmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Useradmin $useradmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Useradmin  $useradmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Useradmin $useradmin)
    {
        //
    }
}
