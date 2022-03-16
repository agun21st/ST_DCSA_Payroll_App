<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string("employee_code")->unique();
            $table->integer("basic")->default(0);
            $table->integer("house_rent")->default(0);
            $table->integer("medical")->default(0);
            $table->integer("mobile")->default(0);
            $table->integer("gross_salary")->default(0);
            $table->integer("welfare")->default(0);
            $table->integer("provident_fund")->default(0);
            $table->integer("net_salary")->default(0);
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
        Schema::dropIfExists('salaries');
    }
}
