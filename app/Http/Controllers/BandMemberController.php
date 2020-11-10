<?php

namespace App\Http\Controllers;

use App\Models\BandMembers;
use Illuminate\Http\Request;

class BandMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('member.index')->with('members', BandMembers::all());
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('member.edit')->with('member', BandMembers::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'designation' => 'required',
            'bio' => 'required'
        ]);
        $member = BandMembers::find($id);
        $member->designation = $request->designation;
        $member->name = $request->name;
        $member->bio = $request->bio;
        $member->nickname = $request->nickname;
        $member->facebook = $request->facebook;
        $member->instagram = $request->instagram;
        $member->youtube = $request->youtube;
        $member->email = $request->email;
        $member->save();
        $request->session()->flash('success', 'Member ' . $request->name . ' updated');
        return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}