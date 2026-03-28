<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('job_posts')) {
            return;
        }

        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 140);
            $table->string('meta', 120)->nullable();
            $table->text('summary')->nullable();
            $table->longText('bullets')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_posts');
    }
};

