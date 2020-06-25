<?php

namespace App\Http\Controllers;
use App\Student;
use App\User;
use Auth;
use Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/addStudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $student = new Student;
        $student->firstName = $request->get('firstname');
        $student->lastName = $request->get('lastname');
        $student->class = $request->get('class');
        $student->description = $request->get('description');
        $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). ".".$extension;
            $file->move('image/', $filename);
            $student->picture = $filename;
        $student->tutor = $request->get('tutor');
        $student->activeFollowup = $request->get('activeFollowup');
        $student->user_id = $user->id ;
        $student->save();
        return redirect('admin/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('admin/viewDetailStudent', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $student = Student::find($id);
        return view('admin/editStudent', compact('student'));
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
        $user = User::find(Auth::user()->id);
        $student = Student::find($id);
        $student->firstName = $request->get('firstname');
        $student->lastName = $request->get('lastname');
        $student->class = $request->get('class');
        $student->description = $request->get('description');
        if ($request->hasfile('picture')){
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). ".".$extension;
            $file->move('image/', $filename);
            $student->picture = $filename;
        }
        $student->tutor = $request->get('tutor');
        $student->activeFollowup = $request->get('activeFollowup');
        $student->user_id = $user->id;
        $student->save();
        return redirect('admin/dashboard');
    }


    //// Update status student into out of followup List
    public function updateToOutOfFollowup($id){
        $student = Student::find($id);
        $student->activeFollowup = false;
        $student->save();
        return back();
    }

     //// Update status student bakc to followup List
     public function backToFollowup($id){
        $student = Student::find($id);
        $student->activeFollowup = true;
        $student->save();
        return back();
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

