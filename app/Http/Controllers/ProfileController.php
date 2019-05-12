<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
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
        $profiles = Profile::with('user')->paginate();
        return view('profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = \App\User::doesntHave('profile')->get();

        if($users->count() == 0) {
            return redirect()->route('profiles.index');
        }

        return view('profiles.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'gender' => 'required',
            'race' => 'required',
            'dob' => 'required',
            'religion' => 'required',
        ]);
        
        $profile = \App\Profile::updateOrCreate([
            'user_id' => $request->user_id,
        ], [
           'gender' => $request->gender,
            'race' => $request->race,
            'dob' => $request->dob,
            'religion' => $request->religion, 
        ]);

        return redirect()->route('profiles.show', $profile);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return view('profiles.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('profiles.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'gender' => 'required',
            'race' => 'required',
            'dob' => 'required',
            'religion' => 'required',
        ]);
        
        $profile = \App\Profile::updateOrCreate([
            'user_id' => $request->user_id,
        ], [
           'gender' => $request->gender,
            'race' => $request->race,
            'dob' => $request->dob,
            'religion' => $request->religion, 
        ]);

        return redirect()->route('profiles.show', $profile);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();

        return redirect()->route('profiles.index');
    }
}
