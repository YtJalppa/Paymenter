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
        Schema::table('settings', function (Blueprint $table) {
            $table->string('advanced_mode')->default('false');
            $table->string('currency_position')->default('left');
            $table->string('home_page_text')->nullable();
            $table->string('app_name')->nullable();
            $table->boolean('sidebar')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn('advanced_mode');
            $table->dropColumn('currency_position');
            $table->dropColumn('home_page_text');
            $table->dropColumn('app_name');
            $table->dropColumn('sidebar');
        });
    }
};
