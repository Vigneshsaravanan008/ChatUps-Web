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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('image')->nullable();
            $table->integer('type')->comment('1:high school;2:college;3:work');
            $table->integer('currently_working')->comment('1:yes;2:no');
            $table->longText('school')->nullable();
            $table->integer('from_year');
            $table->integer('to_year')->nullable();
            $table->longText('company')->nullable();
            $table->longText('position')->nullable();
            $table->longText('city')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education');
    }
};
