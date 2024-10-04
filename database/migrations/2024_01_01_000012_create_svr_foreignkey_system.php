<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('system.system_modules_actions', function (Blueprint $table)
        {
            $table->foreign('module_slug')->references('module_slug')->on('system.system_modules')->cascadeOnUpdate()->noActionOnDelete();
        });

        Schema::table('system.system_roles_rights', function (Blueprint $table)
        {
            $table->foreign('role_slug')->references('role_slug')->on('system.system_roles')->cascadeOnUpdate()->noActionOnDelete();
        });

        Schema::table('system.system_users_notifications', function (Blueprint $table)
        {
            $table->foreign('user_id')->references('user_id')->on('system.system_users')->cascadeOnUpdate()->noActionOnDelete();
            $table->foreign('author_id')->references('user_id')->on('system.system_users')->cascadeOnUpdate()->noActionOnDelete();
        });

        Schema::table('system.system_users_roles', function (Blueprint $table)
        {
            $table->foreign('user_id')->references('user_id')->on('system.system_users')->cascadeOnUpdate()->noActionOnDelete();
            $table->foreign('role_slug')->references('role_slug')->on('system.system_roles')->cascadeOnUpdate()->noActionOnDelete();
        });

        Schema::table('system.system_users_tokens', function (Blueprint $table)
        {
            $table->foreign('user_id')->references('user_id')->on('system.system_users')->cascadeOnUpdate()->noActionOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
