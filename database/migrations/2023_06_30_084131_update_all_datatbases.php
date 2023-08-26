<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAllDatatbases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_choices', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user')->change();
            $table->unsignedBigInteger('id_finishing_level')->change();
            $table->unsignedBigInteger('id_finishing_status')->change();
            $table->unsignedBigInteger('id_governorates')->change();
            $table->unsignedBigInteger('id_establishment_type')->change();


            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_finishing_level')->references('id')->on('finishing_levels')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_finishing_status')->references('id')->on('finishing_status')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_governorates')->references('id')->on('governorates')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_establishment_type')->references('id')->on('establishment_types')->onUpdate('cascade')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
