<?php

namespace App\Models\Admin;

use App\Models\Salary;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function salary()
    {
        return $this->hasMany(Salary::class, 'employee_id');
    }
}