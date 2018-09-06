<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddUserIdToTask extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        schema::table('tasks', function ($table) {
            $table->integer('user_id');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('tasks', function ($table) {
            $table->dropColumn('user_id');
        });
    }
}
