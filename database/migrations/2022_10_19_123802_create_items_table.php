<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('items', function (Blueprint $table) {
            $table->engine = 'myIsam';
            $table->id();
            $table->string('name');
            $table->unsignedDouble('weight');
            $table->unsignedDouble('volume');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('items');
    }
};
