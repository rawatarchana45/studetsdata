<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    public function index()
    {
        $person = Person::where('gender','!=','female')
        ->where('name','archana')
        ->get();
        // $person = DB::table('people')->get();
        return $person;
    }
}
