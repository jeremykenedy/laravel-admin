<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserlevelsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ADD INITIAL ADMIN COLUMN TO USERS TABLE
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger('user_level')->default(1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // REMOVE ADMIN COLUMN FROM USERS TABLE
        Schema::table('users', function(Blueprint $table)
        {
            $table->dropColumn('user_level');
        });
    }
}