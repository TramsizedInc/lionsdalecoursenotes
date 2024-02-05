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
        Schema::create('course_user', function (Blueprint $table) {
            $table->id();
            $table->boolean('seen')->default(false);
            $table->boolean('compleated')->default(false);
            $table->timestamps();
        });
        Schema::table('course_user', function (Blueprint $table) {
            $table->foreignId('user_id')->after('id')->references('id')->on('users')->constrained();
        });
        Schema::table('course_user', function (Blueprint $table) {
            $table->foreignId('course_id')->after('id')->references('id')->on('courses')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_user');
    }
};
