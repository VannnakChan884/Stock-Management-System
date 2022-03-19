<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('user_roles_id')->default(1);
            $table->integer('created_user_id')->default(1);
            $table->integer('updated_user_id')->default(1);
            $table->string('name');
            $table->string('user_name')->default('No name');
            $table->string('password');
            $table->string('email')->unique();
            $table->char('gender',1)->default('f');
            $table->string('address')->default('');
            $table->date('date_of_birth')->default('2000-02-20');
            $table->tinyInteger('subscriber')->default(0);
            $table->string('activation_code')->default('abcdef');
            $table->tinyInteger('is_active')->default(0);
            $table->tinyInteger('is_trush')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
