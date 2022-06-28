<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB as FacadesDB;

class StudViewController extends Controller
{
    //
    public function index()
    {
        $users = FacadesDB::select('select * from databm');
        return view('stud_view', ['users' => $users]);
    }
}
