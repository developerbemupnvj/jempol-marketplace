<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('name');
            $table->string('identity_id')->nullable();
            $table->string('faculty')->nullable();
            $table->string('profession')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('role', ['seller', 'admin'])->defalut('seller');
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->string('store')->nullable();
            $table->string('whatsapp')->nullable();
            $table->text('store_description')->nullable();
            $table->enum('verification_status', ['not_verified', 'verified', 'requested', 'rejected'])->default('not_verified');
            $table->text('identity_card')->nullable();
            $table->rememberToken();
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
}
