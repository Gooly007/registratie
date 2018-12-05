<?php

namespace App\Http\Controllers;

use App\bezoek_registraties;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
        // $bezoekers = bezoek_registraties::all();
        $bezoekers = bezoek_registraties::where('timeout', null)->get();
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
        'badge' => 'required|min:1|max:5',
        'reason' => 'required',
        'person' => 'required',
        'date' => 'required',
        'timein' => 'required',
        ]);

        //$bz = bezoek_registraties::where('timeout', NULL)->where('sedula', '1978011001')->pluck('id');
        $bz = bezoek_registraties::whereNull('timeout')->where('sedula', request(['sedula']))->pluck('id');
            // Check if array is empty
            if (!$bz->isEmpty()) {

                // is not empty
                return redirect('bzregister')->withInput()->with('error', 'Bezoeker is al geregistreerd! Je nieuw registratie is niet voltooid.');
                //return redirect('/home')->with('error', 'Bezoeker is al geregistreerd! Je nieuw registratie is niet voltooid.');

            } else {

               // echo 'is empty';
               bezoek_registraties::create(request(['lastname','firstname','sedula','badge','reason',
               'person','date','timein','username']));
               return redirect('/home')->with('success', 'Entry added successfully!');

            }
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
    public function update($id)
    {
        // dd(request()->all());
        $bezoekers = bezoek_registraties::find($id);
        $bezoekers->platenumber = request('platenumber');
        $bezoekers->reason = request('reason');
        $bezoekers->particularities = request('particularities');

        $bezoekers->save();

        return redirect('/home')->with('success', 'Entry updated successfully!');
    }

    public function tijduit($id)
    {
        $bezoekers = bezoek_registraties::find($id);
        $current = Carbon::now(-3)->format('H:i');
        $bezoekers->timeout = $current;
        $bezoekers->save();
        return redirect('/home')->with('success', 'Bezoeker is verwijderd!');
    }

    public function destroy()
    {

    }

}
