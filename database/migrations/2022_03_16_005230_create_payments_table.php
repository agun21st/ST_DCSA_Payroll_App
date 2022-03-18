<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('salary_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string("employee_code")->nullable();
            $table->string("payment_date")->nullable();
            $table->string("payment_month")->nullable();
            $table->string("payment_year")->nullable();
            $table->string("serial_no")->nullable();
            $table->string("status")->default("unpaid");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
