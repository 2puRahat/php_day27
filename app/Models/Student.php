<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $student;

    public function newStudent()
    {
        $this->student = new Student();
        $this->student->name    = 'Riaz';
        $this->student->email   = 'riaz@gmail.com';
        $this->student->mobile  = '256789';
        $this->student->save();
    }

    public function getAllStudent()
    {
        return [
            0 => [
                'id'        => 1,
                'name'      => 'Shahabuddin',
                'email'     => 'shahabuddin@gmail.com',
                'mobile'    => '01715456789',
                'image'     => '',
            ],
            1 => [
                'id'        => 2,
                'name'      => 'Jahed',
                'email'     => 'jahed@gmail.com',
                'mobile'    => '01815456789',
                'image'     => '',
            ]
        ];
    }
}
