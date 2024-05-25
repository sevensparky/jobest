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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('industry_type_id')->constrained()->cascadeOnDelete();
            $table->foreignId('organization_type_id')->constrained()->cascadeOnDelete();
            $table->foreignId('team_size_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('slug');
            $table->text('logo');
            $table->text('banner');
            $table->date('establishment_date')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->text('bio');
            $table->text('vision');
            $table->integer('total_views')->default(0);
            $table->text('address')->nullable();
            $table->foreignId('city')->nullable();
            $table->foreignId('state')->nullable();
            $table->foreignId('country');
            $table->text('map_link')->nullable();
            $table->boolean('is_profile_verified')->default(0);
            $table->timestamp('document_verified_at')->nullable();
            $table->boolean('profile_completion')->default(0);
            $table->boolean('visibility')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
