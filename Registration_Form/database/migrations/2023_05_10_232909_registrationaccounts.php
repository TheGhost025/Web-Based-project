<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    public function up()
    {
        Schema::table('new_users', function (Blueprint $table) {
            $table->string('full_name', 500);
            $table->string('user_name', 500);
            $table->date('birthdate');
            $table->integer('phone');
            $table->string('address', 500);
            $table->string('password', 500);
            $table->string('confirm_password', 500);
            $table->string('user_image', 5000);
            $table->string('email', 500)->unique();
        });
    }


    public function down()
    {
        Schema::table('registrationaccounts', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }
};
