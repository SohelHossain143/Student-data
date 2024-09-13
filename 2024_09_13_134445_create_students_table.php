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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
           $table->string('name', 25)->notNull();
            $table->string('email', 25)->unique(); // Add unique constraint for email
            $table->integer('roll')->notNull(); // No auto_increment or primary key for 'roll'
            $table->string('reg', 20)->notNull();  // No auto_increment or primary key for 'reg'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
