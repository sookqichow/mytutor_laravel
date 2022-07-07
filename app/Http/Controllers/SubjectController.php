<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
class SubjectController extends Controller
{
    public function savesubject(Request $request)
    {
        echo json_encode($request->all());
        $newSubject = new subject();
        $newSubject->title= $request->title;
        $newSubject->description = $request->description;
        $newSubject->price = $request->price;
        $newSubject->hours= $request->hours;
        $newSubject->save();
        return redirect('mainpage')->with('save', 'Success')->withErrors('error', 'Failed');

      
    }

    public function newsubject()
    {
        return view('newsubject');
    }

    public function mainpage()
    {
        if (Auth::check()) {
            return view('mainpage', ['listSubject' => Subject::all()]);
            }
            return redirect("login")->withSuccess('You do not have access');
    }
}
