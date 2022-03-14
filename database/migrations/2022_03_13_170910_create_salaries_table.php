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
            $table->string("employe_id");
            $table->string("job_type")->default("Full time");
            $table->integer("basic_salary")->default(0);
            $table->integer("increment");
            $table->integer("working_hour");
            $table->integer("hourly_rate");
            $table->integer("house_rent")->default(0);
            $table->integer("medical")->default(0);
            $table->integer("conveyance")->default(0);
            $table->integer("special_bonus")->default(0);
            $table->integer("provident_fund")->default(0);
            $table->integer("gas")->default(0);
            $table->integer("electricity")->default(0);
            $table->integer("water")->default(0);
            $table->integer("insurance")->default(0);
            $table->integer("welfare")->default(0);
            $table->integer("gross_salary")->default(0);
            $table->integer("net_salary")->default(0);
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
        Schema::dropIfExists('salaries');
    }
}
