<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('bills', function (Blueprint $table) {
        $table->id();
        $table->foreignId('op_id')->constrained('op_visits')->onDelete('cascade');
        $table->integer('consultation_fee');
        $table->integer('lab_fee')->default(0);
        $table->integer('medicine_fee')->default(0);
        $table->integer('total');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
