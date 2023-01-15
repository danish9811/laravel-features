<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void {
        Schema::create('employees', static function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('age', 30);
            $table->string('job', 60);
            $table->string('salary', 30);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('employees');
    }
};
