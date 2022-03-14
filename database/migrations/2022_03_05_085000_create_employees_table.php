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
            $table->string("employee_id")->nullable();
            $table->string("name")->nullable();
            $table->string("school")->nullable();
            $table->string("designation")->nullable();
            $table->string("joining_date")->nullable();
            $table->string("dob")->nullable();
            $table->string("phone")->nullable();
            $table->string("email")->unique();
            $table->string("address")->nullable();
            $table->string("qualification")->nullable();
            $table->text("job_description")->nullable();
            $table->string("job_experience")->nullable();
            $table->string("publications")->nullable();
            $table->string("outstanding_quality")->nullable();
            $table->string("employee_image")->nullable();
            $table->integer("entry_by");
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
