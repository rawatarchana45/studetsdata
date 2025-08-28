<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{


    public function homePage()
    {

        $name = [
            'archana',
            'sajal',
            'gaurav',
            'anmol'
        ];

        return view('pages.home', compact('name'));
    }

    public function check()
    {
        $num = 4657;
        $rev = 0;
        while ($num > 0) {

            $ld = $num % 10;
            $rev = $rev * 10 + $ld;
            $num = (int)($num / 10);
        }
        return [$rev, $ld, $num];
    }

    public function year()
    {
        $num = 8;
        if ($num % 4 == 0) {
            return 'its a leap year';
        } else {
            return 'not a leap year';
        }
    }

    public function ducknumber()
    {
        $num = 600005;
        $count = 0;

        while ($num > 0) {
            $ld = $num % 10; // last digit
            if ($ld == 0) {
                $count++;
            }
            $num = (int)($num / 10); // remove last digit
        }

        return $count;
    }



    public function aboutPage()
    {
        return "Hello ABout";
        return view('pages.about');
    }

    public function coursepage()
    {
        return "about page";
        return view('pages.course');
    }
    public function servicepage()
    {
        return "service page";
        return view('pages.service');
    }



    public function printTable()
    {


        $students = [
            [
                'name' => "Guarav",
                'designation' => "Dev"
            ],
            [
                'name' => "Archna",
                'designation' => "Vlogger"
            ],
            [
                'name' => "Raksha",
                'designation' => "Engineer"
            ],
        ];
        $isLoggedIn = true;

        return view('pages.table', compact('students', 'isLoggedIn'));
    }


    public function datatable()
    {
        $studentdata = [
            [
                'name' => "gaurav amoli",
                'class' => "8th",
                'age' => "15",
                'address' => "gumaniwala"

            ],
            [
                'name' => "Archana",
                'class' => "12th",
                'age' => "20",
                'address' => "mansa devi"
            ],
            [
                'name' => "akhilesh",
                'class' => "12th",
                'age' => "20",
                'address' => "dehradun"
            ],
            [
                'name' => "raksha",
                'class' => "8th",
                'age' => "15",
                'address' => "risikesh"
            ],
        ];

        return view('pages.table', compact('studentdata'));
    }

    public function table2()
    {
        $datas = [
            [
                'name' => 'archana',
                'class' => '12th',
            ],

            [
                'name' => 'akhilesh',
                'class' => '12th',
            ],

            [
                'name' => 'raksha',
                'class' => '12th',
            ],
            [
                'name' => 'anmol',
                'class' => '12th',
            ],
        ];
        // $datas = [];

        return view('pages.table', compact('datas'));
    }

    public function count()
    {
        $num = 0;
        $count = 0;

        do {
            $count++;
            $num = (int)($num / 10);
        } while ($num > 0);

        return $count;





        return view('pages.table');
    }



    // Handling forms

    public function addRecordPage()
    {
        return view('pages.add-record');
    }
    public function addRecord(Request $request)
    {

        // $request->validate($rules,$messages);
        $request->validate(
            [
                'name' => 'required|max:10',
                'rank_no' => 'required|numeric'
            ],
            [
                'name.required' => "Please Enter a name",
                'name.max' => 'Plz enter shorter name'
            ]
        );

        $name = $request->name;
        $rankNo = $request->rank_no;

        return [$name, $rankNo];
    }

    public function addforms()
    {

        return view('pages.form');
    }
    public function addnewforms(Request $request)
    {
        // return $request;
        $request->validate(
            [
                'name' => "required",
                'class' => "required",
                'phone_no' => "required|numeric|digits:10",
                'address' => "required",
            ]
        );
        $name = $request->name;
        $class = $request->class;
        $phone_no = $request->phone_no;
        $address = $request->address;

        return [$name, $class, $phone_no, $address];
    }

    public function addpic()
    {
        return view('pages.addform');
    }


    public function addwrite(Request $request)
    {
        // return $request;
        $request->validate([
            'name'        => 'required|max:6',
            'class'       => 'required',
            'phone_no'    => 'required',
            'address'     => 'required',
            'rank_no'     => 'required',
            'school_name' => 'required',
        ]);

        $name       = $request->name;
        $class      = $request->class;
        $phone_no   = $request->phone_no;
        $address    = $request->address;
        $rank_no    = $request->rank_no;
        $school_name = $request->school_name;

        // return [$name, $class, $phone_no, $address, $rank_no, $school_name];
        // return redirect()->back()->withErrors($validated)->withInput();
    }

    public function datafill(){
        $datas = DB::table('sajalsir')->get();

        return view('student.index2', compact('datas'));
    }
}
