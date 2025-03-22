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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('emial',255)->unique();
            $table->string('phone',20);
            $table->string('subject',255)->nullable();
            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};


//لو هعدل جدول اليوزرز
// $table->string('phone')->nullable(); 
// $table->string('address')->nullable(); 
// $table->enum('role', ['patient', 'admin', 'doctor'])->default('patient'); 
// $table->boolean('is_active')->default(true); 