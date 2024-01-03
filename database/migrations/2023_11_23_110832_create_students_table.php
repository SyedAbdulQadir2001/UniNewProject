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
        Schema::create('std', function (Blueprint $table) {
            $table->id();
            $table->string("name",50)->nullable();
            $table->string("fatherName",50)->nullable();
            $table->integer("cnic")->nullable();
            $table->string("address", 150)->nullable();
            $table->date("dob")->nullable();
            $table->string("rno")->nullable();
            $table->string("pic_path")->nullable();
            $table->integer("user_id")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('std');
    }
};
