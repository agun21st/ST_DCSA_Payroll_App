<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;
    protected $table = 'salaries';
    protected $fillable = [
        'employee_id',
        'employee_code',
        'basic',
        'house_rent',
        'medical',
        'mobile',
        'gross_salary',
        'welfare',
        'provident_fund',
        'net_salary',
        'entry_by',
        'status',
    ];
}
