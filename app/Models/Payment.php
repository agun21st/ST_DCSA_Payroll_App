<?php

namespace App\Models;

use App\Models\Salary;
use App\Models\Admin\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
    protected $fillable = [
        'employee_id',
        'salary_id',
        'employee_code',
        'payment_date',
        'payment_month',
        'payment_year',
        'serial_no',
        'status',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
    public function salary()
    {
        return $this->belongsTo(Salary::class, 'salary_id');
    }
}
