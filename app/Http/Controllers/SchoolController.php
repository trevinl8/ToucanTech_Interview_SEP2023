<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\School;
use DB;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        if (!empty($request->school))
        {
            $members = DB::table('member_school')
                   ->join('schools', 'schools.id', '=', 'member_school.school_id')
                   ->join('members', 'members.id', '=', 'member_school.member_id')
                   ->select('members.name')
                   ->where('member_school.school_id', '=', $request->school)
                   ->get();
        }
        else
        {
            $members = null;
        }

        //dd($members);
       return view ('home')->withMembers($members);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
