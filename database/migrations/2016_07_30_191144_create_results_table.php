<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('result_id');
            $table->integer('student_id');
            $table->integer('semester_branch_subject_id');
            $table->integer('session_id');
            $table->float('marks_endsem');
            $table->float('marks_quiz');
            $table->float('marks_midsem1');
            $table->float('marks_midsem2');
            $table->float('marks_midsem3');
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
        Schema::drop('results');
    }
}
