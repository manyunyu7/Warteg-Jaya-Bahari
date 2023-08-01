<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFlagDeletedToRestos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restorans', function (Blueprint $table) {
            $table->string('deleted_at')->nullable(); // Adjust 'column_name' to the column where you want the new column to be placed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restorans', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
    }
}
