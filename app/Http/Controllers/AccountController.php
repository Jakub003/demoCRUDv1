<?php

namespace App\Http\Controllers;

use App\Models\accounts;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = accounts::latest()->paginate(5);
    
        return view('dashboard',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Setting up what is required 
        $request->validate([
            'accountDate' => 'required',
            'accountName' => 'required',
            'accountValue' => 'required',
        ]);

        // Connecting to table to send the request
        accounts::create($request->all());

        // Once the request is submited, what page will be displayed and notification message. 
        return view('dashboard')
                        ->with('success','Transaction added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function show(accounts $accounts)
    {
            // What does the post thing mean here?
        return view('dashboard',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function edit(accounts $accounts)
    {
        return view('dashboard',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, accounts $accounts)
    {
        $request->validate([
            'accountDate' => 'required',
            'accountName' => 'required',
            'accountValue' => 'required'
        ]);
    
        $accounts->update($request->all());
    
        return view('dashboard')
                        ->with('success','Transaction updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(accounts $accounts)
    {
        $accounts->delete();
    
        return view('dashboard')
                        ->with('success','Transaction deleted successfully.');
    }
}
