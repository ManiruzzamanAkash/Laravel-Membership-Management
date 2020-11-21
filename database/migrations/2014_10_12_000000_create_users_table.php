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
//         id	name	username	password	email	phone_no	present_address	parmanent_address
// status	image	designation_id	deleted_at	created_at	updated_at	created_by	updated_by

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('phone_no')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('present_address')->nullable();
            $table->string('parmanent_address')->nullable();
            $table->unsignedBigInteger('desgination_id');
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->string('image')->nullable();
            $table->rememberToken();
            $table->softDeletes();

            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');

            $table->foreign('desgination_id')->references('id')->on('designations');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
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
