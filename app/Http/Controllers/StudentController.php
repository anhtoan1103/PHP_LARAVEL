<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function create(Request $request)
    {
        $studentname = $request['studentname'];
        $course = $request['course'];
        $fee = $request['fee'];
        $info = new Student;
        $info->studentname = $studentname;
        $info->course = $course;
        $info->fee = $fee;
        $info->save();
        echo "Them thanh cong";
        return redirect()->route('read');
    }

    public function read()
    {
        $select = DB::table('students')->get();
        return view('read', ['students' => $select]);
    }

    public function edit($id)
    {
        $studentById = DB::table('students')->find($id);
        return view('edit', ['studentById' => $studentById]);
    }

    public function delete()
    {
    }
}
