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
        Schema::create('examination_form', function (Blueprint $table) {
            $table->integer('EXMID');
            $table->integer('COLID');
            $table->integer('SEATNO');
            $table->string('REGNO', 50);
            $table->string('NAME', 100);
            $table->string('FNAME', 100);
            $table->string('PREF', 20);
            $table->string('REMARKS', 100);
            $table->integer('STATUS');
            $table->integer('PART');
            $table->integer('REGYEAR');
            $table->string('SEX', 2);
            $table->integer('RNO');
            $table->integer('EXMYEAR');
            $table->integer('ANSUPP');
            $table->integer('PASS');
            $table->string('SUBJECTS', 150);
            $table->string('COLABB', 10);
            $table->string('PICTUREPATH', 100);
            $table->string('CELL_NO', 20);
            $table->string('EMAIL', 150);
            $table->integer('CNIC');
            $table->string('ADDRESS', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examination_form');
    }
};
