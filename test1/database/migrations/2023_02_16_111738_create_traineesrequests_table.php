<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traineesrequests', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->length(55);
            $table->string('last_name')->length(55);
            $table->date('b_day');
            $table->string('email')->length(55);
            $table->string('address')->length(55);
            $table->string('phone');
            $table->string('course_name')->length(55);
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
        Schema::dropIfExists('traineesrequests');
    }
};
