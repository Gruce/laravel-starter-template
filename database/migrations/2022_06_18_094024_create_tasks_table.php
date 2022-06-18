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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(false); 
            $table->integer('state')->default(1); // 1: new  2: in progress  3: done  4: hanging  5: rejected 6: accepted  7: Certified  8: Unaccredited
            $table->boolean('is archived')->default(false);
            $table->integer('importance')->default(1); // 1: low , 2: medium , 3: high
            $table->string('file_path')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('tasks');
    }
};
