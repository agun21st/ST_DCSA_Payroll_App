<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'status',
    ];
}
