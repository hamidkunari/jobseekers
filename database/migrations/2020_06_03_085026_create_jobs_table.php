<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
              $table->string('user_id')->nullable();
            $table->string('company_id')->nullable();
            $table->string('title')->nullable()->nullable();
            $table->string('slug')->nullable();
            $table->string('description')->nullable();
            $table->text('roles')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('position')->nullable();
            $table->string('address')->nullable();
            $table->string('type');
            $table->integer('status')->nullable();
            $table->date('last_date')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
