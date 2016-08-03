<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemesterBranchSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semester_branch_subjects', function (Blueprint $table) {
            $table->increments('semester_branch_subject_id');
            $table->integer('semester_branch_id');
            $table->integer('subject_id');
            $table->integer('start_session_id');
            $table->integer('end_session_id');
            $table->unique(['semester_branch_id', 'subject_id'], 'sem_branch_subject'); //duplicate subject
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
        Schema::drop('semester_branch_subjects');
    }
}
