<?php

namespace App\Http\Controllers;


use App\Models\Student;

use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class StudentController extends Controller
{
    // public function createPDF()
    // {
    //     $pdf = PDF::loadview('registrasi.view.pdf', [
    //         'view' => View::latest()->frist(),
    //         'nisn' => $request->nisn,
    //     ]);

    //     return $pdf->download('registrasi.registrasi.pdf');
    // }


    public function index()
    {
        $data = Student::all();
        // dd($tabungan);
       
        return view('registrasi.view' , compact('data'));
        
    }
    public function print(Student $student) {
        return view('print')->with('student', $student);
    }

    public function student(Request $request)
    {

        $request->validate([
            'NISN' => 'required',
            'jenis_kelamin' => 'required',
            'nama' => 'required',
            'asal_sekolah' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'phone_number_ayah' => 'required',
            'phone_number_ibu' => 'required',


        ]);

        
        Student::create([
            'NISN' => $request->NISN,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nama' => $request->nama,
            'asal_sekolah' => $request->asal_sekolah,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'phone_number_ayah' => $request->phone_number_ayah,
            'phone_number_ibu' => $request->phone_number_ibu,
            'role' => 'student', 
        ]);

        User::create([
            'role' => 'student',
            'email' => $request->email,
            'password' => Hash::make($request->NISN),
        ]);


        $student = Student::latest()->get()->first();

        return view('registrasi.view', compact('student'));

    }

    // User::create({
    //     'name' =>
    // })

    public function store(Request $request) {

        $credentials = $request->validate([
            
            'email' => ['required', 'email'],
            'NISN' =>['required']
        ]);

        $credentials['password'] = bcrypt($credentials['password']);

        Student::create($credentials);

        return view('registrasi.view', compact('student'));
    }

   

    public function auth(Request $request){

        $credentials = $request->validate([
            'email' => 'required', 
        ]);

        $credentials['password'] = $request->password;
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role == 'admin'){
                return redirect('/admin-dashboard');
               } else {
                return redirect('/student-dashboard');
               }
            }
        }

   
               public function logout() {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}
