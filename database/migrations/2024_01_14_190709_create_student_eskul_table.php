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
        Schema::create('student_eskul', function (Blueprint $table) {
            $table ->unsignedBigInteger('student_id')->required();
            $table->foreign('student_id')->references('id')->on('student')->onDelete('restrict');
            $table ->unsignedBigInteger('eskul_id')->required();
            $table->foreign('eskul_id')->references('id')->on('eskul')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_eskul');
    }
};
