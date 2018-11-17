<?php

namespace App\Http\Controllers;

use App\bezoek_registraties;
use Illuminate\Http\Request;

class BezoekersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function index()
    {
        // Get all registrations
        $bezoekers = bezoek_registraties::all();
        return view('bezoekers.index', compact('bezoekers'));

    }

    public function create()
    {
        return view('bezoekers/create');
    }

    /**
     * Store a new visitor
     *
     * @param Request $request
     * @return reponse
     *
     */
    public function store(Request $request)
    {
       // $lastname = $request->input('lastname');
        // dd(request()->all());

        // Validate Form
         $this->validate(request(), [
        'lastname' => 'required|min:3',
        'firstname' => 'required|min:3',
        'sedula' => 'required|min:10',
        'badge' => 'required',
        'reason' => 'required',
        'person' => 'required',
        'date' => 'required',
        'timein' => 'required',
        ]);

        bezoek_registraties::create(request(['lastname','firstname','sedula','badge','reason',
                'person','date','timein','username']));

        return redirect('/home');

    }

    public function show($id)
    {
        $bezoekers = bezoek_registraties::find($id);
        return view('bezoekers.view', compact('bezoekers'));
    }

    public function edit($id)
    {
        $bezoekers = bezoek_registraties::find($id);
        return view('bezoekers.edit', compact('bezoekers'));
    }

    /**
     * Update the specified visitor
     *
     * @param Request $request
     * @param string $id
     * @return response
     *
     */
    public function update(Request $request, $id)
    {

    }

    public function destroy()
    {

    }

}
