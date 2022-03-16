<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("employee_code")->unique();
            $table->string("name")->nullable();
            $table->string("school")->nullable();
            $table->string("department")->nullable();
            $table->string("designation")->nullable();
            $table->string("dob")->nullable();
            $table->string("gender")->nullable();
            $table->string("joining_date")->nullable();
            $table->string("qualification")->nullable();
            $table->string("email")->unique();
            $table->string("mobile")->nullable();
            $table->string("address")->nullable();
            $table->string("employee_image")->nullable();
            $table->integer("entry_by");
            $table->tinyInteger('status')->unsigned()->default(1);
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
        Schema::dropIfExists('employees');
    }
}
