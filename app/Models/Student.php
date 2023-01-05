<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "student_registers";
    protected $fillable = ['NISN', 'jenis_kelamin', 'nama', 'asal_sekolah', 'email', 'phone_number', 'phone_number_ayah', 'phone_number_ibu', 'role'];

   

}
