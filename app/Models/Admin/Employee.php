<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = [
        'employee_code',
        'name',
        'school',
        'department',
        'designation',
        'dob',
        'gender',
        'joining_date',
        'qualification',
        'email',
        'mobile',
        'address',
        'employee_image',
        'entry_by',
        'status'
    ];
}