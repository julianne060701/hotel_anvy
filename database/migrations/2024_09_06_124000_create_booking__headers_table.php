<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('booking__headers', function (Blueprint $table) {
            $table->id();
            $table->integer('person_id');
            $table->dateTime('date');
            $table->integer('total_cost');
            $table->string('status');
            $table->string('type');
            $table->integer('pts_earned');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking__headers');
    }
};
