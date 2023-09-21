<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Member;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $schoolcount = DB::table('member_school')
                    ->join('schools', 'schools.id', '=', 'member_school.school_id')
                    ->join('members', 'members.id', '=', 'member_school.member_id')
                    ->select('schools.*', 'members.*')
                    ->where('member_school.member_id', '=', auth()->user()->id)
                    ->get();
                    //->count();

        //dd($schoolcount);
        return view('home')->withSchoolcount($schoolcount);
    }

}
