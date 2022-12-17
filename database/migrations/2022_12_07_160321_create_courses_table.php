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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('teacher_id');
            $table->string('title');
            $table->text('objective');
            $table->longText('description');
            $table->text('starting_date');
            $table->integer('fee');
            $table->integer('offer_fee')->default(0);
            $table->text('image');
            $table->text('offer_image')->nullable();
            $table->text('offer_date')->nullable();
            $table->integer('hit_count')->default(0);
            $table->tinyInteger('offer_status')->default(0);
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('courses');
    }
};
