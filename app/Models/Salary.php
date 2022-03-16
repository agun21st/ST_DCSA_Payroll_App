<?php

namespace App\Models;

use App\Models\Admin\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
