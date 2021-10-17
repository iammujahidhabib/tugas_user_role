<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
            $table->string('npk');
            $table->string('address');
            $table->string('phone_number');
            $table->string('job');
            $table->integer('role_id')->unsigned()->nullable();
            $table->foreign('role_id', 'role_id_user')->references('id')->on('roles')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('npk');
            $table->dropColumn('address');
            $table->dropColumn('phone_number');
            $table->dropColumn('job');
            $table->dropColumn('role');
        });
    }
}
