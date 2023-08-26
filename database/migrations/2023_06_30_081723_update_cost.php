<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cost_status_level', function (Blueprint $table) {
            $table->unsignedBigInteger('id_finishing_level')->change();
            $table->unsignedBigInteger('id_finishing_status')->change();
            $table->foreign('id_finishing_level')->references('id')->on('finishing_levels')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_finishing_status')->references('id')->on('finishing_status')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('cost_status_level');
    }
}
