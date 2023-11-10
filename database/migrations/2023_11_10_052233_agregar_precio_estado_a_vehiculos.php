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
        Schema::table('vehiculo', function (Blueprint $table) {
            $table->decimal('precio', 10, 2)->nullable();
            $table->integer('estado')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('vehiculo', function (Blueprint $table) {
            $table->dropColumn('precio');
            $table->dropColumn('estado');
        });
    }
};
