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
        Schema::create('summer_camp_regs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('grade');
            $table->string('guardian_name');
            $table->string('home_address');
            $table->string('work');
            $table->integer('zipcode');
            $table->string('email');
            $table->string('emergency_contact');
            $table->text('about');
            $table->boolean('student_type');
            $table->longtext('camp_hours')->nullable();
            $table->longtext('weekly_class_hours')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('summer_camp_regs');
    }
};
