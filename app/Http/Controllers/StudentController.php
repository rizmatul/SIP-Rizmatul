<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_student = \App\Student::where('name', 'LIKE', '%' .$request->cari. '%')->get();
        }else{
            $data_student = \App\Student::all();
        }
        return view('student.index', ['data_student' => $data_student]);
    }

    public function create(Request $request)
    {
        
        $user = new \App\User;
        $user->role = 'user';
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        $student = \App\Student::create($request->all());
        return redirect('/student')->with('sukses', "data berhasil dibuat");
    }

    public function edit($id)
    {
        $student = \App\Student::find($id);
        return view('student/edit', ['student' => $student]);
    }

    public function update(Request $request,$id)
    {
        $student = \App\Student::find($id);
        $student->update($request->all());
        if($request->hasfile('gambar')){
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $student->gambar = $request->file('gambar')->getClientOriginalName();
            $student->save();
        }
        return redirect('/student')->with('sukses', "data berhasil diupdate");
    }

    public function delete($id)
    {
        $student = \App\Student::find($id);
        $student->delete($student);
        return redirect('/student')->with('sukses', "data berhasil dihapus");
    }

    public function profil($id)
    {
        $student = \App\Student::find($id);
        return view('student/profil', ['student' => $student]);
    }
}
