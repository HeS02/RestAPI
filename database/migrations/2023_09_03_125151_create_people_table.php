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
        Schema::create('People', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('FirstName', 45);
            $table->string('LastName', 45);
            $table->integer('Age');
            $table->string('Street', 50);
            $table->string('City', 60);
            $table->string('Country', 60);
            $table->boolean('EmploymentStatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('People');
    }
};
