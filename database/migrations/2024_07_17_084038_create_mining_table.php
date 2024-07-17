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
        Schema::create('mining', function (Blueprint $table) {
            $table->integer("id")->autoIncrement()->unique();
            $table->integer('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->timestamp('date');
            $table->integer('mined_weight');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mining');
    }
};
