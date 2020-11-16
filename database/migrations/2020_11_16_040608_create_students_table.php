<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->string('name', 100);
            $table->string('cpf', 14);
            $table->date('birthdate');
            $table->string('sex', 1);
            $table->string('phone', 15);
            $table->string('address');

            $table->unsignedBigInteger('instructor_id')->nullable();
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('set null');
            
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
        Schema::dropIfExists('students');
    }
}
