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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 50)->nullable();
            $table->string('password', 128);
            $table->string('erp_user_id', 50)->nullable();
            $table->integer('roles_id')->default(1);
            $table->integer('organization_id')->nullable();
            $table->boolean('is_tmm')->default(false);
            $table->boolean('is_login_mobile')->default(false);
            $table->rememberToken();
            $table->string('nik', 15)->nullable();
            $table->string('full_name', 150);
            $table->string('email')->unique();
            $table->string('phone', 50);
            $table->longText('image_url')->nullable();
            $table->string( 'bank_name', 50)->nullable();
            $table->string( 'bank_account', 50)->nullable();
            $table->boolean( 'has_npwp')->default(false);
            $table->string( 'address')->nullable();
            $table->boolean( 'is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
