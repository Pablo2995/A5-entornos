<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tareas', function (Blueprint $table) {
            $table->enum('prioridad', ['alta','media','baja'])->default('media');
            $table->string('categoria')->nullable();
            $table->boolean('completada')->default(false);
            $table->date('fecha_limite')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('tareas', function (Blueprint $table) {
            $table->dropColumn(['prioridad','categoria','completada','fecha_limite']);
        });
    }
};
