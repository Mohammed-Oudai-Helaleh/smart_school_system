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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->nullable()
            ->constrained('users', 'id')
            ->onUpdate('cascade')
            ->onDelete('restrict');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('img')->nullable();
            $table->integer('age');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone');
            $table->longText('about');
            $table->integer('salary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
