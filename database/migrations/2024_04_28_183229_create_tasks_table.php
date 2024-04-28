<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Título                                   -> title
     * Descrição                                -> description
     * Data e hora que a tarefa acontecerá      -> time
     * Tempo de duração                         -> duration_minutes
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title','100');
            $table->string('description','250');
            $table->datetime('date_time');
            $table->unsignedInteger('duration_minutes')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
