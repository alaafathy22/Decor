<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUserChoices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('user_choices')) {
            // Schema::drop('establishment_types');
        } else {
            Schema::create('user_choices', function (Blueprint $table) {
                $table->id();
                $table->integer('id_user');
                $table->integer('id_finishing_level');
                $table->integer('id_finishing_status');
                $table->integer('id_governorates');
                $table->integer('id_establishment_type');
                $table->float('total_cost')->default(0);
                $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_choices');
    }
}
