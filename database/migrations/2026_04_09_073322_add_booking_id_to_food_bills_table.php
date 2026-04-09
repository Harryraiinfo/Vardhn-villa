<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('food_bills', function (Blueprint $table) {
            $table->unsignedBigInteger('booking_id')->after('id');
        });
    }

    public function down()
    {
        Schema::table('food_bills', function (Blueprint $table) {
            $table->dropColumn('booking_id');
        });
    }
};
