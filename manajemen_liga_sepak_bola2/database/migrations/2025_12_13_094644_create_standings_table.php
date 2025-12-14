<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
     Schema::create('standings', function (Blueprint $table) 
     {
        $table->id();
        $table->foreignId('team_id')->constrained('teams')->cascadeOnDelete();
        $table->integer('main')->default(0);
        $table->integer('menang')->default(0);
        $table->integer('seri')->default(0);
        $table->integer('kalah')->default(0);
        $table->integer('gol_masuk')->default(0);
        $table->integer('gol_kebobolan')->default(0);
        $table->integer('poin')->default(0);
        $table->timestamps();
     });

    }

    public function down(): void
    {
        Schema::dropIfExists('standings');
    }
};
