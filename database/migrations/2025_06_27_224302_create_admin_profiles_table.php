<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('admin_profile', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('instagram')->nullable();
            $table->string('education')->nullable();
            $table->string('name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin_profile');
    }
};
