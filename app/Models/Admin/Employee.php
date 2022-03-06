<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = [
        'employee_id',
        'name',
        'school',
        'designation',
        'job_type',
        'joining_date',
        'dob',
        'email',
        'phone',
        'address',
        'qualification',
        'job_description',
        'job_experience',
        'publications',
        'outstanding_quality',
        'basic_salary',
        'increment',
        'working_hour',
        'overtime_rate',
        'house_rent',
        'medical',
        'conveyance',
        'special_bonus',
        'provident_fund',
        'gas',
        'electricity',
        'water',
        'insurance',
        'welfare',
        'gross_salary',
        'net_salary',
        'employee_image',
        'entry_by',
    ];
}