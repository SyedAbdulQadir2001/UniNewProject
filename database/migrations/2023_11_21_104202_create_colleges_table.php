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
        Schema::create('colleges',  function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("Contact");
            $table->string("Contact_Person");
            $table->string("Email");
            $table->string("Address");
            $table->string("Principal");
            $table->string("Principal_Contact");
            $table->string("Type");
            $table->integer("user_id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colleges');
    }
};
